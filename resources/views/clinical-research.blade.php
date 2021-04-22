
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
    @if(count($clinicalresearches) > 0)	
	@foreach($clinicalresearches as $clinicalresearch)
			Clinical<span>{{$clinicalresearch->course_title}}</span>
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
		    <a class="nav-link active" id="tab_ci" data-toggle="tab" href="#tab_ci_tag" role="tab" aria-controls="tab_ci_tag" aria-selected="true">CLINICAL<br>INDUSTRY<span></span></a>
		  </li>
		  <li class="nav-item col-lg-5 col-sm-5 col-5">
		    <a class="nav-link" id="tab_wdpcr" data-toggle="tab" href="#tab_wdpcr_tag" role="tab" aria-controls="tab_wdpcr_tag" aria-selected="false">WHY DEGREE PROGRAMS IN CLINICAL RESEARCH<span></span></a>
		  </li>
		  <li class="nav-item col-lg-4 col-sm-4 col-4">
		    <a class="nav-link" id="tab_dtp" data-toggle="tab" href="#tab_dtp_tag" role="tab" aria-controls="tab_dtp_tag" aria-selected="false">DELIVERABLES OF THE PROGRAM<span></span></a>
		  </li>
		</ul>
	</div>

	<div class="tab-content offer_tab_cont" id="myTabContent">
		  <div class="tab-pane fade show active" id="tab_ci_tag" role="tabpanel" aria-labelledby="tab_ci_tag">
		  	<div class="container">
              @if(count($clinicalresearches) > 0)	
	@foreach($clinicalresearches as $clinicalresearch)
				<div class="row">
					<div class="col-lg-6 col-sm-6">
						<div class="cr_sec_disc">
						{{$clinicalresearch->about_course}}

						</div>
					</div>
			
					<div class="col-lg-6 col-sm-3 col-sm-6">
						<img src="/icriindia/storage/app/public/{{$clinicalresearch->image}}" width="100%" class="cr_cli_re_cont">
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

                            @if(count($whyclinicalresearches) > 0)	
	@foreach($whyclinicalresearches as $whyclinicalresearch)
								<li><span>{{$whyclinicalresearch->why_clinical}}</span></li>
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
								
                            @if(count($deliverablesclinicalresearches) > 0)	
	@foreach($deliverablesclinicalresearches as $deliverablesclinicalresearch)
								<li><span>{{$deliverablesclinicalresearch->deliverables}}</span></li>
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
                				
                @if(count($whyicriclinicalresearches) > 0)	
	@foreach($whyicriclinicalresearches as $whyicriclinicalresearch)
					<div class="cr_why_icri_text_cont position-relative">{{$whyicriclinicalresearch->why_icri_clinical}}</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">MSc <span>Clinical Research</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>
                          @if(count($msceligibilityclinicalresearches) > 0)	
	@foreach($msceligibilityclinicalresearches as $msceligibilityclinicalresearch)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$msceligibilityclinicalresearch->eligibility}}</div>
			  			@endforeach
                      @endif    
			  		</div>
			  		<div class="col_auto_set">
                      @if(count($msccurriculumclinicalresearches) > 0)	
	@foreach($msccurriculumclinicalresearches as $msccurriculumclinicalresearch)

			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">{{$msccurriculumclinicalresearch->curriculum}}</div>
			  			@endforeach
                      @endif   
			  		</div>
			  		<div class="col_auto_set">
                      @if(count($msccareerprospectclinicalresearches) > 0)	
	@foreach($msccareerprospectclinicalresearches as $msccareerprospectclinicalresearch)
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">{{$msccareerprospectclinicalresearch->career_prospect}}</div>

                          @endforeach
                      @endif  
			  		</div>
			  		<div class="col_auto_set campus_col">
                      @if(count($msccampusclinicalresearches) > 0)	
	@foreach($msccampusclinicalresearches as $msccampusclinicalresearch)
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="/icriindia/storage/app/public/{{$msccampusclinicalresearch->image}}" class="campus_images"><span></span>{{$msccampusclinicalresearch->campus_name}}</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">BSc <span>Clinical Research</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Microbiology</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Biotechnology</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Pharmacy</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Medicine</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Nursing</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Physiotherapy</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Dentistry</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Homeopathy</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Ayurvedic and Veterinary Science with min 50%</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Clinical Research Overview</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Regulation & Ethics in Clinical Research</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Global Regulations</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Molecular mechanism of drug action</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Pharma Regulatory Affairs</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Pharmacovigilance 1& 2</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Designing Clinical Trials</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Advanced Clinical Data Management</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Training - Argus, Clinical Oracle</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Trainings - In India’s leading super specialty hospitals only</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Seminars & Site Visits to Clinical Trial Site</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre"><span>For Doctors</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">Principal Investigators / Co-investigator / Medical Advisor / Drug Developers / Regulatory Affairs Manager / Clinical Research Physician.</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre"><span>Others</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">Data Manager, Regulatory Affair Manager, Auditors, Site manager, Medical Writer, Research Associate</div>
			  		</div>
			  		<div class="col_auto_set campus_col">
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Delhi Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Mumbai Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Pune Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Bangalore Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Jaipur Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Dehradun Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Mangaluru Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Bhopal Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Anantapur Campus</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">PG Diploma <span>Clinical Research</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Microbiology</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Biotechnology</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Pharmacy</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Medicine</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Nursing</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Physiotherapy</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Dentistry</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Homeopathy</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Ayurvedic and Veterinary Science with min 50%</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Clinical Research Overview</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Regulation & Ethics in Clinical Research</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Global Regulations</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Molecular mechanism of drug action</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Pharma Regulatory Affairs</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Pharmacovigilance 1& 2</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Designing Clinical Trials</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Advanced Clinical Data Management</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Training - Argus, Clinical Oracle</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Trainings - In India’s leading super specialty hospitals only</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Seminars & Site Visits to Clinical Trial Site</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre"><span>For Doctors</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">Principal Investigators / Co-investigator / Medical Advisor / Drug Developers / Regulatory Affairs Manager / Clinical Research Physician.</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre"><span>Others</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">Data Manager, Regulatory Affair Manager, Auditors, Site manager, Medical Writer, Research Associate</div>
			  		</div>
			  		<div class="col_auto_set campus_col">
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Delhi Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Mumbai Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Pune Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Bangalore Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Jaipur Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Dehradun Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Mangaluru Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Bhopal Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Anantapur Campus</div>
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
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_head">Phd programs <span>Clinical Research</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_main_dis">2 Year<br><span> UGC</span> Program Full-Time</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi"><span>Graduate or Postgraduate in Life Sciences</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Microbiology</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Biotechnology</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Pharmacy</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Medicine</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Nursing</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Physiotherapy</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Dentistry</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Homeopathy</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis">Ayurvedic and Veterinary Science with min 50%</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Clinical Research Overview</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Regulation & Ethics in Clinical Research</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Global Regulations</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Molecular mechanism of drug action</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Pharma Regulatory Affairs</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Pharmacovigilance 1& 2</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Designing Clinical Trials</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Advanced Clinical Data Management</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Training - Argus, Clinical Oracle</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Trainings - In India’s leading super specialty hospitals only</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_curi_dis">Seminars & Site Visits to Clinical Trial Site</div>
			  		</div>
			  		<div class="col_auto_set">
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre"><span>For Doctors</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">Principal Investigators / Co-investigator / Medical Advisor / Drug Developers / Regulatory Affairs Manager / Clinical Research Physician.</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre"><span>Others</span></div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_disc_elegi_dis offer_tab_cont_carre">Data Manager, Regulatory Affair Manager, Auditors, Site manager, Medical Writer, Research Associate</div>
			  		</div>
			  		<div class="col_auto_set campus_col">
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Delhi Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Mumbai Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Pune Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Bangalore Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Jaipur Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Dehradun Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Mangaluru Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image_sec.jpg" class="campus_images"><span></span>Bhopal Campus</div>
			  			<div class="offer_tab_cont_disc offer_tab_cont_campus"><img src="Images/campus_floating_image.jpg" class="campus_images"><span></span>Anantapur Campus</div>
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
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_one.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_two.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_three.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_four.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_five.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_six.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_seven.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_eight.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_nine.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_ten.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_eleven.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="compny_part">
					<div class="Part_warp">
						<div class="image_wrap">
							<img src="Images/cr_partner_twelve.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="news_letter">
	<div class="container d-flex">
		<div class="legacy_title">Subscribe<span> our newsletter</span></div>
		<form method="" action="">
			<input type="email" name="email" placeholder="Enter your Email" required="required">
			<button type="submit" class="read_more">Subsribe <span>Now</span></button>
		</form>
	</div>
</section>
@endsection
