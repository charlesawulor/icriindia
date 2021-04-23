<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admission;
use App\Research;
use App\Publication;
use App\legacy;
use App\whyicri;
use App\campus;
use App\whyicricontent;
use App\researchcontent;
use App\application;
use App\admissioncourse;
use App\researchpic;
use App\event;
use App\recruiter;
use App\topcourse;
use App\address;
use App\subscriber;
use App\studenttestimonial;
use App\usefullink;
use App\lifeaticri;
use App\icrinetwork;
use App\award;
use App\anantapurcampus;
use App\bhopalcampus;
use App\dehraduncampus;
use App\jaipurcampus;
use App\mumbaicampus;
use App\mangalurucampus;
use App\punecampus;
use App\delhicampus;
use App\socialconnectfacebook;
use App\socialconnectinstagram;
use App\socialconnecttwitter;
use App\parenttestimonial;
use App\industryspeaktestimonial;
use App\hiringpartner;
use App\clinicalresearch;
use App\whyclinicalresearch;
use App\deliverablesclinicalresearch;
use App\whyicriclinicalresearch;
use App\msceligibilityclinicalresearch;
use App\msccurriculumclinicalresearch;
use App\msccareerprospectclinicalresearch;
use App\msccampusclinicalresearch;
use App\bsceligibilityclinicalresearch;
use App\bsccurriculumclinicalresearch;




class clinicalresearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::orderBy('id','asc')->get();
        $admissions = Admission::orderBy('status','asc')->get();
        $researches = Research::orderBy('type','asc')->get();
        $legacies = legacy::orderBy('volume','asc')->get();
        $whyicris = whyicri::orderBy('value','asc')->get();
        $campuses = campus::orderBy('cities','asc')->get();
        $whyicricontents = whyicricontent::orderBy('content','asc')->get();
        $applications = application::orderBy('content','asc')->get();
        $admissioncourses = admissioncourse::orderBy('course','asc')->get();
        $researchpics = researchpic::orderBy('image','asc')->get();
        $events = event::orderBy('image','asc')->get();
        $recruiters = recruiter::orderBy('image','asc')->get();
        $topcourses = topcourse::orderBy('degree','asc')->get();
        $addresses = address::orderBy('location','asc')->get();
        $studenttestimonials = studenttestimonial::orderBy('image','asc')->get();
        $usefullinks = usefullink::orderBy('title','asc')->get();
        $lifeaticris = lifeaticri::orderBy('title','asc')->get();
        $icrinetworks = icrinetwork::orderBy('title','asc')->get();
        $awards = award::orderBy('title','asc')->get();
        $anantapurcampuses = anantapurcampus::orderBy('title','asc')->get();
        $bhopalcampuses = bhopalcampus::orderBy('title','asc')->get();
        $dehraduncampuses = dehraduncampus::orderBy('title','asc')->get();
        $jaipurcampuses = jaipurcampus::orderBy('title','asc')->get();
        $mumbaicampuses = mumbaicampus::orderBy('title','asc')->get();
        $mangalurucampuses = mangalurucampus::orderBy('title','asc')->get();
        $punecampuses = punecampus::orderBy('title','asc')->get();
        $delhicampuses = delhicampus::orderBy('title','asc')->get();
        $socialconnectfacebooks = socialconnectfacebook::orderBy('link','asc')->get();
        $socialconnectinstagrams = socialconnectinstagram::orderBy('link','asc')->get();
        $socialconnecttwitters = socialconnecttwitter::orderBy('link','asc')->get();
        $parenttestimonials = parenttestimonial::orderBy('image','asc')->get();
        $industryspeaktestimonials = industryspeaktestimonial::orderBy('image','asc')->get();
        $hiringpartners = hiringpartner::orderBy('image','asc')->get();
        $clinicalresearches = clinicalresearch::orderBy('image','asc')->get();
        $whyclinicalresearches = whyclinicalresearch::orderBy('why_clinical','asc')->get();
        $deliverablesclinicalresearches = deliverablesclinicalresearch::orderBy('deliverables','asc')->get();
        $whyicriclinicalresearches = whyicriclinicalresearch::orderBy('why_icri_clinical','asc')->get();
        $msceligibilityclinicalresearches = msceligibilityclinicalresearch::orderBy('eligibility','asc')->get();
        $msccurriculumclinicalresearches = msccurriculumclinicalresearch::orderBy('curriculum','asc')->get();
        $msccareerprospectclinicalresearches = msccareerprospectclinicalresearch::orderBy('career_prospect','asc')->get();
        $msccampusclinicalresearches = msccampusclinicalresearch::orderBy('image','asc')->get();

        $bsceligibilityclinicalresearches = bsceligibilityclinicalresearch::orderBy('eligibility','asc')->get();

        $bsccurriculumclinicalresearches = bsccurriculumclinicalresearch::orderBy('curriculum','asc')->get();
        




        return view('clinical-research',compact ('publications','admissions', 'researches', 'legacies', 'whyicris', 'campuses', 'whyicricontents', 'applications', 'admissioncourses', 'researchpics', 'events', 'recruiters', 'topcourses', 'addresses', 'studenttestimonials', 'usefullinks', 'lifeaticris', 'icrinetworks','awards', 'anantapurcampuses', 'bhopalcampuses', 'dehraduncampuses', 'jaipurcampuses', 'mumbaicampuses', 'mangalurucampuses', 'punecampuses', 'delhicampuses', 'socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters', 'parenttestimonials', 'industryspeaktestimonials', 'hiringpartners', 'clinicalresearches','whyclinicalresearches','deliverablesclinicalresearches', 'whyicriclinicalresearches', 'msceligibilityclinicalresearches','msccurriculumclinicalresearches', 'msccareerprospectclinicalresearches', 'msccampusclinicalresearches', 'bsceligibilityclinicalresearches', 'bsccurriculumclinicalresearches' ));
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
