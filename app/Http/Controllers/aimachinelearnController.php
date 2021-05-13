<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




use App\logoicri;
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



use App\architecture;
use App\whyarchitecture;
use App\deliverablesarchitecture;
use App\whyicriarchitecture;
use App\msceligibilityarchitecture;
use App\msccurriculumarchitecture;
use App\msccareerprospectarchitecture;
use App\msccampusarchitecture;
use App\bsceligibilityarchitecture;
use App\bsccurriculumarchitecture;
use App\bsccareerprospectarchitecture;
use App\bsccampusarchitecture;
use App\pgdeligibilityarchitecture;
use App\pgdcurriculumarchitecture;
use App\pgdcareerprospectarchitecture;
use App\pgdcampusarchitecture;
use App\phdeligibilityarchitecture;
use App\phdcurriculumarchitecture;
use App\phdcareerprospectarchitecture;
use App\phdcampusarchitecture;
use App\placementarchitecture;



use App\aimachinelearn;
use App\whyaimachinelearn;
use App\deliverablesaimachinelearn;
use App\whyicriaimachinelearn;
use App\msceligibilityaimachinelearn;
use App\msccurriculumaimachinelearn;
use App\msccareerprospectaimachinelearn;
use App\msccampusaimachinelearn;
use App\bsceligibilityaimachinelearn;
use App\bsccurriculumaimachinelearn;
use App\bsccareerprospectaimachinelearn;
use App\bsccampusaimachinelearn;
use App\pgdeligibilityaimachinelearn;
use App\pgdcurriculumaimachinelearn;



class aimachinelearnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       



        $architectures = architecture::orderBy('image','asc')->get();
        $whyarchitectures = whyarchitecture::orderBy('why_architecture','asc')->get();
        $deliverablesarchitectures = deliverablesarchitecture::orderBy('deliverables','asc')->get();
        $whyicriarchitectures = whyicriarchitecture::orderBy('why_icri_architecture','asc')->get();
        $msceligibilityarchitectures = msceligibilityarchitecture::orderBy('eligibility','asc')->get();
        $msccurriculumarchitectures = msccurriculumarchitecture::orderBy('curriculum','asc')->get();
        $msccareerprospectarchitectures = msccareerprospectarchitecture::orderBy('career_prospect','asc')->get();
        $msccampusarchitectures = msccampusarchitecture::orderBy('image','asc')->get();
        $bsceligibilityarchitectures = bsceligibilityarchitecture::orderBy('eligibility','asc')->get();
        $bsccurriculumarchitectures = bsccurriculumarchitecture::orderBy('curriculum','asc')->get();
        $bsccareerprospectarchitectures = bsccareerprospectarchitecture::orderBy('career_prospect','asc')->get();
        $bsccampusarchitectures = bsccampusarchitecture::orderBy('image','asc')->get();
        $pgdeligibilityarchitectures = pgdeligibilityarchitecture::orderBy('eligibility','asc')->get();
        $pgdcurriculumarchitectures = pgdcurriculumarchitecture::orderBy('curriculum','asc')->get();
        $pgdcareerprospectarchitectures = pgdcareerprospectarchitecture::orderBy('career_prospect','asc')->get();
        $pgdcampusarchitectures = pgdcampusarchitecture::orderBy('image','asc')->get();
        $phdeligibilityarchitectures = phdeligibilityarchitecture::orderBy('eligibility','asc')->get();
        $phdcurriculumarchitectures = phdcurriculumarchitecture::orderBy('curriculum','asc')->get();
        $phdcareerprospectarchitectures = phdcareerprospectarchitecture::orderBy('career_prospect','asc')->get();
        $phdcampusarchitectures = phdcampusarchitecture::orderBy('image','asc')->get();
        $placementarchitectures = placementarchitecture::orderBy('image','asc')->get();



        $aimachinelearns = aimachinelearn::orderBy('image','asc')->get();
        $whyaimachinelearns = whyaimachinelearn::orderBy('why_aimachinelearn','asc')->get();
        $deliverablesaimachinelearns = deliverablesaimachinelearn::orderBy('deliverables','asc')->get();
        $whyicriaimachinelearns = whyicriaimachinelearn::orderBy('why_icri_aimachinelearn','asc')->get();
        $msceligibilityaimachinelearns = msceligibilityaimachinelearn::orderBy('eligibility','asc')->get();
        $msccurriculumaimachinelearns = msccurriculumaimachinelearn::orderBy('curriculum','asc')->get();
        $msccareerprospectaimachinelearns = msccareerprospectaimachinelearn::orderBy('career_prospect','asc')->get();
        $msccampusaimachinelearns = msccampusaimachinelearn::orderBy('image','asc')->get();
        $bsceligibilityaimachinelearns = bsceligibilityaimachinelearn::orderBy('eligibility','asc')->get();
        $bsccurriculumaimachinelearns = bsccurriculumaimachinelearn::orderBy('curriculum','asc')->get();
        $bsccareerprospectaimachinelearns = bsccareerprospectaimachinelearn::orderBy('career_prospect','asc')->get();
        $bsccampusaimachinelearns = bsccampusaimachinelearn::orderBy('image','asc')->get();
        $pgdeligibilityaimachinelearns = pgdeligibilityaimachinelearn::orderBy('eligibility','asc')->get();
        $pgdcurriculumaimachinelearns = pgdcurriculumaimachinelearn::orderBy('curriculum','asc')->get();


     
        return view('ai-machine-learning',compact ( 'logoicris','admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners','architectures', 'whyarchitectures', 'deliverablesarchitectures', 'whyicriarchitectures', 'msceligibilityarchitectures','msccurriculumarchitectures', 'msccareerprospectarchitectures', 'msccampusarchitectures', 'bsceligibilityarchitectures', 'bsccurriculumarchitectures', 'bsccareerprospectarchitectures', 'bsccampusarchitectures', 'pgdeligibilityarchitectures', 'pgdcurriculumarchitectures', 'pgdcareerprospectarchitectures', 'pgdcampusarchitectures', 'pgdcampusarchitectures', 'phdeligibilityarchitectures', 'phdcurriculumarchitectures', 'phdcareerprospectarchitectures', 'phdcampusarchitectures', 'placementarchitectures', 'aimachinelearns', 'whyaimachinelearns', 'deliverablesaimachinelearns', 'whyicriaimachinelearns', 'msceligibilityaimachinelearns', 'msccurriculumaimachinelearns', 'msccareerprospectaimachinelearns', 'msccampusaimachinelearns', 'bsceligibilityaimachinelearns', 'bsccurriculumaimachinelearns', 'bsccareerprospectaimachinelearns', 'bsccampusaimachinelearns' , 'pgdeligibilityaimachinelearns', 'pgdcurriculumaimachinelearns'));
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
