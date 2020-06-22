@extends('layouts.app')

@section('content')

<div class="container">
  
    <div class="card ">
    <div class="card-body">
    <div class="login-form">
    <form  action="{{ url ('/client-login')}}"  method="POST">
      @csrf
     
    <div class="row">
        <div class="input-field col s7">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Your Email Address*</label>
        </div>
    </div> 
      
      <div class="row">
         <div class="input-field col s7">
                <input id="password" type="text" class="validate" name="password">
                <label for="password">Your Password*</label>
          </div>
      </div>
       
      </div>
      
     <button type="submit" class="btn btn-success">Login</button>
  </form>
</div>
</div>
</div>

     

@endsection