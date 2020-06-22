<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enterprise;
use App\Enterpriseu;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
class EnterpriseController extends Controller
{
    //

    public function unincorporatedEnterprise(){
        return view('Client.client-dashboard.unincorporated');
    }
    public function incorporatedEnterprise(){
        return view('Client.client-dashboard.incorporated');
    }

    public function  sendUnicorporated(Request $request){
        $this->validate($request, [
            'en_name' => 'required',
            'cooperative' => 'required',
            'location' => 'required',
            'enterprise' => 'required',
            'core_enterprise' => 'required',
            'operation' => 'required',
            'category' => 'required',
            'num_workers' => 'required',
            'main_product' => 'required',
            'anual_turnover' => 'required',
            'critical_cost' => 'required',
            'challenge' => 'required',
         ]);

         $enterprise  = new Enterpriseu;
         $enterprise->en_name = $request->en_name;
         $enterprise->cor_address = $request->cooperative;
         $enterprise->location = $request->location;
         $enterprise->enterprise = $request->enterprise;
         $enterprise->core_enterprise = $request->core_enterprise;
         $enterprise->operation = $request->operation;
         $enterprise->category = $request->category;
         $enterprise->num_workers = $request->num_workers;
         $enterprise->main_product = $request->main_product;
         $enterprise->anual_turnover = $request->anual_turnover;
         $enterprise->critical_cost = $request->critical_cost;
         $enterprise->challenge = $request->challenge;
         $enterprise->num_workers = $request->num_workers;
         $enterprise->phone = Sentinel::getUser()->phone_number;
         $enterprise->first_name = Sentinel::getUser()->first_name;
         $enterprise->last_name = Sentinel::getUser()->last_name;
         $enterprise->email = Sentinel::getUser()->email;
         $enterprise->user_id =  Sentinel::getUser()->id;
         $enterprise->save();
         if($enterprise->save()){
            return redirect()->back()->with('message', 'Enterprise details submited');
        }
        else{
            return redirect()->back()->with('error', 'Enterprise details was not  submited');
        }

         
    }

    public function sendIncorporated(Request $request){
        $this->validate($request, [
            'en_name' => 'required',
            'rnumber' => 'required',
            'date_registration' => 'required',
            'cooperative' => 'required',
            'location' => 'required',
            'enterprise' => 'required',
            'core_enterprise' => 'required',
            'operation' => 'required',
            'category' => 'required',
            'num_workers' => 'required',
            'main_product' => 'required',
            'anual_turnover' => 'required',
            'critical_cost' => 'required',
            'challenge' => 'required',
         ]);

         $enterprise  = new Enterprise;
         $enterprise->en_name = $request->en_name;
         $enterprise->rnumber= $request->rnumber;
         $enterprise->date_r= $request->date_registration;                
         $enterprise->cor_address = $request->cooperative;
         $enterprise->location = $request->location;
         $enterprise->enterprise = $request->enterprise;
         $enterprise->core_enterprise = $request->core_enterprise;
         $enterprise->operation = $request->operation;
         $enterprise->category = $request->category;
         $enterprise->num_workers = $request->num_workers;
         $enterprise->main_product = $request->main_product;
         $enterprise->anual_turnover = $request->anual_turnover;
         $enterprise->critical_cost = $request->critical_cost;
         $enterprise->challenge = $request->challenge;
         $enterprise->num_workers = $request->num_workers;
         $enterprise->phone = Sentinel::getUser()->phone_number;
         $enterprise->first_name = Sentinel::getUser()->first_name;
         $enterprise->last_name = Sentinel::getUser()->last_name;
         $enterprise->email = Sentinel::getUser()->email;
         $enterprise->user_id =  Sentinel::getUser()->id;
         $enterprise->save();
         if($enterprise->save()){
            return redirect()->back()->with('message', 'Enterprise details submited');
        }
        else{
            return redirect()->back()->with('error', 'Enterprise details was not  submited');
        }


      
    }
    public function allIncorporate(){
        $enterprises = Enterprise::orderBy('created_at', 'Desc')->get();
        return view('my_admin.incorporated')->with('enterprises', $enterprises);
    }
    public function allUnincorporate(){
        $enterprises = Enterpriseu::orderBy('created_at', 'Desc')->get();
        return view('my_admin.un-incorporated')->with('enterprises', $enterprises);
    }
}
