@extends('dash.app')

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                   
                    <div class="content" style="padding:20px;">
                        <form method="post" action="{{ route('create_student') }}">
                            {{ csrf_field() }}
                                <div class="col-md-11">
                                <div class="header"><h4>Register Agent</h4></div>
                                    <div class="row">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        
                                            <input type="text" name="firstName" placeholder="First Name"  class="form-control">
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                    <div class="form-group">
                                            <input type="text" name="lastName" placeholder="Last Name" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                              
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone Number" class="form-control">
                                        </div>
                                    </div>
                                <div class="col-md-4">
                                        <div class="form-group">
                                        <input type="email" name="email" placeholder="Enter email" class="form-control">
                                    </div>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-fill btn-info">Submit</button>
                                </div>
                              
                            </div>
                        </form>
                    </div>
                </div> <!-- end card -->
            </div> <!--  end col-md-6  -->
        </div> <!-- end row -->
    </div>

@endsection