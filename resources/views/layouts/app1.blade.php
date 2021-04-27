<!DOCTYPE html>
<html>
<head>
	<title>ICRI INDIA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" href="Images/fevicon.png" type="image/gif" sizes="16x16">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="./js/script.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- font awsome cdn -->

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/d97382eb84.js" crossorigin="anonymous"></script>

	<!-- font awsome cdn -->

	<!-- owl carasol cdn -->

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

	<!-- owl carasol cdn End -->

	<link rel="stylesheet" type="text/css" href="css/clinical_research.css">


	<!-- font awsome cdn -->



	


	

</head>
<body>
@include('inc.messages')
<!-- header -->
<header>
	<div class="container-fluid">
		<nav>
			<a class="logo" href="http://localhost/icriindia/public/">
				<img src="Images/logo.png" class="img-fluid">
			</a>
			<div class="header_contact_detals">
				<ul class="contact_content d-flex">
			
		

				@if(count($campuses) > 0)	
					@foreach($campuses as $campus)
					<li>
						<div class="con_deta">
							<span>{{$campus->cities}}</span>
							{{$campus->telephone}}
						</div>
					</li>
					@endforeach
			@endif
		
				</ul>
			</div>
			<div class="hamburger_icon_and_cont">
				<nav role="navigation">
					<div id="menuToggle">
						<div class="menuToggle">
							<input type="checkbox" value="menu" />
							<span class="hambur_cont"></span>
						    <span class="hambur_cont"></span>
						    <span class="hambur_cont"></span>
						</div>
					    <div class="menu_text">Menu</div>
						<ul id="menu">
					      <a href="#"><li>Home</li></a>
					      <a href="#"><li>About</li></a>
					      <a href="#"><li>Info</li></a>
					      <a href="#"><li>Contact</li></a>
					      <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
					    </ul>
					</div>
				</div>
		    </div>
		</nav>
	</div>
</header>
<!-- header end -->

<!-- left sticky stuffs -->

<div class="call_func"><img src="Images/call_us_icon.png" class="img-fluid">Free Counselling</div>
<div class="call_func wp_func"><i class="fa fa-whatsapp"></i>Call Us</div>





@yield('content')



<section class="news_letter">
	<div class="container d-flex">
		<div class="legacy_title">Subscribe<span> our newsletter</span></div>


		{!! Form::open(['action' => 'IndexpageController@store', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}
		
			{{Form::email('email','',['class' =>'','placeholder' => 'Email'])}}
			
			{{form::submit('Subscribe Now',['class'=>'btn btn-danger'])}}

         {!! Form::close() !!}
		

	</div>



</section>





<footer>
	<div class="container">
		<div class="d-flex top_cont">
			<a class="footer_logo" href="https://technoids.in.net/icri-india/">
				<img src="Images/logo.png" class="fo_logo">
			</a>
			<div class="location d-flex">
				<i class="fas fa-map-marker-alt"></i>

	@if(count($addresses) > 0)	
		     @foreach($addresses as $address)
				<div class="address">{{$address->location}}</div>
				@endforeach
		@endif 

			</div>
		</div>
		
          
		<div class="footer_cata_option d-flex">


			<a class="catag" href="/icriindia/public/clinical-research/">Clinical Research</a>
			<a class="catag" href="/icriindia/public/aviation-management/">Aviation Management</a>
			<a class="catag" href="/icriindia/public/logistics-management/">Logistics Management</a>

		
			
		</div> 


		<div class="contact_foo_nav">
			<div class="cont_title">Useful Links</div>
			<div class="footer_contnav">
			@if(count($usefullinks) > 0)	
		     @foreach($usefullinks as $usefullink)
				<a href="#" class="foo_nav_cont">{{$usefullink->title}}</a>
				
				@endforeach
		@endif 
			</div>
		</div>
		<div class="top_courses contact_foo_nav">
			<div class="cont_title">Top Courses</div>

      
			<div class="footer_contnav">
	    @if(count($topcourses) > 0)	
		     @foreach($topcourses as $topcourse)
				<a href="#" class="foo_nav_cont">{{$topcourse->degree}}</a>
				@endforeach
		@endif 
			</div>
			

		</div>
		<div class="d-flex justify-content-between socialmedia_wrap">
			<div class="barcode">
				<img src="Images/Paytm_scanner.jpg" alt="barcode">
			</div>
			<div class="socialmedia">
				<div class="connect_title">Social Connect</div>
				<div class="social_media_icon">
		@if(count($socialconnectfacebooks) > 0)	
		     @foreach($socialconnectfacebooks as $socialconnectfacebook)
					<a href="{{$socialconnectfacebook->link}}"><img src="Images/facebook.png" alt="facebook"></a>
					@endforeach
		@endif


		@if(count($socialconnectinstagrams) > 0)	
		     @foreach($socialconnectinstagrams as $socialconnectinstagram)    
					<a href="{{$socialconnectinstagram->link}}"><img src="Images/instagram.png" alt="instagram"></a>

					@endforeach
		@endif

		@if(count($socialconnecttwitters) > 0)	
		     @foreach($socialconnecttwitters as $socialconnecttwitter)  
					<a href="{{$socialconnecttwitter->link}}"><img src="Images/twitter.png" alt="twitter"></a>
					@endforeach
		@endif 
					<a href="#"><img src="Images/linkedin.png" alt="linkedin"></a>
					<a href="#"><img src="Images/youtube.png" alt="youtube"></a>
					<a href="#"><img src="Images/whats_app.png" alt="whats_app"></a>
					<a href="#"><img src="Images/quora.png" alt="quora"></a>
				</div>
			</div>
			<div class="barcode">
				<img src="Images/Paytm_scanner.jpg" alt="barcode">
			</div>
		</div>
	</div>
	<div class="copyright">Copyright 2019 to 2025 Institute of Clinical Research India. Trademarks are the property of their respective owners. All rights reserved.</div>
</footer>

</body>
</html>