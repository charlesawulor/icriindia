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


use App\mktautomgt;
use App\whymktautomgt;
use App\deliverablesmktautomgt;
use App\whyicrimktautomgt;
use App\msceligibilitymktautomgt;
use App\msccurriculummktautomgt;
use App\msccareerprospectmktautomgt;
use App\msccampusmktautomgt;
use App\bsceligibilitymktautomgt;
use App\bsccurriculummktautomgt;
use App\bsccareerprospectmktautomgt;
use App\bsccampusmktautomgt;
use App\pgdeligibilitymktautomgt;
use App\pgdcurriculummktautomgt;
use App\pgdcareerprospectmktautomgt;
use App\pgdcampusmktautomgt;
use App\phdeligibilitymktautomgt;
use App\phdcurriculummktautomgt;
use App\phdcareerprospectmktautomgt;
use App\phdcampusmktautomgt;
use App\placementmktautomgt;

use App\managementstudy;
use App\whymanagementstudy;
use App\deliverablesmanagementstudy;
use App\whyicrimanagementstudy;
use App\msceligibilitymanagementstudy;
use App\msccurriculummanagementstudy;
use App\msccareerprospectmanagementstudy;
use App\msccampusmanagementstudy;
use App\bsceligibilitymanagementstudy;
use App\bsccurriculummanagementstudy;
use App\bsccareerprospectmanagementstudy;
use App\bsccampusmanagementstudy;
use App\pgdeligibilitymanagementstudy;
use App\pgdcurriculummanagementstudy;
use App\pgdcareerprospectmanagementstudy;
use App\pgdcampusmanagementstudy;
use App\phdeligibilitymanagementstudy;
use App\phdcurriculummanagementstudy;
use App\phdcareerprospectmanagementstudy;
use App\phdcampusmanagementstudy;
use App\placementmanagementstudy;



class managementstudiesController extends Controller
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




        $mktautomgts = mktautomgt::orderBy('image','asc')->get();
        $whymktautomgts = whymktautomgt::orderBy('why_auto','asc')->get();
        $deliverablesmktautomgts = deliverablesmktautomgt::orderBy('deliverables','asc')->get();
        $whyicrimktautomgts = whyicrimktautomgt::orderBy('why_icri_auto','asc')->get();
        $msceligibilitymktautomgts = msceligibilitymktautomgt::orderBy('eligibility','asc')->get();
        $msccurriculummktautomgts = msccurriculummktautomgt::orderBy('curriculum','asc')->get();
        $msccareerprospectmktautomgts = msccareerprospectmktautomgt::orderBy('career_prospect','asc')->get();
        $msccampusmktautomgts = msccampusmktautomgt::orderBy('image','asc')->get();
        $bsceligibilitymktautomgts = bsceligibilitymktautomgt::orderBy('eligibility','asc')->get();
        $bsccurriculummktautomgts = bsccurriculummktautomgt::orderBy('curriculum','asc')->get();
        $bsccareerprospectmktautomgts = bsccareerprospectmktautomgt::orderBy('career_prospect','asc')->get();
        $bsccampusmktautomgts = bsccampusmktautomgt::orderBy('image','asc')->get();
        $pgdeligibilitymktautomgts = pgdeligibilitymktautomgt::orderBy('eligibility','asc')->get();
        $pgdcurriculummktautomgts = pgdcurriculummktautomgt::orderBy('curriculum','asc')->get();
        $pgdcareerprospectmktautomgts = pgdcareerprospectmktautomgt::orderBy('career_prospect','asc')->get();
        $pgdcampusmktautomgts = pgdcampusmktautomgt::orderBy('image','asc')->get();
        $phdeligibilitymktautomgts = phdeligibilitymktautomgt::orderBy('eligibility','asc')->get();
        $phdcurriculummktautomgts = phdcurriculummktautomgt::orderBy('curriculum','asc')->get();
        $phdcareerprospectmktautomgts = phdcareerprospectmktautomgt::orderBy('career_prospect','asc')->get();
        $phdcampusmktautomgts = phdcampusmktautomgt::orderBy('image','asc')->get();
        $placementmktautomgts = placementmktautomgt::orderBy('image','asc')->get();



        $managementstudies = managementstudy::orderBy('image','asc')->get();
        $whymanagementstudies = whymanagementstudy::orderBy('why_management','asc')->get();
        $deliverablesmanagementstudies = deliverablesmanagementstudy::orderBy('deliverables','asc')->get();
        $whyicrimanagementstudies = whyicrimanagementstudy::orderBy('why_icri_management','asc')->get();
        $msceligibilitymanagementstudies = msceligibilitymanagementstudy::orderBy('eligibility','asc')->get();
        $msccurriculummanagementstudies = msccurriculummanagementstudy::orderBy('curriculum','asc')->get();
        $msccareerprospectmanagementstudies = msccareerprospectmanagementstudy::orderBy('career_prospect','asc')->get();
        $msccampusmanagementstudies = msccampusmanagementstudy::orderBy('image','asc')->get();
        $bsceligibilitymanagementstudies = bsceligibilitymanagementstudy::orderBy('eligibility','asc')->get();
        $bsccurriculummanagementstudies = bsccurriculummanagementstudy::orderBy('curriculum','asc')->get();
        $bsccareerprospectmanagementstudies = bsccareerprospectmanagementstudy::orderBy('career_prospect','asc')->get();
        $bsccampusmanagementstudies = bsccampusmanagementstudy::orderBy('image','asc')->get();
        $pgdeligibilitymanagementstudies = pgdeligibilitymanagementstudy::orderBy('eligibility','asc')->get();
        $pgdcurriculummanagementstudies = pgdcurriculummanagementstudy::orderBy('curriculum','asc')->get();
        $pgdcareerprospectmanagementstudies = pgdcareerprospectmanagementstudy::orderBy('career_prospect','asc')->get();
        $pgdcampusmanagementstudies = pgdcampusmanagementstudy::orderBy('image','asc')->get();
        $phdeligibilitymanagementstudies = phdeligibilitymanagementstudy::orderBy('eligibility','asc')->get();
        $phdcurriculummanagementstudies = phdcurriculummanagementstudy::orderBy('curriculum','asc')->get();
        $phdcareerprospectmanagementstudies = phdcareerprospectmanagementstudy::orderBy('career_prospect','asc')->get();
        $phdcampusmanagementstudies = phdcampusmanagementstudy::orderBy('image','asc')->get();
        $placementmanagementstudies = placementmanagementstudy::orderBy('image','asc')->get();

     
        return view('management-studies',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners','mktautomgts', 'whymktautomgts', 'deliverablesmktautomgts', 'whyicrimktautomgts', 'msceligibilitymktautomgts', 'msccurriculummktautomgts', 'msccareerprospectmktautomgts', 'msccampusmktautomgts', 'bsceligibilitymktautomgts', 'bsccurriculummktautomgts', 'bsccareerprospectmktautomgts', 'bsccampusmktautomgts', 'pgdeligibilitymktautomgts', 'pgdcurriculummktautomgts', 'pgdcareerprospectmktautomgts', 'pgdcampusmktautomgts', 'phdeligibilitymktautomgts', 'phdcurriculummktautomgts', 'phdcareerprospectmktautomgts', 'phdcampusmktautomgts', 'placementmktautomgts', 'managementstudies', 'whymanagementstudies', 'deliverablesmanagementstudies', 'whyicrimanagementstudies', 'msceligibilitymanagementstudies', 'msccurriculummanagementstudies', 'msccareerprospectmanagementstudies', 'msccampusmanagementstudies', 'bsceligibilitymanagementstudies', 'bsccurriculummanagementstudies', 'bsccareerprospectmanagementstudies', 'bsccampusmanagementstudies', 'pgdeligibilitymanagementstudies', 'pgdcurriculummanagementstudies', 'pgdcareerprospectmanagementstudies', 'pgdcampusmanagementstudies', 'phdeligibilitymanagementstudies', 'phdcurriculummanagementstudies', 'phdcareerprospectmanagementstudies', 'phdcampusmanagementstudies', 'placementmanagementstudies' ));
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