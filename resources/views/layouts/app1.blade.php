<!DOCTYPE html>
<html>
<head>
	<title>ICRI INDIA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="icon" href="{{ URL::asset('Images/fevicon.png')}}" type="{{ URL::asset('image/gif')}}" sizes="16x16">

	<link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
	<script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
	<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
	<script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
	<script src="{{ URL::asset('./js/script.js')}}"></script>
	<link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

	<!-- font awsome cdn -->

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
	<script src="{{ URL::asset('https://kit.fontawesome.com/d97382eb84.js')}}" crossorigin="anonymous"></script>

	<!-- font awsome cdn -->

	<!-- owl carasol cdn -->

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
	<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
	<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}"></script>
	<!-- owl carasol cdn End -->

    <!-- inner page style starts -->

	<link rel="icon" href="{{ URL::asset('Images/fevicon.png')}}" type="image/gif" sizes="16x16">

	<link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
	<script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
	<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
	<script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/clinical_research.css')}}">
	<script src="{{ URL::asset('./js/script.js')}}"></script>
	<link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

	<!-- font awsome cdn -->

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
	<script src="{{ URL::asset('https://kit.fontawesome.com/d97382eb84.js')}}" crossorigin="anonymous"></script>

   <!-- inner page style ends here -->


</head>
<body>
@include('inc.messages')


<!-- header -->

<!-- header end -->
@include('menu.header')
<!-- left sticky stuffs -->

<div class="call_func"><img src="{{ URL::asset('Images/call_us_icon.png')}}" class="img-fluid">Free Counselling</div>
<div class="call_func wp_func"><i class="fa fa-whatsapp"></i>Call Us</div>





@yield('content')










@include('menu.footer')

</body>
</html>



