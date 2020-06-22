  @extends('my_layouts.app')
  @section('content')
      

        <style type="text/css">
            /*@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);*/

            
            

            /* The triangle form is achieved by a CSS hack */
            h2{
              color: #fff;
              font-size: 40px;
              padding: 10px;
              text-align: center;
      
            }
          
            .header{
              color: #fff;
              font-family: fantasy;
              text-align: center;
            }
            .privacy p{
              font-size: 14px;
              text-align: center;
            }

          

]
        </style>

      <div class="container">
         <div class="header">
          <h1 class="mt-5" >Sign In</h1>
         </div>
            <div class="card col-md-5 offset-md-4 mt-5">
            <div class="card-body">
        
            <form action="{{ route('do_login') }}" method="post" class="login-container ">
                {{ csrf_field() }}
                
              <div class="row">
                  <div class=" col-md-12">

                   <label> Email Address <span class="text-danger">*</span></label>
                      <input type="email" name="email" class="form-control">
                     
                  </div>
              </div>
                
               <div class="row">
                  <div class="col-md-12">
                  <label>Enter Password <span class="text-danger">*</span></label>
                      <input type="password" name="password" class="form-control">
                     
                  </div>
              
               </div>
               <div class="btn-div row">
                  <div class="col-md-12">
                  <button type="submit" class="btn btn-success w-100 mt-3 mb-3 pl-3 pr-3">Sign In</button>
                  <div class="privacy ">
                    <p class="pt-3 ml-4">Don't have an account? <a href="{{route('register')}}">Sign Up</a></p>
                    <p class="text-default text-center ml-4"  >ACTA. Agricultural Commodities Trans-African  Alliance</p>

                    </div>
                </div>
           </div>  
            </form>
          </div>
        </div>
      </div>
  @endsection