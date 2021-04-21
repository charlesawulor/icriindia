<header>
	<div class="container-fluid">
		<nav>
			<a class="logo" href="https://technoids.in.net/icri-india/">
				<img src="{{ URL::asset('Images/logo.png')}}" class="img-fluid">
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