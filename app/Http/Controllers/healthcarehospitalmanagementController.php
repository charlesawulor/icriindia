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

use App\healthcarehospitalmanagement;
use App\whyhealthcarehospitalmanagement;
use App\deliverableshealthcarehospitalmanagement;
use App\whyicrihealthcarehospitalmanagement;
use App\msceligibilityhealthcarehospitalmanagement;
use App\msccurriculumhealthcarehospitalmanagement;
use App\msccareerprospecthealthcarehospitalmanagement;
use App\msccampushealthcarehospitalmanagement;
use App\bsceligibilityhealthcarehospitalmanagement;
use App\bsccurriculumhealthcarehospitalmanagement;
use App\bsccareerprospecthealthcarehospitalmanagement;
use App\bsccampushealthcarehospitalmanagement;
use App\pgdeligibilityhealthcarehospitalmanagement;
use App\pgdcurriculumhealthcarehospitalmanagement;
use App\pgdcareerprospecthealthcarehospitalmanagement;
use App\pgdcampushealthcarehospitalmanagement;
use App\phdeligibilityhealthcarehospitalmanagement;
use App\phdcurriculumhealthcarehospitalmanagement;
use App\phdcareerprospecthealthcarehospitalmanagement;
use App\phdcampushealthcarehospitalmanagement;
use App\placementhealthcarehospitalmanagement;







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
        $campuses = campus::orderBy('id','asc')->get();
        $recruiters = recruiter::orderBy('image','asc')->get();
        $topcourses = topcourse::orderBy('degree','asc')->get();
        $addresses = address::orderBy('location','asc')->get();
        $usefullinks = usefullink::orderBy('title','asc')->get();
        $socialconnectfacebooks = socialconnectfacebook::orderBy('link','asc')->get();
        $socialconnectinstagrams = socialconnectinstagram::orderBy('link','asc')->get();
        $socialconnecttwitters = socialconnecttwitter::orderBy('link','asc')->get();
        $hiringpartners = hiringpartner::orderBy('image','asc')->get();

        $healthcarehospitalmanagements = healthcarehospitalmanagement::orderBy('image','asc')->get();
        $whyhealthcarehospitalmanagements = whyhealthcarehospitalmanagement::orderBy('why_healthcarehospital','asc')->get();
        $deliverableshealthcarehospitalmanagements = deliverableshealthcarehospitalmanagement::orderBy('deliverables','asc')->get();
        $whyicrihealthcarehospitalmanagements = whyicrihealthcarehospitalmanagement::orderBy('why_icri_health','asc')->get();
        $msceligibilityhealthcarehospitalmanagements = msceligibilityhealthcarehospitalmanagement::orderBy('eligibility','asc')->get();
        $msccurriculumhealthcarehospitalmanagements = msccurriculumhealthcarehospitalmanagement::orderBy('curriculum','asc')->get();
        $msccareerprospecthealthcarehospitalmanagements = msccareerprospecthealthcarehospitalmanagement::orderBy('career_prospect','asc')->get();
        $msccampushealthcarehospitalmanagements = msccampushealthcarehospitalmanagement::orderBy('image','asc')->get();
        $bsceligibilityhealthcarehospitalmanagements = bsceligibilityhealthcarehospitalmanagement::orderBy('eligibility','asc')->get();
        $bsccurriculumhealthcarehospitalmanagements = bsccurriculumhealthcarehospitalmanagement::orderBy('curriculum','asc')->get();
        $bsccareerprospecthealthcarehospitalmanagements = bsccareerprospecthealthcarehospitalmanagement::orderBy('career_prospect','asc')->get();
        $bsccampushealthcarehospitalmanagements = bsccampushealthcarehospitalmanagement::orderBy('image','asc')->get();
        $pgdeligibilityhealthcarehospitalmanagements = pgdeligibilityhealthcarehospitalmanagement::orderBy('eligibility','asc')->get();
        $pgdcurriculumhealthcarehospitalmanagements = pgdcurriculumhealthcarehospitalmanagement::orderBy('curriculum','asc')->get();
        $pgdcareerprospecthealthcarehospitalmanagements = pgdcareerprospecthealthcarehospitalmanagement::orderBy('career_prospect','asc')->get();
        $pgdcampushealthcarehospitalmanagements = pgdcampushealthcarehospitalmanagement::orderBy('image','asc')->get();
        $phdeligibilityhealthcarehospitalmanagements = phdeligibilityhealthcarehospitalmanagement::orderBy('eligibility','asc')->get();
        $phdcurriculumhealthcarehospitalmanagements = phdcurriculumhealthcarehospitalmanagement::orderBy('curriculum','asc')->get();
        $phdcareerprospecthealthcarehospitalmanagements = phdcareerprospecthealthcarehospitalmanagement::orderBy('career_prospect','asc')->get();
        $phdcampushealthcarehospitalmanagements = phdcampushealthcarehospitalmanagement::orderBy('image','asc')->get();
        $placementhealthcarehospitalmanagements = placementhealthcarehospitalmanagement::orderBy('image','asc')->get();


        return view('healthcare-hospital-management',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners','healthcarehospitalmanagements', 'whyhealthcarehospitalmanagements', 'deliverableshealthcarehospitalmanagements', 'whyicrihealthcarehospitalmanagements', 'msceligibilityhealthcarehospitalmanagements', 'msccurriculumhealthcarehospitalmanagements', 'msccareerprospecthealthcarehospitalmanagements', 'msccampushealthcarehospitalmanagements', 'bsceligibilityhealthcarehospitalmanagements', 'bsccurriculumhealthcarehospitalmanagements', 'bsccareerprospecthealthcarehospitalmanagements', 'bsccampushealthcarehospitalmanagements', 'pgdeligibilityhealthcarehospitalmanagements', 'pgdcurriculumhealthcarehospitalmanagements', 'pgdcareerprospecthealthcarehospitalmanagements', 'pgdcampushealthcarehospitalmanagements', 'phdeligibilityhealthcarehospitalmanagements', 'phdcurriculumhealthcarehospitalmanagements', 'phdcareerprospecthealthcarehospitalmanagements', 'phdcampushealthcarehospitalmanagements', 'placementhealthcarehospitalmanagements' ));
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
