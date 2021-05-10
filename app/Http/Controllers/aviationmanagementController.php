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

use App\aviationmanagement;
use App\whyaviationmanagement;
use App\deliverablesaviationmanagement;
use App\whyicriaviationmanagement;
use App\msceligibilityaviationmanagement;
use App\msccurriculumaviationmanagement;
use App\msccareerprospectaviationmanagement;
use App\msccampusaviationmanagement;
use App\bsceligibilityaviationmanagement;
use App\bsccurriculumaviationmanagement;
use App\bsccareerprospectaviationmanagement;
use App\bsccampusaviationmanagement;
use App\pgdeligibilityaviationmanagement;
use App\pgdcurriculumaviationmanagement;
use App\pgdcareerprospectaviationmanagement;
use App\pgdcampusaviationmanagement;
use App\phdeligibilityaviationmanagement;
use App\phdcurriculumaviationmanagement;
use App\phdcareerprospectaviationmanagement;
use App\phdcampusaviationmanagement;
use App\placementaviationmanagement;



class aviationmanagementController extends Controller
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






        $aviationmanagements = aviationmanagement::orderBy('image','asc')->get();
        $whyaviationmanagements = whyaviationmanagement::orderBy('why_aviation','asc')->get();

        $deliverablesaviationmanagements = deliverablesaviationmanagement::orderBy('deliverables','asc')->get();

        $whyicriaviationmanagements = whyicriaviationmanagement::orderBy('why_icri_aviation','asc')->get();

        $msceligibilityaviationmanagements = msceligibilityaviationmanagement::orderBy('eligibility','asc')->get();

        $msccurriculumaviationmanagements = msccurriculumaviationmanagement::orderBy('curriculum','asc')->get();

        $msccareerprospectaviationmanagements = msccareerprospectaviationmanagement::orderBy('career_prospect','asc')->get();
        $msccampusaviationmanagements = msccampusaviationmanagement::orderBy('image','asc')->get();
        $bsceligibilityaviationmanagements = bsceligibilityaviationmanagement::orderBy('eligibility','asc')->get();
        $bsccurriculumaviationmanagements = bsccurriculumaviationmanagement::orderBy('curriculum','asc')->get();

        $bsccareerprospectaviationmanagements = bsccareerprospectaviationmanagement::orderBy('career_prospect','asc')->get();
        $bsccampusaviationmanagements = bsccampusaviationmanagement::orderBy('image','asc')->get();

        $pgdeligibilityaviationmanagements = pgdeligibilityaviationmanagement::orderBy('eligibility','asc')->get();
        $pgdcurriculumaviationmanagements = pgdcurriculumaviationmanagement::orderBy('curriculum','asc')->get();

        $pgdcareerprospectaviationmanagements = pgdcareerprospectaviationmanagement::orderBy('career_prospect','asc')->get();
        $pgdcampusaviationmanagements = pgdcampusaviationmanagement::orderBy('image','asc')->get();



        
        $phdeligibilityaviationmanagements = phdeligibilityaviationmanagement::orderBy('eligibility','asc')->get();
        $phdcurriculumaviationmanagements = phdcurriculumaviationmanagement::orderBy('curriculum','asc')->get();

        $phdcareerprospectaviationmanagements = phdcareerprospectaviationmanagement::orderBy('career_prospect','asc')->get();
        $phdcampusaviationmanagements = phdcampusaviationmanagement::orderBy('image','asc')->get();
        $placementaviationmanagements = placementaviationmanagement::orderBy('image','asc')->get();






        

        return view('aviation-management',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners',
        
        
        'aviationmanagements','whyaviationmanagements', 'deliverablesaviationmanagements', 'whyicriaviationmanagements', 'msceligibilityaviationmanagements', 'msccurriculumaviationmanagements', 'msccareerprospectaviationmanagements', 'msccampusaviationmanagements', 'bsceligibilityaviationmanagements', 'bsccurriculumaviationmanagements', 'bsccareerprospectaviationmanagements', 'bsccampusaviationmanagements' , 'pgdeligibilityaviationmanagements', 'pgdcurriculumaviationmanagements', 'pgdcareerprospectaviationmanagements', 'pgdcampusaviationmanagements', 'phdeligibilityaviationmanagements', 'phdcurriculumaviationmanagements', 'phdcareerprospectaviationmanagements', 'phdcampusaviationmanagements', 'placementaviationmanagements' ));
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
