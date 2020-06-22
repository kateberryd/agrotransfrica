<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funding;

class FundingController extends Controller
{
    //
    public function index(){
        return view('Client.register');
    }

    public function all(Request $request){
        $data = Funding::orderBy('id', 'DESC')->get();
        return view('my_admin.funds')->with('data', $data);
    }
    public function store(Request $request){
       
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'phone' =>  'required',
            'birth' => 'required',
            'gender' => 'required',
            'registerName' => 'required',
            'ar' => 'required',
            'address' => 'required',
            'state' => 'required',
            'country' => 'required'
        ]);

       
        $data = $request->all();
        Funding::create($data);
        return redirect()->back()->with('success', 'Thank you for registering with us. Verify your Account');
    }
}
