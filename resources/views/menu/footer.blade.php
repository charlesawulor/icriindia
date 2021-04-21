<footer>
<div class="container">
		<div class="d-flex top_cont">
			<a class="footer_logo" href="{{ URL::asset('https://technoids.in.net/icri-india/')}}">
				<img src="{{ URL::asset('Images/logo.png')}}" class="fo_logo">
			</a>
			<div class="location d-flex">
				<i class="fas fa-map-marker-alt"></i>

				@if(count($addresses) > 0)	
		     @foreach($addresses as $address)
				<div class="address">{{$address['location']}}</div>
				@endforeach
		@endif 

			

			</div>
		</div>
		

		<div class="footer_cata_option d-flex">
	@if(count($courses) > 0)
		@foreach($courses as $course)
			<a class="catag" href="/icriindia/public/course/{{$course->id}}">{{$course->course_title}}</a>

			@endforeach

			@endif
			
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
				<img src="{{ URL::asset('Images/Paytm_scanner.jpg')}}" alt="barcode">
			</div>
			<div class="socialmedia">
				<div class="connect_title">Social Connect</div>
				<div class="social_media_icon">
		@if(count($socialconnectfacebooks) > 0)	
		     @foreach($socialconnectfacebooks as $socialconnectfacebook)
					<a href="{{$socialconnectfacebook->link}}"><img src="{{ URL::asset('Images/facebook.png')}}" alt="facebook"></a>
					@endforeach
		@endif


		@if(count($socialconnectinstagrams) > 0)	
		     @foreach($socialconnectinstagrams as $socialconnectinstagram)    
					<a href="{{$socialconnectinstagram->link}}"><img src="{{ URL::asset('Images/instagram.png')}}" alt="instagram"></a>

					@endforeach
		@endif

		@if(count($socialconnecttwitters) > 0)	
		     @foreach($socialconnecttwitters as $socialconnecttwitter)  
					<a href="{{$socialconnecttwitter->link}}"><img src="{{ URL::asset('Images/twitter.png')}}" alt="twitter"></a>
					@endforeach
		@endif 
					<a href="#"><img src="{{ URL::asset('Images/linkedin.png')}}" alt="linkedin"></a>
					<a href="#"><img src="{{ URL::asset('Images/youtube.png')}}" alt="youtube"></a>
					<a href="#"><img src="{{ URL::asset('Images/whats_app.png')}}" alt="whats_app"></a>
					<a href="#"><img src="{{ URL::asset('Images/quora.png')}}" alt="quora"></a>
				</div>
			</div>
			<div class="barcode">
				<img src="{{ URL::asset('Images/Paytm_scanner.jpg')}}" alt="barcode">
			</div>
		</div>
	</div>
	<div class="copyright">Copyright 2019 to 2025 Institute of Clinical Research India. Trademarks are the property of their respective owners. All rights reserved.</div>
</footer>
