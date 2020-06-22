<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Registration</title>
      <link rel="stylesheet" href="/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">  -->
     <link rel="stylesheet" href="/style.css">
     <script src="/js/countries.js"></script>
   
            
</head>
<body>

   
    <div class="bg-color">
            
            @include('inc.messages')
            @yield('content')
            
    </div>
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
<!-- <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> -->

<script>
    $(document).ready(function() {
    $('.mdb-select').material_select();
     });
 
  
 
  $('.datepicker').pickadate({
     selectMonths: true, // Creates a dropdown to control month
     selectYears: 40 // Creates a dropdown of 15 years to control year
   });
     
</script>
<script langauge="javascript" >
populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	
</script>
</body>
</html>