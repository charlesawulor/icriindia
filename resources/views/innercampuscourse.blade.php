
<!-- header end -->

<!-- left sticky stuffs -->
@extends('layouts.app1')

@section('content')
<div class="call_func"><img src="Images/call_us_icon.png" class="img-fluid">Free Counselling</div>
<div class="call_func wp_func"><i class="fa fa-whatsapp"></i>Call Us</div>

<!-- left sticky stuffs end -->

<main class="dc_page">
	<div class="container">
		<div class="row">

			<div class="dc_slider_left_content col-lg-8">
				<div class="dc_slider_title">
					<span>{{$innercampuscourses->campus_name}} </span> Campus
				</div>
				<div class="dc_add_cont">
    				<div class="dc_add_op_parent d-flex justify-content-between">	
    					<div class="dc_add_open">
    						<strong>Admissins Open</strong><br>2020 Session
    					</div>
    					<div class="dc_add_open">
    						<strong>Career in {{$innercampuscourses->course_name}} </strong>
    					</div>
    				</div>
					<div class="dc_add_cont_wrap d-flex">
					    <div class="dc_add_cont_trails">
    					    <div class="dc_add_cont_tra_wrap">
    					        <strong>155000+</strong>
    					        <p>Clinical trials conducted till date</p>
    					    </div>
					    </div>
					    <div class="dc_add_cont_vacins">
					        <strong>200,000</strong>
					        <p>Worldwide Vacancies<br>
					        in {{$innercampuscourses->course_name}}</p>
					    </div>
					    <div class="dc_add_cont_avg_salary">
					        <strong>6 L</strong>
					        <p>Stating Avg Salary<br>Package P.A</p>
					    </div>
					    <div class="dc_add_cont_trails part_sec">
    					    <div class="dc_add_cont_tra_wrap">
    					        <strong>1</strong>
    					        <p>Clinical</p>
    					    </div>
					    </div>
					</div>
					    
				</div>
			</div>

			<div class="dc_slider_right_content col-lg-4">
				<div class="form_title">Admissions 2021</div>
		
			</div>

		</div>
	</div>

	<!-- popup form -->
	<div class="fixed_btn_quick_inquery">
		<div type="button" class="btn btn-primary popup_form" data-toggle="modal" data-target="#myModal">Quick Query</div>
	</div>

	<!-- The Modal -->
	<div class="modal" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Modal Heading</h4>
	        <button type="button" class="close" data-dismiss="modal">×</button>
	      </div>

	      <!-- Modal body -->
	      <div class="modal-body">
	        Modal body..
	      </div>

	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      </div>

	    </div>
	  </div>
	</div>

	<!-- popup form end -->
</main>

<section class="pvcdm">
	<div class="container">
		<div class="pvcdm_conten">
			<div class="pvcdm_title">{{$innercampuscourses->degree_title}} {{$innercampuscourses->course_name}}<strong>{{$innercampuscourses->degree_title}} {{$innercampuscourses->course_name}}</strong></div>
			
			<div class="row pg_diploma">
				<div class="col-lg-6">
					<div class="top_colmn_cont">
						<div class="top_colmn_cont_title">What is Offered?</div>
						
						<div class="top_colmn_cont_disc">
							<p> {{$innercampuscourses->what_offer}}</p>
						</div>
					</div>
					<div class="btm_colmn_img">
						<img src="/icriindia/storage/app/public/{{$innercampuscourses->first_image}}">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="btm_col_cont top_colmn_cont">
						<img src="/icriindia/storage/app/public/{{$innercampuscourses->second_image}}">
					</div>
					<div class="btm_col_cont btm_colmn_img">
						<div class="btm_colmn_title top_colmn_cont_title">Benefits</div>
						<div class="btm_colmn_title_disc top_colmn_cont_disc">
							<p>{{$innercampuscourses->benefit}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="faculties">
	<div class="container">
		<div class="facilities_parent">

			<div class="faculty_title">Faculty<strong>Faculty</strong></div>
			<div class="fac_bg_title">Faculty<strong>Faculty</strong></div>
			<!-- faculties_slider_cont -->

				<div class="slideshow-container">
					<div class="mySlides fade-in" style="display: block;">
					  <div class="faculties_client_review">
					  	<div class="faculties_client_name">{{$innercampuscourses->faculty_name}}</div>
					  	<div class="faculties_client_disc">{{$innercampuscourses->faculty_details}}</div>
					  </div>
					</div>



					<div class="mySlides fade-in">
					  <div class="faculties_client_review">
					  <div class="faculties_client_name">{{$innercampuscourses->faculty_name2}}</div>
					  	<div class="faculties_client_disc">{{$innercampuscourses->faculty_details2}}</div>
					  </div>
					</div>
					<div class="mySlides fade-in">
					  <div class="faculties_client_review">
                      <div class="faculties_client_name">{{$innercampuscourses->faculty_name3}}</div>
					  	<div class="faculties_client_disc">{{$innercampuscourses->faculty_details3}}</div>
					  </div>
					</div>
					<div class="mySlides fade-in">
					  <div class="faculties_client_review">
                      <div class="faculties_client_name">{{$innercampuscourses->faculty_name4}}</div>
					  	<div class="faculties_client_disc">{{$innercampuscourses->faculty_details4}}</div>
					  </div>
					</div>
				</div>
				<br>
				<div class="dot_wrap">
				  <span class="dot active" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span> 
				  <span class="dot" onclick="currentSlide(4)"></span> 
				</div>
			<!-- faculties_slider_cont -->

		</div>
	</div>
</section>

<section class="medanta_hospital">
    <div class="container">
        <div class="own_container">
            <div class="comm_title_text faculty_title">
            Why<br>{{$innercampuscourses->icri_location}}
                <strong>Why<br>{{$innercampuscourses->icri_location}}</strong>

            </div>
            <div class="hosp_points">
                <p>{{$innercampuscourses->why_icri_campus}}</p>
            </div>
        </div>
    </div>
</section>

<section class="hiring_partners">
    <div class="container">
        <div class="own_container">
            <div class="comm_title_text faculty_title">
                ICRI Hiring<br>Partners
                <strong>ICRI Hiring<br>Partners</strong>
            </div>
            <div class="hiring_partners_images row">
                
                <div class="hiring_part_elem col-lg-4">
                    <img>
                </div>                
                <div class="hiring_part_elem col-lg-4">
                    <img>
                </div>
                <div class="hiring_part_elem col-lg-4">
                    <img src="/icriindia/storage/app/public/{{$innercampuscourses->hiring_partner}}">
                </div>
                <div class="hiring_part_elem col-lg-4">
                    <img src="/icriindia/storage/app/public/{{$innercampuscourses->hiring_partner2}}">
                </div>
                <div class="hiring_part_elem col-lg-4">
                    <img src="/icriindia/storage/app/public/{{$innercampuscourses->hiring_partner3}}">
                </div>
                <div class="hiring_part_elem col-lg-4">
                    <img src="/icriindia/storage/app/public/{{$innercampuscourses->hiring_partner4}}">
                </div>
                <div class="hiring_part_elem col-lg-4">
                    <img src="/icriindia/storage/app/public/{{$innercampuscourses->hiring_partner5}}">
                </div>
                <div class="hiring_part_elem col-lg-4">
                    <img src="/icriindia/storage/app/public/{{$innercampuscourses->hiring_partner6}}">
                </div>
                <div class="hiring_part_elem col-lg-4">
                    <img src="/icriindia/storage/app/public/{{$innercampuscourses->hiring_partner7}}">
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="about_icri">
    <div class="container">
        <div class="own_container">
            <div class="comm_title_text faculty_title">
                About ICRI
                <strong>About ICRI</strong>
            </div>
            <div class="hosp_points">
                <p>{{$innercampuscourses->about_icri}}</p>
            </div>
        </div>
    </div>
</section>

@endsection