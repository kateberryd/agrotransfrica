<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agricultural Commodities Trans-African Alliance (ACTA)</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mdb.min.css">
    <link rel="stylesheet" href="/css/mdb.lite.min.css">
    <link rel="stylesheet" href="/css/style.min.css">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="/css/funding.css">
</head>
<body>
  
<div class="wrapper">
    <div class="container" style="width:60%">
            <div class="heading">          
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
                <h1 class=" text-center py-4">
                    <strong>Let's Get Started</strong>
                </h1>
            
            </div>
            <div class="card">
                <h1 class="h5-responsive mt-4 pl-5  mb-0">ACTA Funding Form</h1>
                <div class="card-body">
                    <form action="{{route('funding-store')}}"  method="post" style="color: #757575;">
                        {{ csrf_field() }}
                    <div class="form-row mt-2">
                        <div class="col-md-4">
                            <!-- First name -->
                            <div class="md-form">
                                 <i class="fa fa-user prefix"></i>
                                <input type="text" id="materialRegisterFormFirstName" name="firstName" class="form-control">
                                <label for="materialRegisterFormFirstName">First Name</label>
                                <span class="text-danger">{{ $errors->first('firstName') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- Last name -->
                            <div class="md-form">
                                 <i class="fas fa-user prefix d-inline"></i>
                                <input type="text" id="materialRegisterFormLastName" name="lastName" class="form-control">
                                <label for="materialRegisterFormLastName">Last Name</label>
                                <span class="text-danger">{{ $errors->first('otherName') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- Last name -->
                            <div class="md-form">
                                 <i class="fas fa-user prefix d-inline"></i>
                                <input type="text" id="materialRegisterFormOtherName" name="otherName" class="form-control">
                                <label for="materialRegisterFormOtherName">Other Names</label>
                                <span class="text-danger">{{ $errors->first('otherName') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mt-3">

                       <div class="col-md-4">
                            <!-- E-mail -->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="email" id="materialRegisterFormEmail" name="email" class="form-control">
                            <label for="materialRegisterFormEmail">E-mail</label>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                       </div>

                       <div class="col-md-4 mt-2">
                           <!-- Phone number -->
                           <div class="md-form">
                                <i class="fa fa-phone prefix"></i>
                                <input type="password" id="materialRegisterFormPhone" name="phone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                                <label for="materialRegisterFormPhone">Phone number</label>
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                       </div>
                       <div class="col-md-4">
                                 <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="date" id="materialRegisterFormbirth" name="birth" class="form-control">
                                    <label class="active" for="materialRegisterFormbirth">Date Of Birth</label>
                                    <span class="text-danger">{{ $errors->first('birth') }}</span>
                                </div>
                            </div>
                    </div>
                      <div class="form-row">
                            <div class="col-md-12">
                                 <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="materialRegisterFormGender" name="gender" class="form-control">
                                    <label for="materialRegisterFormbirth">Gender</label>
                                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                                </div>
                            </div>
                                
                         </div>

                      <div class="form-row mt-2">
                        <div class="col-md-4">
                            <!-- First name -->
                            <div class="md-form">
                                 <i class="fa fa-user prefix"></i>
                                <input type="text" id="materialRegisterFormFirstNameRegisteredName" name="registerName" class="form-control">
                                <label for="materialRegisterFormRegisteredName">Registered Name</label>
                                <span class="text-danger">{{ $errors->first('registerName') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- Last name -->
                            <div class="md-form">
                                 <i class="fas fa-user prefix d-inline"></i>
                                <input type="text" id="materialRegisterFormAr" name="ar" class="form-control">
                                <label for="materialRegisterFormAr">A. R</label>
                                <span class="text-danger">{{ $errors->first('ar') }}</span>
                                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                        Authorized Representative
                                 </small>
                            </div>
                        </div>
                        <div class="col-md-4">
                                    <div class="md-form">
                                         <i class="fa fa-map-marker-alt prefix"></i>
                                         <input type="text" id="materialRegisterFormvin" name="vin" class="form-control">
                                        <label for="materialRegisterFormvin">Vin</label>
                                        <span class="text-danger">{{ $errors->first('vin') }}</span>
                                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                            Valid Means Of Identification
                                        </small>
                                </div>
                            </div>

                            <div class="form-row">
                                    <div class="col-md-4">
                                          <!-- Phone number -->
                                        <div class="md-form">
                                            <i class="fa fa-map-marker-alt prefix"></i>
                                            <input type="text" id="materialRegisterFormaddress" class="form-control" name="address" aria-describedby="materialRegisterFormPhoneHelpBlock">
                                            <label for="materialRegisterFormaddres">Address</label>
                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="md-form">
                                             <i class="fa fa-map-marker-alt prefix"></i>
                                            <input type="text" id="materialRegisterFormState" name="state" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                                            
                                            <label for="materialRegisterFormState">State</label>
                                            <span class="text-danger">{{ $errors->first('state') }}</span>
                                         </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="md-form">
                                             <i class="fa fa-flag prefix"></i>
                                            <input type="text" id="materialRegisterFormNigeria" name="country" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                                            
                                            <label for="materialRegisterFormNigeria">Country</label>
                                            <span class="text-danger">{{ $errors->first('country') }}</span>
                                         </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6">
                                            <button type="submit" class="btn btn-success">
                                                    Register
                                            </button>
                                         </div>
                                         
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/mdb.min.js"></script>
<script src="/js/fontawesome.min.js"></script>
</body>
</html>