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
        $campuses = campus::orderBy('id','asc')->get();
        $recruiters = recruiter::orderBy('image','asc')->get();
        $topcourses = topcourse::orderBy('degree','asc')->get();
        $addresses = address::orderBy('location','asc')->get();
        $usefullinks = usefullink::orderBy('title','asc')->get();
        $socialconnectfacebooks = socialconnectfacebook::orderBy('link','asc')->get();
        $socialconnectinstagrams = socialconnectinstagram::orderBy('link','asc')->get();
        $socialconnecttwitters = socialconnecttwitter::orderBy('link','asc')->get();
        $hiringpartners = hiringpartner::orderBy('image','asc')->get();


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

     
        return view('management-studies',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners', 'managementstudies', 'whymanagementstudies', 'deliverablesmanagementstudies', 'whyicrimanagementstudies', 'msceligibilitymanagementstudies', 'msccurriculummanagementstudies', 'msccareerprospectmanagementstudies', 'msccampusmanagementstudies', 'bsceligibilitymanagementstudies', 'bsccurriculummanagementstudies', 'bsccareerprospectmanagementstudies', 'bsccampusmanagementstudies', 'pgdeligibilitymanagementstudies', 'pgdcurriculummanagementstudies', 'pgdcareerprospectmanagementstudies', 'pgdcampusmanagementstudies', 'phdeligibilitymanagementstudies', 'phdcurriculummanagementstudies', 'phdcareerprospectmanagementstudies', 'phdcampusmanagementstudies', 'placementmanagementstudies' ));
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
