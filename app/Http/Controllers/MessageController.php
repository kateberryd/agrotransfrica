<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    //

  

    public function Sendmessage(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
  
       $message = new Message;
       $message->name = $request->input('name');
       $message->email = $request->input('email');
       $message->subject = $request->input('subject');
       $message->message =$request->input('message');
       $message->save();
       return redirect()->back()->with('message', 'Message sent successfully');
      }
   


      public function index(){
          $messages = Message::orderBy('created_at', 'Desc')->get();
          return view('my_admin.messages')->with('messages', $messages);
      }
}
