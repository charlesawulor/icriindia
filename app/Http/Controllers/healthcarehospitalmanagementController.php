<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Admission;
use App\legacy;
use App\campus;
use App\recruiter;
use App\topcourse;
use App\address;
use App\subscriber;
use App\usefullink;
use App\socialconnectfacebook;
use App\socialconnectinstagram;
use App\socialconnecttwitter;
use App\hiringpartner;




use App\logisticsmanagement;
use App\whylogisticsmanagement;
use App\deliverableslogisticsmanagement;
use App\whyicrilogisticsmanagement;
use App\msceligibilitylogisticsmanagement;
use App\msccurriculumlogisticsmanagement;
use App\msccareerprospectlogisticsmanagement;
use App\msccampuslogisticsmanagement;
use App\bsceligibilitylogisticsmanagement;
use App\bsccurriculumlogisticsmanagement;
use App\bsccareerprospectlogisticsmanagement;
use App\bsccampuslogisticsmanagement;
use App\pgdeligibilitylogisticsmanagement;
use App\pgdcurriculumlogisticsmanagement;
use App\pgdcareerprospectlogisticsmanagement;
use App\pgdcampuslogisticsmanagement;
use App\phdeligibilitylogisticsmanagement;
use App\phdcurriculumlogisticsmanagement;
use App\phdcareerprospectlogisticsmanagement;
use App\phdcampuslogisticsmanagement;
use App\placementlogisticsmanagement;



use App\healthcarehospitalmanagement;
use App\whyhealthcarehospitalmanagement;
use App\deliverableshealthcarehospitalmanagement;
use App\whyicrihealthcarehospitalmanagement;








class healthcarehospitalmanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissions = Admission::orderBy('status','asc')->get();
        $legacies = legacy::orderBy('volume','asc')->get();
        $campuses = campus::orderBy('cities','asc')->get();
        $recruiters = recruiter::orderBy('image','asc')->get();
        $topcourses = topcourse::orderBy('degree','asc')->get();
        $addresses = address::orderBy('location','asc')->get();
        $usefullinks = usefullink::orderBy('title','asc')->get();
        $socialconnectfacebooks = socialconnectfacebook::orderBy('link','asc')->get();
        $socialconnectinstagrams = socialconnectinstagram::orderBy('link','asc')->get();
        $socialconnecttwitters = socialconnecttwitter::orderBy('link','asc')->get();
        $hiringpartners = hiringpartner::orderBy('image','asc')->get();

        

        $logisticsmanagements = logisticsmanagement::orderBy('image','asc')->get();
        $whylogisticsmanagements = whylogisticsmanagement::orderBy('why_logistics','asc')->get();
        $deliverableslogisticsmanagements = deliverableslogisticsmanagement::orderBy('deliverables','asc')->get();
        $whyicrilogisticsmanagements = whyicrilogisticsmanagement::orderBy('why_icri_logistics','asc')->get();

        
        $msceligibilitylogisticsmanagements = msceligibilitylogisticsmanagement::orderBy('eligibility','asc')->get();
        $msccurriculumlogisticsmanagements = msccurriculumlogisticsmanagement::orderBy('curriculum','asc')->get();
        $msccareerprospectlogisticsmanagements = msccareerprospectlogisticsmanagement::orderBy('career_prospect','asc')->get();
        $msccampuslogisticsmanagements = msccampuslogisticsmanagement::orderBy('image','asc')->get();


        $bsceligibilitylogisticsmanagements = bsceligibilitylogisticsmanagement::orderBy('eligibility','asc')->get();
        $bsccurriculumlogisticsmanagements = bsccurriculumlogisticsmanagement::orderBy('curriculum','asc')->get();
        $bsccareerprospectlogisticsmanagements = bsccareerprospectlogisticsmanagement::orderBy('career_prospect','asc')->get();
        $bsccampuslogisticsmanagements = bsccampuslogisticsmanagement::orderBy('image','asc')->get();


        $pgdeligibilitylogisticsmanagements = pgdeligibilitylogisticsmanagement::orderBy('eligibility','asc')->get();
        $pgdcurriculumlogisticsmanagements = pgdcurriculumlogisticsmanagement::orderBy('curriculum','asc')->get();
        $pgdcareerprospectlogisticsmanagements = pgdcareerprospectlogisticsmanagement::orderBy('career_prospect','asc')->get();
        $pgdcampuslogisticsmanagements = pgdcampuslogisticsmanagement::orderBy('image','asc')->get();


        $phdeligibilitylogisticsmanagements = phdeligibilitylogisticsmanagement::orderBy('eligibility','asc')->get();
        $phdcurriculumlogisticsmanagements = phdcurriculumlogisticsmanagement::orderBy('curriculum','asc')->get();
        $phdcareerprospectlogisticsmanagements = phdcareerprospectlogisticsmanagement::orderBy('career_prospect','asc')->get();
        $phdcampuslogisticsmanagements = phdcampuslogisticsmanagement::orderBy('image','asc')->get();
        $placementlogisticsmanagements = placementlogisticsmanagement::orderBy('image','asc')->get();






        $healthcarehospitalmanagements = healthcarehospitalmanagement::orderBy('image','asc')->get();
        $whyhealthcarehospitalmanagements = whyhealthcarehospitalmanagement::orderBy('why_healthcarehospital','asc')->get();
        $deliverableshealthcarehospitalmanagements = deliverableshealthcarehospitalmanagement::orderBy('deliverables','asc')->get();
        $whyicrihealthcarehospitalmanagements = whyicrihealthcarehospitalmanagement::orderBy('why_icri_health','asc')->get();
     

     
        return view('healthcare-hospital-management',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners','logisticsmanagements', 'whylogisticsmanagements', 'deliverableslogisticsmanagements', 'whyicrilogisticsmanagements', 'msceligibilitylogisticsmanagements', 'msccurriculumlogisticsmanagements', 'msccareerprospectlogisticsmanagements', 'msccampuslogisticsmanagements', 'bsceligibilitylogisticsmanagements', 'bsccurriculumlogisticsmanagements', 'bsccareerprospectlogisticsmanagements', 'bsccampuslogisticsmanagements', 'pgdeligibilitylogisticsmanagements', 'pgdcurriculumlogisticsmanagements', 'pgdcareerprospectlogisticsmanagements', 'pgdcampuslogisticsmanagements', 'phdeligibilitylogisticsmanagements', 'phdcurriculumlogisticsmanagements', 'phdcareerprospectlogisticsmanagements', 'phdcampuslogisticsmanagements', 'placementlogisticsmanagements', 'healthcarehospitalmanagements', 'whyhealthcarehospitalmanagements', 'deliverableshealthcarehospitalmanagements', 'whyicrihealthcarehospitalmanagements' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
