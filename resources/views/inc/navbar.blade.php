<nav class="navbar navbar-expand-md bg-light navbar-light">
    <!-- Brand -->
<a class="navbar-brand" href="{{route('home_page')}}">
        <img src="images/logo.png" alt="Logo" style="width:40px;">
   </a>
  
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar links -->
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto  ml-5">
        <li class="nav-item">
        <a class="nav-link" href="{{route('home_page')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{route('register')}}" >Sign Up</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Sign In</a>
         </li>
      </ul>
    </div> 
  </nav>