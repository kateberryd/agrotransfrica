@extends('my_layouts.app')
@section('content')
   <style>
   
   .input-field{
       margin: 20px;
      
   }
   /* .text-center{
       font-size: 20px;
       padding: 10px;
      
   } */
   
   h1{
    font-family: Arial, Helvetica, sans-serif;
    color: #fff;
    
   }
   .p-text{
       font-size: 18px;
   }
    
   .btn{
       /* float: left !important; */
       width: 20%;
       text-align: center;
   }
   </style>       
   <div class="container">
        <h1 class=" text-center pt-5">Create an account with ACTA</h1>
        <p class="text-center text-white p-text">Agricultural Commodities Trans-African Alliance</p>
    <form method="post" action="{{ route('register') }}" role="form" class="mt-5">
        {{ csrf_field() }}
    <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
        <div class="card col-md-8 offset-md-2">
            <div class="card-body ">
           
                 @if($errors->any())
                            <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach()
                            </div>
                     @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p><b>{{ $message }}</b></p>
                    </div>
                @endif
                <div class="row">
                <div class="col-md-4">
                         <label> First Name <span class="text-danger">*</span></label>
                        <input type="text" name="first_name" class="form-control">
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    </div>
                    
                    <div class="col-md-4">
                         <label>Last Names <span class="text-danger">*</span></label>
                        <input type="text" name="last_name"  class="form-control">
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    </div>
                    <div class="col-md-4">
                          <label>Other Name</label>
                            <input type="text" name="other_name" class="form-control" >
                        </div>
                </div>   
                <div class=" row mt-4">
                    
                    <div class="col-md-6">
                        <label for="email">Email address <span class="text-danger">*</span></label>
                            <input id="email" type="text"   name="email" class="form-control" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                            
                        </div>
                    <div class="col-md-6">
                            <label>Phone Number <span class="text-danger">*</span></label>
                            <input type="text"  name="phone_number" class="form-control" >
                            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                    </div>
                
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                    <label>Gender <span class="text-danger">*</span></label>
                            <select name="gender" class="form-control" id="gender" >
                                <option value="" disabled selected>Choose your option</option>
                                <option value="male">Male</option>
                                <option value="female">female</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                    </div>
                    <div  class="col-md-6">
                    <label>Marital status <span class="text-danger">*</span></label>
                            <select name="marital" class="form-control" id="marital" >
                                <option value="" disabled selected>Choose your option</option>
                                <option value="single">single</option>
                                <option value="Married">Married</option>
                            </select>
                           
                            <span class="text-danger">{{ $errors->first('marital') }}</span>
                    </div>
                </div>
                
                <div class="row mt-4">
                       
                        <div  class=" col-md-6">
                        <label>Nationality <span class="text-danger">*</span></label>
                                <select name="country" class="form-control"  id="country" >
                                  
                                </select>
                                <span class="text-danger">{{ $errors->first('country') }}</span>
                        </div>
                       
                        <div  class="col-md-6">
                        <label>State of origin <span class="text-danger">*</span></label>
                                <select name ="state" class="form-control " id ="state">
    
                                </select>
                               
                                <span class="text-danger">{{ $errors->first('state') }}</span>
                        </div>
                        
                </div>
                <div class="row mt-4">

                <div  class="col-md-6">
                 <label>Password <span class="text-danger">*</span></label>
                        <input type="password"  name="password" class="form-control">
                     
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>                                    
                    <div cl class="col-md-6">
                    <label>Confirm Password <span class="text-danger">*</span></label>
                        <input type="password"  name="confirm_password" class="form-control" >
                        <span class="text-danger">{{ $errors->first('confirm_password'
                        ) }}</span>
                    </div>
                </div>
                <div class="row mt-3 mb-0">
                  <div class="col-md-12">
                    <p>
                        <input type="checkbox" name="check" id="test5" />
                           <label for="test5"><a href="">By checking you have agreed to our terms and  conditions</a></label>
                           <span class="text-danger">{{ $errors->first('check') }}</span>
                         </p>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">   
                    <div class="submit ">
                        <button type="submit" class="btn btn-success w-100">Register</button> 
                    </div>
                    <div class="privacy ">
                    <p class="pt-3">Already have an account? <a href="{{route('login')}}">Sign In</a></p>
                    </div>
                    </div>
                </div>
                </div>  
            </div>
            
            
        </div>
       
    </form>  
</div>     
@stop