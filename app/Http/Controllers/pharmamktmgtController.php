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


use App\pharmamktmgt;
use App\whypharmamktmgt;
use App\deliverablespharmamktmgt;
use App\whyicripharmamktmgt;
use App\msceligibilitypharmamktmgt;
use App\msccurriculumpharmamktmgt;
use App\msccareerprospectpharmamktmgt;
use App\msccampuspharmamktmgt;
use App\bsceligibilitypharmamktmgt;
use App\bsccurriculumpharmamktmgt;
use App\bsccareerprospectpharmamktmgt;
use App\bsccampuspharmamktmgt;
use App\pgdeligibilitypharmamktmgt;
use App\pgdcurriculumpharmamktmgt;
use App\pgdcareerprospectpharmamktmgt;
use App\pgdcampuspharmamktmgt;
use App\phdeligibilitypharmamktmgt;
use App\phdcurriculumpharmamktmgt;
use App\phdcareerprospectpharmamktmgt;
use App\phdcampuspharmamktmgt;
use App\placementpharmamktmgt;




class pharmamktmgtController extends Controller
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

        




        $pharmamktmgts = pharmamktmgt::orderBy('image','asc')->get();
        $whypharmamktmgts = whypharmamktmgt::orderBy('why_pharma','asc')->get();
        $deliverablespharmamktmgts = deliverablespharmamktmgt::orderBy('deliverables','asc')->get();
        $whyicripharmamktmgts = whyicripharmamktmgt::orderBy('why_icri_pharma','asc')->get();
        $msceligibilitypharmamktmgts = msceligibilitypharmamktmgt::orderBy('eligibility','asc')->get();
        $msccurriculumpharmamktmgts = msccurriculumpharmamktmgt::orderBy('curriculum','asc')->get();
        $msccareerprospectpharmamktmgts = msccareerprospectpharmamktmgt::orderBy('career_prospect','asc')->get();
        $msccampuspharmamktmgts = msccampuspharmamktmgt::orderBy('image','asc')->get();
        $bsceligibilitypharmamktmgts = bsceligibilitypharmamktmgt::orderBy('eligibility','asc')->get();
        $bsccurriculumpharmamktmgts = bsccurriculumpharmamktmgt::orderBy('curriculum','asc')->get();
        $bsccareerprospectpharmamktmgts = bsccareerprospectpharmamktmgt::orderBy('career_prospect','asc')->get();
        $bsccampuspharmamktmgts = bsccampuspharmamktmgt::orderBy('image','asc')->get();
        $pgdeligibilitypharmamktmgts = pgdeligibilitypharmamktmgt::orderBy('eligibility','asc')->get();
        $pgdcurriculumpharmamktmgts = pgdcurriculumpharmamktmgt::orderBy('curriculum','asc')->get();
        $pgdcareerprospectpharmamktmgts = pgdcareerprospectpharmamktmgt::orderBy('career_prospect','asc')->get();
        $pgdcampuspharmamktmgts = pgdcampuspharmamktmgt::orderBy('image','asc')->get();
        $phdeligibilitypharmamktmgts = phdeligibilitypharmamktmgt::orderBy('eligibility','asc')->get();
        $phdcurriculumpharmamktmgts = phdcurriculumpharmamktmgt::orderBy('curriculum','asc')->get();
        $phdcareerprospectpharmamktmgts = phdcareerprospectpharmamktmgt::orderBy('career_prospect','asc')->get();
        $phdcampuspharmamktmgts = phdcampuspharmamktmgt::orderBy('image','asc')->get();
        $placementpharmamktmgts = placementpharmamktmgt::orderBy('image','asc')->get();

         
        return view('pharma-marketing-management',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners','pharmamktmgts', 'whypharmamktmgts', 'deliverablespharmamktmgts', 'whyicripharmamktmgts', 'msceligibilitypharmamktmgts', 'msccurriculumpharmamktmgts', 'msccareerprospectpharmamktmgts', 'msccampuspharmamktmgts', 'bsceligibilitypharmamktmgts', 'bsccurriculumpharmamktmgts', 'bsccareerprospectpharmamktmgts', 'bsccampuspharmamktmgts', 'pgdeligibilitypharmamktmgts', 'pgdcurriculumpharmamktmgts', 'pgdcareerprospectpharmamktmgts','pgdcampuspharmamktmgts', 'phdeligibilitypharmamktmgts', 'phdcurriculumpharmamktmgts', 'phdcareerprospectpharmamktmgts', 'phdcampuspharmamktmgts', 'placementpharmamktmgts' ));
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
