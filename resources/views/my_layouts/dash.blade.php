<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users dashboard</title>
      <link rel="stylesheet" href="/css/app.css"> 
     <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom fonts for this template-->
   <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
     <!-- Page level plugin CSS-->
     <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> 
 
     <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css"> 
    
     <!-- Custom styles for this template-->
     <link href="/css/sb-admin.css" rel="stylesheet">

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    
</head>
<body id="page-top">
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="{{route('home_page')}}">Users Database</a>
          
              <div>
                  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                      <i class="fas fa-bars"></i>
                    </button>    
              </div>
              
                <!-- Navbar -->
                <ul class="navbar-nav ml-auto ml-md-0"  style="float:right">
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="#">Settings</a>
                      <a class="dropdown-item" href="#">Activity Log</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    </div>
                  </li>
                   
                </ul>
          
              </nav>
          
              <div id="wrapper">
          
                <!-- Sidebar -->
                <ul class="sidebar navbar-nav">
                  <li class="nav-item active">
                  <a class="nav-link" href="{{route('home_page')}}">
                      <i class="fas fa-fw fa-tachometer-alt"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('loan')}}">
                              <i class="fas fa-fw fa-table"></i>
                              <span>Ask for credit</span></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('clients')}}">
                                    <i class="fas fa-fw fa-table"></i>
                                    <span>update account</span></a>
                            </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Enterprise Details</span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                <h6 class="dropdown-header">Enterprise type:</h6>
                              <a class="dropdown-item" href="{{route('unincorporated')}}">Unincorporated</a>
                                <a class="dropdown-item" href="{{route('incorporated')}}">Incorporated</a>
                               
                               
                            </li>
                </ul>
          
                <div id="content-wrapper">
          
                  <div class="container-fluid">
          
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active">Overview</li>
                    </ol>
          
                    
                     
  
        
    @include('inc.messages')
    @yield('content')


    <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; agrolighttech.com 2018</span>
              </div>
            </div>
          </footer>
  
        </div>
      </div>

      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <script src="/js/sb-admin.min.js"></script>  
      <script>
         $(document).ready(function() {
        $('.mdb-select').material_select();
         });
     
      $('.datepicker').pickadate({
         selectMonths: true, // Creates a dropdown to control month
         selectYears: 40 // Creates a dropdown of 15 years to control year
       });
         
  </script>
    
    <!-- Core plugin JavaScript-->
   <script src="/vendor/jquery-easing/jquery.easing.min.js"></script> 

    <!-- Page level plugin JavaScript-->
     <script src="/vendor/chart.js/Chart.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.js"></script> 

    <!-- Custom scripts for all pages-->
   
    
 
</body>
</html>