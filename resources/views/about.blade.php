<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.16/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<style>
*{
    text-align: justify;
}
.card-title, h3{
	color: #ff8a80;
	
}
.navbar{
	background-color: white !important;
}
body{
	font-size: 18px;
	font-family: sans-serif;
	color: #747373;
	font-size: .9rem;
	
	
}
footer ul li{
	margin-top: 15px;
	list-style: none;
}
navbar ul{
	margin-left: 50px !important;
}
navbar ul li a{
	font-size: 30px !important;
}
</style>
@include('inc.navbar')
<div class="container">

<div class="jumbotron mx-auto mt-5 text-justify">
		<p class="  ">ACTA is Africa’s prime agricultural enterprise organization coordinating to promote productivity, international trade, responsible business conduct
				and a global perspective to accelerating inclusive and sustainable growth to the benefit of all stakeholders.</p>
		<pclass="">The Value Network is keen on enhancing efficiency, and establishing transparency and fairness in the agricultural business environment.</p>
		<p class="">It is fundamentally working to promote and coordinate domestic and foreign investments and resources, consolidating on employment in the agriculture industry, 
				and stimulating and accelerating the growth of national economies within the African continent</p>
</div>
<div class="row mx-auto">
	<div class="col-md-4">
		<div class="card">
		<div class="card-body  text-justify">
		  <h6 class="card-title text-center">The Strategic Functions of Acta</h6>
		
		  <p class="card-text text-justify">The fundamental function of ACTA is to help identify and maximize synergies, while also reducing trade-offs, between the objectives of financial stability, economic growth, and returns on investment.</p>
		  <p class="card-text text-justify">	Realizing the full potential of its coordination efforts will be crucial for strengthening the ability of agricultural and agricultural-allied enterprises in participating in value chains.</p>
		</div>
	  
	  </div>
	</div>
	<div class="col-md-4">
			<div class="card">
			<div class="card-body">
			  <h6 class="card-title">The Strategic Objectives Within Perspective Are:</h6>
			<p class="card-text text-justify">
				To de-risk agricultural enterprise in Africa.
				To build long-term capacity of institutions and value chain entities such that they can innovate, take risks, expand into new markets and create job
			</p>
			<p class="card-text text-justify">To establish and institutionalize appropriate incentives (access to markets, production contracts, access to credit and technical resources) across functional areas.</p>
			</div>
		  
		  </div>
	</div>
	<div class="col-md-4">
			<div class="card">
			<div class="card-body">
			  <h6 class="card-title "> Agricultural Enterprise Growth And Intergration Support {AEGIS}</h6>
			  <p class="card-text text-justify">AEGIS is the driving agricultural enterprise support program under the working framework of ACTA 
					and it is established to lead inclusion into Africa’s agricultural productivity.</p>
					<p class="card-text text-justify">It is dedicated to building an extensive value network for agriculture across Africa while coordinating participating independent entities.
						<br><a href="#" data-toggle="modal" data-target="#exampleModal">Continue reading...</a>
					</p>
			</div>
		  
		  </div>
	</div>
</div>
<div class="card mt-5">
		<div class="card-body">
		  <h4 class="card-title lead">AGRICULTURAL FUNDS (INVESTMENTS) AND MUTUALS (AIM)</h4>
		  <p class="card-text text-justify">AIM is a Cooperative Agricultural Financing Organization devoted to agricultural financing while bolstering the development of sustainable agricultural systems, alleviating poverty and promoting financial inclusion. 
				and it is established to lead inclusion into Africa’s agricultural productivity.</p>
			<p class="card-text text-justify">The Cooperative Agricultural Financing Organization promotes specialization and enhances productivity and investments and the application of modern technologies. It also supports the increasing transformation and commercialization of agriculture that underlies the sector’s sustainability</p>
			<p class="card-text text-justify">AIM seeks to expand the financing space for agriculture by improving efficiency, ensuring repayments, and consolidating linkages among participants in the value network for Africa</p>
		</div>
	  
 </div>
<div class="row  mt-5">
		
		<div class="col-md-12">
				<div class="card">
				<div class="card-body">
				  <h4 class="card-title">Vision</h4>
				  <p class="card-text text-justify">To establish Africa’s largest sustainable value network.</p>
				  <h4 class="card-title">Mission</h4>
				  <p class="card-text text-justify">To enhance the socio-economic integration of Africa through agricultural enterprise performance</p>
				</div>
			  
			  </div>
		</div>
		
	</div>
	
</div>
<footer class="mt-5 container">
		<div class="row ">
			<div class="col-md-6">
			<div class="fh5co-contact-info">
					<h3>Contact Information</h3>
					<ul>
						<li class="address">Yakubu Gawon way,opposite Old Airport<br>West Africa, Jos Nigeria </li>
						<li class="phone"><a href="tel://1234567920">+ 08065612963</a></li>
						<li class="phone"><a href="tel://1234567920">+ 08032851135</a></li>
						<li class="email"><a href="mailto:info@yoursite.com">info@agrotransafrica.com</a></li>
						<li class="url"><a href="">agrotransafrica.org</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
					<h3>Get In Touch</h3>
					@include('inc.messages')
					
				<form id="reused_form" method="POST" action="{{route('home-message')}}">
				  {{ csrf_field() }}
						<div class="form-group">
							<input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" required>
							
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control" id="email" placeholder="Email Address*" required>
						   
						</div>
						<div class="form-group">
							<input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
						 
						</div>
						<div class="form-group">
							<textarea name="message" id="message" class="form-control" rows="3" placeholder="Write Message*" required></textarea>
							
						</div>
						<button id="btnContactUs" type="submit" class="btn btn-primary">SEND MESSAGE</button>
					</form>
			</div>
		</div>
</footer>

<!-- Central Modal Small -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">AEGIS</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<p>AEGIS performs three prime functions towards achieving sustainability in Africa’s agriculture industry</p>
			<p>Mobilization of Resources</p>
			<p>Optimization of Operations</p>
			<p>Maximization of Value</p>
      </div>
      
    </div>
  </div>
</div>

	
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>