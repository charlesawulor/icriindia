
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
    @if(count($pharmamktmgts) > 0)	
	@foreach($pharmamktmgts as $pharmamktmgt)
			<span>{{$pharmamktmgt->course_title}}</span>
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
		    <a class="nav-link active" id="tab_ci" data-toggle="tab" href="#tab_ci_tag" role="tab" aria-controls="tab_ci_tag" aria-selected="true">Pharma Marketing & Management<br>INDUSTRY<span></span></a>
		  </li>
		  <li class="nav-item col-lg-5 col-sm-5 col-5">
		    <a class="nav-link" id="tab_wdpcr" data-toggle="tab" href="#tab_wdpcr_tag" role="tab" aria-controls="tab_wdpcr_tag" aria-selected="false">WHY DEGREE PROGRAMS IN Pharma Marketing & Management<span></span></a>
		  </li>
		  <li class="nav-item col-lg-4 col-sm-4 col-4">
		    <a class="nav-link" id="tab_dtp" data-toggle="tab" href="#tab_dtp_tag" role="tab" aria-controls="tab_dtp_tag" aria-selected="false">DELIVERABLES OF THE PROGRAM<span></span></a>
		  </li>
		</ul>
	</div>

	<div class="tab-content offer_tab_cont" id="myTabContent">
		  <div class="tab-pane fade show active" id="tab_ci_tag" role="tabpanel" aria-labelledby="tab_ci_tag">
		  	<div class="container">
              @if(count($pharmamktmgts) > 0)	
	@foreach($pharmamktmgts as $pharmamktmgt)
				<div class="row">
					<div class="col-lg-6 col-sm-6">
						<div class="cr_sec_disc">
						{{$pharmamktmgt->about_course}}

						</div>
					</div>
			
					<div class="col-lg-6 col-sm-3 col-sm-6">
						<img src="/icriindia/storage/app/public/{{$pharmamktmgt->image}}" width="100%" class="cr_cli_re_cont">
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

                            @if(count($whypharmamktmgts) > 0)	
	@foreach($whypharmamktmgts as $whypharmamktmgt)
								<li><span>{{$whypharmamktmgt->why_pharma}}</span></li>
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
								
                            @if(count($deliverablespharmamktmgts) > 0)	
	@foreach($deliverablespharmamktmgts as $deliverablespharmamktmgt)
								<li><span>{{$deliverablespharmamktmgt->deliverables}}</span></li>
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
                @if(count($whyicripharmamktmgts) > 0)	
	@foreach($whyicripharmamktmgts as $whyicripharmamktmgt)
					<div class="cr_why_icri_text_cont position-relative">{{$whyicripharmamktmgt->why_icri_pharma}}</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">MSc <span>Pharma Marketing & Management</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>
                          @if(count($msceligibilitypharmamktmgts) > 0)	
@foreach($msceligibilitypharmamktmgts as $msceligibilitypharmamktmgt)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$msceligibilitypharmamktmgt->eligibility}}</div>
			  			@endforeach
                      @endif    
			  		</div>
			  		<div class="col_auto_set">
                      @if(count($msccurriculumhealthcarehospitalmanagements) > 0)	
@foreach($msccurriculumhealthcarehospitalmanagements as $msccurriculumhealthcarehospitalmanagement)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$msccurriculumhealthcarehospitalmanagement->curriculum}}</div>
			  			@endforeach
                      @endif   
			  		</div>
			  		<div class="col_auto_set">
                      @if(count($msccareerprospecthealthcarehospitalmanagements) > 0)	         @foreach($msccareerprospecthealthcarehospitalmanagements as      $msccareerprospecthealthcarehospitalmanagement)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$msccareerprospecthealthcarehospitalmanagement->career_prospect}}</div>

                          @endforeach
                      @endif  
			  		</div>
			  		<div class="col_auto_set campus_col">
                      @if(count($msccampushealthcarehospitalmanagements) > 0)	
	@foreach($msccampushealthcarehospitalmanagements as $msccampushealthcarehospitalmanagement)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$msccampushealthcarehospitalmanagement->image}}" class="campus_images"><span></span>{{$msccampushealthcarehospitalmanagement->campus_name}}</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">BSc <span>Healthcare & Hospital Management</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>


                      <div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>

                          @if(count($bsceligibilityhealthcarehospitalmanagements) > 0)	
	@foreach($bsceligibilityhealthcarehospitalmanagements as $bsceligibilityhealthcarehospitalmanagement)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$bsceligibilityhealthcarehospitalmanagement->eligibility}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">

                      @if(count($bsccurriculumhealthcarehospitalmanagements) > 0)	
	@foreach($bsccurriculumhealthcarehospitalmanagements as $bsccurriculumhealthcarehospitalmanagement)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$bsccurriculumhealthcarehospitalmanagement->curriculum}}</div>
			  			@endforeach
                      @endif   

			  		</div>
			  		<div class="col_auto_set">

                      @if(count($bsccareerprospecthealthcarehospitalmanagements) > 0)	
	@foreach($bsccareerprospecthealthcarehospitalmanagements as $bsccareerprospecthealthcarehospitalmanagement)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$bsccareerprospecthealthcarehospitalmanagement->career_prospect}}</div>

                          @endforeach
                      @endif  

			  		</div>
			  		<div class="col_auto_set campus_col">

                      @if(count($bsccampushealthcarehospitalmanagements) > 0)	
	@foreach($bsccampushealthcarehospitalmanagements as $bsccampushealthcarehospitalmanagement)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$bsccampushealthcarehospitalmanagement->image}}" class="campus_images"><span></span>{{$bsccampushealthcarehospitalmanagement->campus_name}}</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">PG Diploma <span>Healthcare & Hospital Management</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>

                          @if(count($pgdeligibilityhealthcarehospitalmanagements) > 0)	
	@foreach($pgdeligibilityhealthcarehospitalmanagements as $pgdeligibilityhealthcarehospitalmanagement)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$pgdeligibilityhealthcarehospitalmanagement->eligibility}}</div>
			  			@endforeach
                      @endif 


			  		</div>
			  		<div class="col_auto_set">

                      @if(count($pgdcurriculumhealthcarehospitalmanagements) > 0)	
	@foreach($pgdcurriculumhealthcarehospitalmanagements as $pgdcurriculumhealthcarehospitalmanagement)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$pgdcurriculumhealthcarehospitalmanagement->curriculum}}</div>
			  			@endforeach
                      @endif  


			  		</div>
			  		<div class="col_auto_set">


                      @if(count($pgdcareerprospecthealthcarehospitalmanagements) > 0)	
	@foreach($pgdcareerprospecthealthcarehospitalmanagements as $pgdcareerprospecthealthcarehospitalmanagement)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$pgdcareerprospecthealthcarehospitalmanagement->career_prospect}}</div>

                          @endforeach
                      @endif  


			  		</div>
			  		<div class="col_auto_set campus_col">


			  		      @if(count($pgdcampushealthcarehospitalmanagements) > 0)	
	@foreach($pgdcampushealthcarehospitalmanagements as $pgdcampushealthcarehospitalmanagement)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$pgdcampushealthcarehospitalmanagement->image}}" class="campus_images"><span></span>{{$pgdcampushealthcarehospitalmanagement->campus_name}}</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">Phd programs <span>Healthcare & Hospital Management</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>

                          @if(count($phdeligibilityhealthcarehospitalmanagements) > 0)	
	@foreach($phdeligibilityhealthcarehospitalmanagements as $phdeligibilityhealthcarehospitalmanagement)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$phdeligibilityhealthcarehospitalmanagement->eligibility}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">

                      @if(count($phdcurriculumhealthcarehospitalmanagements) > 0)	
	@foreach($phdcurriculumhealthcarehospitalmanagements as $phdcurriculumhealthcarehospitalmanagement)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$phdcurriculumhealthcarehospitalmanagement->curriculum}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">
					  @if(count($phdcareerprospecthealthcarehospitalmanagements) > 0)	
	@foreach($phdcareerprospecthealthcarehospitalmanagements as $phdcareerprospecthealthcarehospitalmanagement)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$phdcareerprospecthealthcarehospitalmanagement->career_prospect}}</div>

                          @endforeach
                      @endif  

			  		</div>
			  		<div class="col_auto_set campus_col">
					  @if(count($phdcampushealthcarehospitalmanagements) > 0)	
	@foreach($phdcampushealthcarehospitalmanagements as $phdcampushealthcarehospitalmanagement)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$phdcampushealthcarehospitalmanagement->image}}" class="campus_images"><span></span>{{$phdcampushealthcarehospitalmanagement->campus_name}}</div>
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

	@if(count($placementhealthcarehospitalmanagements) > 0)	
	    @foreach($placementhealthcarehospitalmanagements as $placementhealthcarehospitalmanagement)

			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="/icriindia/storage/app/public/{{$placementhealthcarehospitalmanagement->image}}">
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
