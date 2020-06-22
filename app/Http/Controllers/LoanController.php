<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class LoanController extends Controller
{
    //

    


    public function AskForCredit(){
        return view('Client.client-dashboard.loan');
    }

    public function SendLoanRequest(Request $request){
       $this->validate($request,[
         'project_name'  => 'required',
         'pri_commodity'  => 'required',
         'asso_commodities' => 'required',
         'b_prospective' => 'required',
         'b_existing' => 'required',
         's_prospective' => 'required',
         's_existing' => 'required',
         'pri_activities' => 'required'
       ]);
       $user_id = Sentinel::getUser()->id;

    $loan = new Loan;
      $loan->project_name = $request->input('project_name');
      $loan->pri_commodity = $request->input('pri_commodity');
      $loan->asso_commodities = $request->input('asso_commodities');
      $loan->b_prospective = $request->input('b_prospective');
      $loan->b_existing = $request->input('b_existing');
      $loan->s_prospective = $request->input('s_prospective');
      $loan->s_existing = $request->input('s_existing');
      $loan->pri_activities = $request->input('pri_activities');
      $loan->first_name = Sentinel::getUser()->first_name;
      $loan->last_name = Sentinel::getUser()->last_name;;
      $loan->gender = Sentinel::getUser()->gender;
      $loan->phone = Sentinel::getUser()->phone_number;
      $loan->loan_id = $user_id;
      $loan->save();
      return redirect()->back()->with('message', 'Succesfully sent.  we will reply you  via mail');
    }

    public function index(){
        $loans = Loan::orderBy('created_at', 'desc')->get();
        return view('my_admin.view-loan')->with('loans', $loans);
    }
}
