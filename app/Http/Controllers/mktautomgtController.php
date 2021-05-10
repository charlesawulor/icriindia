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


class mktautomgtController extends Controller
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
     

     
        return view('marketing-automobile-management',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners','pharmamktmgts', 'whypharmamktmgts', 'deliverablespharmamktmgts', 'whyicripharmamktmgts', 'msceligibilitypharmamktmgts', 'msccurriculumpharmamktmgts', 'msccareerprospectpharmamktmgts', 'msccampuspharmamktmgts', 'bsceligibilitypharmamktmgts', 'bsccurriculumpharmamktmgts', 'bsccareerprospectpharmamktmgts', 'bsccampuspharmamktmgts', 'pgdeligibilitypharmamktmgts', 'pgdcurriculumpharmamktmgts', 'pgdcareerprospectpharmamktmgts','pgdcampuspharmamktmgts', 'phdeligibilitypharmamktmgts', 'phdcurriculumpharmamktmgts', 'phdcareerprospectpharmamktmgts', 'phdcampuspharmamktmgts', 'placementpharmamktmgts', 'mktautomgts', 'whymktautomgts', 'deliverablesmktautomgts', 'whyicrimktautomgts', 'msceligibilitymktautomgts', 'msccurriculummktautomgts', 'msccareerprospectmktautomgts', 'msccampusmktautomgts', 'bsceligibilitymktautomgts', 'bsccurriculummktautomgts', 'bsccareerprospectmktautomgts', 'bsccampusmktautomgts', 'pgdeligibilitymktautomgts', 'pgdcurriculummktautomgts', 'pgdcareerprospectmktautomgts', 'pgdcampusmktautomgts', 'phdeligibilitymktautomgts', 'phdcurriculummktautomgts', 'phdcareerprospectmktautomgts', 'phdcampusmktautomgts', 'placementmktautomgts' ));
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
