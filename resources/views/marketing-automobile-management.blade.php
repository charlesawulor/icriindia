
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
    @if(count($mktautomgts) > 0)	
	@foreach($mktautomgts as $mktautomgt)
			<span>{{$mktautomgt->course_title}}</span>
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
		    <a class="nav-link active" id="tab_ci" data-toggle="tab" href="#tab_ci_tag" role="tab" aria-controls="tab_ci_tag" aria-selected="true">Marketing & Automobile Management<br>INDUSTRY<span></span></a>
		  </li>
		  <li class="nav-item col-lg-5 col-sm-5 col-5">
		    <a class="nav-link" id="tab_wdpcr" data-toggle="tab" href="#tab_wdpcr_tag" role="tab" aria-controls="tab_wdpcr_tag" aria-selected="false">WHY DEGREE PROGRAMS IN Marketing & Automobile Management<span></span></a>
		  </li>
		  <li class="nav-item col-lg-4 col-sm-4 col-4">
		    <a class="nav-link" id="tab_dtp" data-toggle="tab" href="#tab_dtp_tag" role="tab" aria-controls="tab_dtp_tag" aria-selected="false">DELIVERABLES OF THE PROGRAM<span></span></a>
		  </li>
		</ul>
	</div>

	<div class="tab-content offer_tab_cont" id="myTabContent">
		  <div class="tab-pane fade show active" id="tab_ci_tag" role="tabpanel" aria-labelledby="tab_ci_tag">
		  	<div class="container">
              @if(count($mktautomgts) > 0)	
	@foreach($mktautomgts as $mktautomgt)
				<div class="row">
					<div class="col-lg-6 col-sm-6">
						<div class="cr_sec_disc">
						{{$mktautomgt->about_course}}

						</div>
					</div>
			
					<div class="col-lg-6 col-sm-3 col-sm-6">
						<img src="/icriindia/storage/app/public/{{$mktautomgt->image}}" width="100%" class="cr_cli_re_cont">
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

                            @if(count($whymktautomgts) > 0)	
	@foreach($whymktautomgts as $whymktautomgt)
								<li><span>{{$whymktautomgt->why_auto}}</span></li>
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
								
                            @if(count($deliverablesmktautomgts) > 0)	
	@foreach($deliverablesmktautomgts as $deliverablesmktautomgt)
								<li><span>{{$deliverablesmktautomgt->deliverables}}</span></li>
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
                @if(count($whyicrimktautomgts) > 0)	
	@foreach($whyicrimktautomgts as $whyicrimktautomgt)
					<div class="cr_why_icri_text_cont position-relative">{{$whyicrimktautomgt->why_icri_auto}}</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">MSc <span>Marketing & Automobile Management</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>
                          @if(count($msceligibilitymktautomgts) > 0)	
@foreach($msceligibilitymktautomgts as $msceligibilitymktautomgt)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$msceligibilitymktautomgt->eligibility}}</div>
			  			@endforeach
                      @endif    
			  		</div>
			  		<div class="col_auto_set">
             @if(count($msccurriculummktautomgts) > 0)	
                   @foreach($msccurriculummktautomgts as $msccurriculummktautomgt)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$msccurriculummktautomgt->curriculum}}</div>
			  	  @endforeach
             @endif   
			  		</div>
			  		<div class="col_auto_set">
           @if(count($msccareerprospectmktautomgts) > 0)	         
                @foreach($msccareerprospectmktautomgts as      $msccareerprospectmktautomgt)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$msccareerprospectmktautomgt->career_prospect}}</div>

                @endforeach
           @endif  
			  		</div>
			  		<div class="col_auto_set campus_col">
             @if(count($msccampusmktautomgts) > 0)	
	              @foreach($msccampusmktautomgts as $msccampusmktautomgt)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$msccampusmktautomgt->image}}" class="campus_images"><span></span>{{$msccampusmktautomgt->campus_name}}</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">BSc <span>Marketing & Automobile Management</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>


                      <div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>

                          @if(count($bsceligibilitymktautomgts) > 0)	
	@foreach($bsceligibilitymktautomgts as $bsceligibilitymktautomgt)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$bsceligibilitymktautomgt->eligibility}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">

                      @if(count($bsccurriculummktautomgts) > 0)	
	@foreach($bsccurriculummktautomgts as $bsccurriculummktautomgt)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$bsccurriculummktautomgt->curriculum}}</div>
			  			@endforeach
                      @endif   

			  		</div>
			  		<div class="col_auto_set">

                      @if(count($bsccareerprospectmktautomgts) > 0)	
	@foreach($bsccareerprospectmktautomgts as $bsccareerprospectmktautomgt)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$bsccareerprospectmktautomgt->career_prospect}}</div>

                          @endforeach
                      @endif  

			  		</div>
			  		<div class="col_auto_set campus_col">

                      @if(count($bsccampusmktautomgts) > 0)	
	@foreach($bsccampusmktautomgts as $bsccampusmktautomgt)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$bsccampusmktautomgt->image}}" class="campus_images"><span></span>{{$bsccampusmktautomgt->campus_name}}</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">PG Diploma <span> Marketing & Automobile Management</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>

                          @if(count($pgdeligibilitymktautomgts) > 0)	
	@foreach($pgdeligibilitymktautomgts as $pgdeligibilitymktautomgt)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$pgdeligibilitymktautomgt->eligibility}}</div>
			  			@endforeach
                      @endif 


			  		</div>
			  		<div class="col_auto_set">

                      @if(count($pgdcurriculummktautomgts) > 0)	
	@foreach($pgdcurriculummktautomgts as $pgdcurriculummktautomgt)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$pgdcurriculummktautomgt->curriculum}}</div>
			  			@endforeach
                      @endif  


			  		</div>
			  		<div class="col_auto_set">


                      @if(count($pgdcareerprospectmktautomgts) > 0)	
	@foreach($pgdcareerprospectmktautomgts as $pgdcareerprospectmktautomgt)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$pgdcareerprospectmktautomgt->career_prospect}}</div>

                          @endforeach
                      @endif  


			  		</div>
			  		<div class="col_auto_set campus_col">


			  		      @if(count($pgdcampusmktautomgts) > 0)	
	@foreach($pgdcampusmktautomgts as $pgdcampusmktautomgt)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$pgdcampusmktautomgt->image}}" class="campus_images"><span></span>{{$pgdcampusmktautomgt->campus_name}}</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">Phd programs <span>Marketing & Automobile Management</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>

                          @if(count($phdeligibilitymktautomgts) > 0)	
	@foreach($phdeligibilitymktautomgts as $phdeligibilitymktautomgt)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$phdeligibilitymktautomgt->eligibility}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">

                      @if(count($phdcurriculummktautomgts) > 0)	
	@foreach($phdcurriculummktautomgts as $phdcurriculummktautomgt)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$phdcurriculummktautomgt->curriculum}}</div>
			  			@endforeach
                      @endif 

			  		</div>
			  		<div class="col_auto_set">
					  @if(count($phdcareerprospectmktautomgts) > 0)	
	@foreach($phdcareerprospectmktautomgts as $phdcareerprospectmktautomgt)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$phdcareerprospectmktautomgt->career_prospect}}</div>

                          @endforeach
                      @endif  

			  		</div>
			  		<div class="col_auto_set campus_col">
					  @if(count($phdcampusmktautomgts) > 0)	
	@foreach($phdcampusmktautomgts as $phdcampusmktautomgt)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$phdcampusmktautomgt->image}}" class="campus_images"><span></span>{{$phdcampusmktautomgt->campus_name}}</div>
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

	@if(count($placementmktautomgts) > 0)	
	    @foreach($placementmktautomgts as $placementmktautomgt)

			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="/icriindia/storage/app/public/{{$placementmktautomgt->image}}">
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
