<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
class ClientController extends Controller
{
    //
   

    public function index(){
        $user_id = Sentinel::getUser()->id;
        $clients = Client::whereUser_id($user_id)->first();
        return view('Client.create1')->with('clients', $clients);

    }
    public function clientDashboard(){
       
        // return $user_first;
        // return view('Client.client-dashboard.dashboard');
    }

    
   public function CompleteRegistration(Request $request){
    $user_id = Sentinel::getUser()->id;
     $error = $this->validate($request, [
        'image'=> 'image|mimes:png,jpg,jpeg',
        'date_birth' => 'required',
        'lga' => 'required',
        'mi' => 'image|mimes:png,jpg,jpeg',
        'in' => 'required',
        'bvn' => 'required',
        'size' => 'required',
        'challenge' => 'required',
        'full_name' => 'required',
        'relationship' => 'required',
        'kin_address' => 'required',
        'kin_phone' => 'required',
        'kin_email' => 'required',
        'institution_name' => 'required',
        'year_obtained' => 'required',
        'institution_obtained' => 'required',
        'po' => 'required',
        'co' => 'required',
        'cname' => 'required',
        'cnature' => 'required',
        'caddress' => 'required',
        'rnumber' => 'required',
        'remail' => 'required',
        
      

     ]);
        
     if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
       
    }

    if ($request->hasFile('mi')) {
        $image = $request->file('mi');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
       
    }
  

        $post = new Client;
        $post->date_birth =  $request->date_birth;
        $post->lga =  $request->lga;
        $post->mi =  asset('/images/'.$name);
        $post->in = $request->in;
        $post->bvn = $request->bvn;
        $post->size = $request->size;
        $post->challenge = $request->challenge;
        $post->full_name =$request->full_name;
        $post->relationship = $request->relationship;
        $post->kin_address = $request->kin_address;
        $post->kin_email= $request->kin_email;
        $post->kin_phone = $request->kin_phone;
        $post->institution = $request->institution_name;
        $post->year_ob = $request->year_obtained;
        $post->institution_ob = $request->institution_obtained;
        $post->po = $request->po;
        $post->co = $request->co;
        $post->cname = $request->cname;
        $post->cnature = $request->cnature;
        $post->caddress= $request->caddress;
        $post->rnumber =$request->rnumber;
        $post->remail = $request->remail;
        $post->first_name = Sentinel::getUser()->first_name;
        $post->last_name = Sentinel::getUser()->last_name;
        $post->email =  Sentinel::getUser()->email;
        $post->phone_number =  Sentinel::getUser()->phone_number;
        $post->gender =  Sentinel::getUser()->gender;
        $post->nation =  Sentinel::getUser()->country;
        $post->state =  Sentinel::getUser()->state;
        $post->other_name =  Sentinel::getUser()->other_name;
        $post->marital =  Sentinel::getUser()->marital;
        $post->image = asset('/images/'.$name);
      
        $post->step_1 =1;
        $post->user_id = $user_id;
        $post->save();
        if($post->user_id){
            return redirect()->back()->with('message', 'Registration completed');
        }
        else{
            return redirect()->back()->with('error', 'there was an error');
        }
     
       
   }

   
  
  }

 



