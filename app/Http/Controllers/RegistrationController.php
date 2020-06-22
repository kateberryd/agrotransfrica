<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use AfricasTalking\SDK\AfricasTalking;

class RegistrationController extends Controller
{
   
 
    public function create(){
        
        return view('auth.register');


      }
        
       

            public function store(Request $request)
             {
              
                $username = 'kateberryd'; 
                $apiKey   = '4959e628afc876bc2c55fd06f7acee40535da6566dc5bf00fd15c8c9bbd840c6'; 
                $AT       = new AfricasTalking($username, $apiKey);

                $this->validate($request, [
                    'first_name' => 'required|max:255',
                    'last_name' => 'required|max:255',
                    'email'  => 'required|email|unique:users',
                    'phone_number' => 'required',
                    'gender'  => 'required', 
                    'marital'  => 'required', 
                    'country'  => 'required',
                    'state'  => 'required',
                    'check' => 'required',
                    'password' => 'min:8|required_with:confirm_password|same:confirm_password'

                ]);
               
                $unique = uniqid();
                $message = 'Your Account Reference PIN is'. ' '  . $unique;
                $depositor = $unique;
                $data = new User;
                $data = $request->all();
                $phoneCode = 234;
                $phoneNumber = substr($request->phone_number, 1);
                $data['depositors_name'] = $depositor;
                $user = Sentinel::registerAndActivate($data);
                $role = Sentinel::findRoleBySlug('student');
                $role->users()->attach($user);
                if($user->id){
                    $sms      = $AT->sms();

                    $recipients = $phoneCode.$phoneNumber;
                    $result   = $sms->send([
                        'to'      =>  $recipients,
                        'message' =>    $message,
                    ]);
    
                    return redirect()->back()->with('success', 'You will recieve an sms with acount Reference pin. Login to complete your registration ');
                }
            else{
                return redirect()->back()->with('error', 'there was an error');
          }
        
        }


}

