
<!-- header end -->

<!-- left sticky stuffs -->
@extends('layouts.app1')

@section('content')
<div class="call_func"><img src="Images/call_us_icon.png" class="img-fluid">Free Counselling</div>
<div class="call_func wp_func"><i class="fa fa-whatsapp"></i>Call Us</div>

<!-- left sticky stuffs end -->

<main class="cr_main">
<div class="container">
		<div class="slider_title">
    @if(count($architectures) > 0)	
	@foreach($architectures as $architecture)
			<span>{{$architecture->course_title}}</span>
            @endforeach
            @endif
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
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
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



<section class="cr_clinical_reseach_cont">

	<div class="container d-flex">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item col-lg-3 col-sm-3 col-3">
		    <a class="nav-link active" id="tab_ci" data-toggle="tab" href="#tab_ci_tag" role="tab" aria-controls="tab_ci_tag" aria-selected="true">Architecture
            <br>INDUSTRY<span></span></a>
		  </li>
		  <li class="nav-item col-lg-5 col-sm-5 col-5">
		    <a class="nav-link" id="tab_wdpcr" data-toggle="tab" href="#tab_wdpcr_tag" role="tab" aria-controls="tab_wdpcr_tag" aria-selected="false">WHY DEGREE PROGRAMS IN Architecture

            <span></span></a>
		  </li>
		  <li class="nav-item col-lg-4 col-sm-4 col-4">
		    <a class="nav-link" id="tab_dtp" data-toggle="tab" href="#tab_dtp_tag" role="tab" aria-controls="tab_dtp_tag" aria-selected="false">DELIVERABLES OF THE PROGRAM<span></span></a>
		  </li>
		</ul>
	</div>

	<div class="tab-content offer_tab_cont" id="myTabContent">
		  <div class="tab-pane fade show active" id="tab_ci_tag" role="tabpanel" aria-labelledby="tab_ci_tag">
		  	<div class="container">
              @if(count($architectures) > 0)	
	@foreach($architectures as $architecture)
				<div class="row">
					<div class="col-lg-6 col-sm-6">
						<div class="cr_sec_disc">
						{{$architecture->about_course}}

						</div>
					</div>
			
					<div class="col-lg-6 col-sm-3 col-sm-6">
						<img src="/icriindia/storage/app/public/{{$architecture->image}}" width="100%" class="cr_cli_re_cont">
					</div>
				</div>
              @endforeach
     @endif
		  	</div>

		  </div>
		  <div class="tab-pane fade" id="tab_wdpcr_tag" role="tabpanel" aria-labelledby="tab_two">
		  	<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<div class="cr_sec_disc">
							<ul>

                            @if(count($whyarchitectures) > 0)	
	@foreach($whyarchitectures as $whyarchitecture)
								<li><span>{{$whyarchitecture->why_architecture}}</span></li>
                                    @endforeach
                                    @endif
							
							</ul>

						</div>
					</div>
			
					
				</div>
		  	</div>
		  </div>
		  <div class="tab-pane fade" id="tab_dtp_tag" role="tabpanel" aria-labelledby="tab_three">
		  	<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<div class="cr_sec_disc">
							<ul>
								
                            @if(count($deliverablesarchitectures) > 0)	
	@foreach($deliverablesarchitectures as $deliverablesarchitecture)
								<li><span>{{$deliverablesarchitecture->deliverables}}</span></li>
                                    @endforeach
                                    @endif
							
							</ul>

						</div>
					</div>
			
					
				</div>
		  	</div>
		  </div>
		</div>

	<!-- <div class="row">
		<div class="col-lg-6">
			<img src="Images/clinical_reseach_content.jpg" class="cr_cli_re_cont"></img>
		</div>
		<div class="col-lg-6">
			<div class="cr_cli_re_cont_wrap">
				<div class="cr_sec_title">
					Clinical Research 
				</div>
				<div class="cr_sec_disc">
					Industry in India has seen unpredictable growth in the last 10 years. The global clinical trials market size is expected to reach USD 68.9 billion by 2026. The growing prevalence of disease and new disease cases is expected to give a further boost to the clinical trial market.
				</div>
			</div>
		</div>
	</div> -->
</section>


<section class="cr_why_icri">
	<div class="container d-flex">
		<div class="row">
			<div class="col-lg-6">
				<div class="position-relative">
					<div class="cr_icri_hgtxt">ICRi</div>
					<div class="cr_icri_why">why</div>
				</div>
				<img src="Images/why_icri_man.png" class="cr_cli_re_cont_man position-realtive"></img>
			</div>
			<div class="col-lg-6">
				<div class="cr_why_icri_conten_wrap">
                @if(count($whyicriarchitectures) > 0)	
	@foreach($whyicriarchitectures as $whyicriarchitecture)
					<div class="cr_why_icri_text_cont position-relative">{{$whyicriarchitecture->	why_icri_architecture}}</div>
                @endforeach
            @endif
				</div>
			</div>
		</div>
	</div>
</section>

<section class="offering">
	<div class="cr_part_title offering_title">
		<strong>Offering</strong>
		Offering
	</div>

	<div class="d-flex">
		<div class="selec_prog">Select Your <span>Programe</span></div>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item offer_cont_title">
		    <a class="nav-link active" id="tab_one" data-toggle="tab" href="#tab_one_tag" role="tab" aria-controls="tab_one_tag" aria-selected="true">MSc<span></span></a>
		  </li>
		  <li class="nav-item offer_cont_title">
		    <a class="nav-link" id="tab_two" data-toggle="tab" href="#tab_two_tag" role="tab" aria-controls="tab_two_tag" aria-selected="false">BSc<span></span></a>
		  </li>
		  <li class="nav-item offer_cont_title">
		    <a class="nav-link" id="tab_three" data-toggle="tab" href="#tab_three_tag" role="tab" aria-controls="tab_three_tag" aria-selected="false">PG Diploma<span></span></a>
		  </li>
		  <li class="nav-item offer_cont_title">
		    <a class="nav-link" id="tab_four" data-toggle="tab" href="#tab_four_tag" role="tab" aria-controls="tab_four_tag" aria-selected="false">Phd programs<span></span></a>
		  </li>
		</ul>
	</div>

	<div class="tab-content offer_tab_cont" id="myTabContent">
		<div class="tab-pane fade show active" id="tab_one_tag" role="tabpanel" aria-labelledby="tab_one">

		  	<div class="row offer_tab_head_title">
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_one">Course</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_two">Eligibility</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_three">Curriculum</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_four">Career Prospects</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_five">Select Campus</div>
		  		</div>
		  	</div>

		  	<div class="ctm-tab-cont">
			  	<div class="row offer_tab_cont_row">
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">MSc <span>Architecture

                          </span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>
                          @if(count($msceligibilityarchitectures) > 0)	
@foreach($msceligibilityarchitectures as $msceligibilityarchitecture)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$msceligibilityarchitecture->eligibility}}</div>
			  			@endforeach
                      @endif    
			  		</div>
			  		<div class="col_auto_set">
             @if(count($msccurriculumarchitectures) > 0)	
                   @foreach($msccurriculumarchitectures as $msccurriculumarchitecture)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$msccurriculumarchitecture->curriculum}}</div>
			  	  @endforeach
             @endif   
			  		</div>
			  		<div class="col_auto_set">
           @if(count($msccareerprospectarchitectures) > 0)	         
                @foreach($msccareerprospectarchitectures as  $msccareerprospectarchitecture)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$msccareerprospectarchitecture->career_prospect}}</div>

                @endforeach
           @endif  
			  		</div>
			  		<div class="col_auto_set campus_col">
             @if(count($msccampusarchitectures) > 0)	
	              @foreach($msccampusarchitectures as $msccampusarchitecture)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$msccampusarchitecture->image}}" class="campus_images"><span></span>{{$msccampusarchitecture->campus_name}}</div>
                   @endforeach
             @endif  

			  		</div>
			  	</div>
		  	</div>

		  </div>
		  <div class="tab-pane fade" id="tab_two_tag" role="tabpanel" aria-labelledby="tab_two">
          


          
		  	<div class="row offer_tab_head_title">
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_one">Course</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_two">Eligibility</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_three">Curriculum</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_four">Career Prospects</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_five">Select Campus</div>
		  		</div>
		  	</div>

		  	<div class="ctm-tab-cont">
			  	<div class="row offer_tab_cont_row">
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">BSc <span>Architecture

                          </span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>


                      <div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>

                          @if(count($bsceligibilityarchitectures) > 0)	
	@foreach($bsceligibilityarchitectures as $bsceligibilityarchitecture)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$bsceligibilityarchitecture->eligibility}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">

                      @if(count($bsccurriculumarchitectures) > 0)	
	@foreach($bsccurriculumarchitectures as $bsccurriculumarchitecture)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$bsccurriculumarchitecture->curriculum}}</div>
			  			@endforeach
                      @endif   

			  		</div>
			  		<div class="col_auto_set">

                      @if(count($bsccareerprospectarchitectures) > 0)	
	@foreach($bsccareerprospectarchitectures as $bsccareerprospectarchitecture)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$bsccareerprospectarchitecture->career_prospect}}</div>

                          @endforeach
                      @endif  

			  		</div>
			  		<div class="col_auto_set campus_col">

                      @if(count($bsccampusarchitectures) > 0)	
	@foreach($bsccampusarchitectures as $bsccampusarchitecture)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$bsccampusarchitecture->image}}" class="campus_images"><span></span>{{$bsccampusarchitecture->campus_name}}</div>
                          @endforeach
                      @endif  

			  		</div>
			  	</div>
		  	</div>          
          </div>





		  <div class="tab-pane fade" id="tab_three_tag" role="tabpanel" aria-labelledby="tab_three">
          
          
		  	<div class="row offer_tab_head_title">
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_one">Course</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_two">Eligibility</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_three">Curriculum</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_four">Career Prospects</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_five">Select Campus</div>
		  		</div>
		  	</div>

              <div class="ctm-tab-cont">
			  	<div class="row offer_tab_cont_row">
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">PG Diploma <span> Architecture

                          </span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>

                          @if(count($pgdeligibilityarchitectures) > 0)	
	@foreach($pgdeligibilityarchitectures as $pgdeligibilityarchitecture)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$pgdeligibilityarchitecture->eligibility}}</div>
			  			@endforeach
                      @endif 


			  		</div>
			  		<div class="col_auto_set">

                      @if(count($pgdcurriculumarchitectures) > 0)	
	@foreach($pgdcurriculumarchitectures as $pgdcurriculumarchitecture)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$pgdcurriculumarchitecture->curriculum}}</div>
			  			@endforeach
                      @endif  


			  		</div>
			  		<div class="col_auto_set">


                      @if(count($pgdcareerprospectarchitectures) > 0)	
	@foreach($pgdcareerprospectarchitectures as $pgdcareerprospectarchitecture)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$pgdcareerprospectarchitecture->career_prospect}}</div>

                          @endforeach
                      @endif  


			  		</div>
			  		<div class="col_auto_set campus_col">


			  		      @if(count($pgdcampusarchitectures) > 0)	
	@foreach($pgdcampusarchitectures as $pgdcampusarchitecture)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$pgdcampusarchitecture->image}}" class="campus_images"><span></span>{{$pgdcampusarchitecture->campus_name}}</div>
                          @endforeach
                      @endif 


			  		</div>
			  	</div>
		  	</div>

          
          
          </div>
		  <div class="tab-pane fade" id="tab_four_tag" role="tabpanel" aria-labelledby="tab_four">
          
          
		  	<div class="row offer_tab_head_title">
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_one">Course</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_two">Eligibility</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_three">Curriculum</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_four">Career Prospects</div>
		  		</div>
		  		<div class="col_auto_set">
		  			<div class="offer_tab_cont_title offer_tab_cont_title_five">Select Campus</div>
		  		</div>
		  	</div>




		  	<div class="ctm-tab-cont">
			  	<div class="row offer_tab_cont_row">
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">Phd programs <span>Architecture

                          </span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>

                          @if(count($phdeligibilityarchitectures) > 0)	
	@foreach($phdeligibilityarchitectures as $phdeligibilityarchitecture)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$phdeligibilityarchitecture->eligibility}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">

                      @if(count($phdcurriculumarchitectures) > 0)	
	@foreach($phdcurriculumarchitectures as $phdcurriculumarchitecture)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$phdcurriculumarchitecture->curriculum}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">
					  @if(count($phdcareerprospectarchitectures) > 0)	
	@foreach($phdcareerprospectarchitectures as $phdcareerprospectarchitecture)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$phdcareerprospectarchitecture->career_prospect}}</div>

                          @endforeach
                      @endif  

			  		</div>
			  		<div class="col_auto_set campus_col">
					  @if(count($phdcampusarchitectures) > 0)	
	@foreach($phdcampusarchitectures as $phdcampusarchitecture)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$phdcampusarchitecture->image}}" class="campus_images"><span></span>{{$phdcampusarchitecture->campus_name}}</div>
                          @endforeach
                      @endif 

			  		</div>
			  	</div>
		  	</div>





          <div>
    </div>
</section>

<secion class="cr_quote">
	<div class="quote_wrap">
		<div class="container">
			<div class="cr_quote_wrap">
				<span>Empower</span> People to <span>Improve</span> Their Lives.
			</div>
		</div>
	</div>
</secion>

<section class="cr_placement_partners">
	<div class="container">
		<div class="cr_part_title">
			<strong>Placements</strong>
			Placements are provided with
		</div>
		<div class="cr_part_detials row">

	@if(count($placementarchitectures) > 0)	
	    @foreach($placementarchitectures as $placementarchitecture)

			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="/icriindia/storage/app/public/{{$placementarchitecture->image}}">
						</div>
					</div>
				</div>
			</div>
	    @endforeach
	@endif

	

		</div>
	</div>
</section>


@endsection
