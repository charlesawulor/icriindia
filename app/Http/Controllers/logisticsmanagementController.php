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
use App\bsccareerprospectclinicalresearch;
use App\bsccampusclinicalresearch;
use App\pgdeligibilityclinicalresearch;
use App\pgdcurriculumclinicalresearch;
use App\pgdcareerprospectclinicalresearch;
use App\pgdcampusclinicalresearch;
use App\phdeligibilityclinicalresearch;
use App\phdcurriculumclinicalresearch;
use App\phdcareerprospectclinicalresearch;
use App\phdcampusclinicalresearch;
use App\placementclinicalresearch;
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










class logisticsmanagementController extends Controller
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
            
        $bsccareerprospectclinicalresearches = bsccareerprospectclinicalresearch::orderBy('career_prospect','asc')->get();
        $bsccampusclinicalresearches = bsccampusclinicalresearch::orderBy('image','asc')->get();



        $pgdeligibilityclinicalresearches = pgdeligibilityclinicalresearch::orderBy('eligibility','asc')->get();
        $pgdcurriculumclinicalresearches = pgdcurriculumclinicalresearch::orderBy('curriculum','asc')->get();
        $pgdcareerprospectclinicalresearches = pgdcareerprospectclinicalresearch::orderBy('career_prospect','asc')->get();
        $pgdcampusclinicalresearches = pgdcampusclinicalresearch::orderBy('image','asc')->get();


        $phdeligibilityclinicalresearches = phdeligibilityclinicalresearch::orderBy('eligibility','asc')->get();
        $phdcurriculumclinicalresearches = phdcurriculumclinicalresearch::orderBy('curriculum','asc')->get();
        $phdcareerprospectclinicalresearches = phdcareerprospectclinicalresearch::orderBy('career_prospect','asc')->get();
        $phdcampusclinicalresearches = phdcampusclinicalresearch::orderBy('image','asc')->get();

        $placementclinicalresearches = placementclinicalresearch::orderBy('image','asc')->get();

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




        

        return view('logistics-management',compact ('publications','admissions', 'researches', 'legacies', 'whyicris', 'campuses', 'whyicricontents', 'applications', 'admissioncourses', 'researchpics', 'events', 'recruiters', 'topcourses', 'addresses', 'studenttestimonials', 'usefullinks', 'lifeaticris', 'icrinetworks','awards', 'anantapurcampuses', 'bhopalcampuses', 'dehraduncampuses', 'jaipurcampuses', 'mumbaicampuses', 'mangalurucampuses', 'punecampuses', 'delhicampuses', 'socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters', 'parenttestimonials', 'industryspeaktestimonials', 'hiringpartners', 'clinicalresearches','whyclinicalresearches','deliverablesclinicalresearches', 'whyicriclinicalresearches', 'msceligibilityclinicalresearches','msccurriculumclinicalresearches', 'msccareerprospectclinicalresearches', 'msccampusclinicalresearches', 'bsceligibilityclinicalresearches', 'bsccurriculumclinicalresearches', 'bsccareerprospectclinicalresearches', 'bsccampusclinicalresearches', 'pgdeligibilityclinicalresearches', 'pgdcurriculumclinicalresearches', 'pgdcareerprospectclinicalresearches', 'pgdcampusclinicalresearches', 'phdeligibilityclinicalresearches', 'phdcurriculumclinicalresearches', 'phdcareerprospectclinicalresearches', 'phdcampusclinicalresearches', 'placementclinicalresearches', 'aviationmanagements','whyaviationmanagements', 'deliverablesaviationmanagements', 'whyicriaviationmanagements', 'msceligibilityaviationmanagements', 'msccurriculumaviationmanagements', 'msccareerprospectaviationmanagements', 'msccampusaviationmanagements', 'bsceligibilityaviationmanagements', 'bsccurriculumaviationmanagements', 'bsccareerprospectaviationmanagements', 'bsccampusaviationmanagements' , 'pgdeligibilityaviationmanagements', 'pgdcurriculumaviationmanagements', 'pgdcareerprospectaviationmanagements', 'pgdcampusaviationmanagements', 'phdeligibilityaviationmanagements', 'phdcurriculumaviationmanagements', 'phdcareerprospectaviationmanagements', 'phdcampusaviationmanagements', 'placementaviationmanagements', 'logisticsmanagements', 'whylogisticsmanagements', 'deliverableslogisticsmanagements', 'whyicrilogisticsmanagements', 'msceligibilitylogisticsmanagements', 'msccurriculumlogisticsmanagements', 'msccareerprospectlogisticsmanagements', 'msccampuslogisticsmanagements', 'bsceligibilitylogisticsmanagements', 'bsccurriculumlogisticsmanagements', 'bsccareerprospectlogisticsmanagements', 'bsccampuslogisticsmanagements', 'pgdeligibilitylogisticsmanagements', 'pgdcurriculumlogisticsmanagements', 'pgdcareerprospectlogisticsmanagements', 'pgdcampuslogisticsmanagements', 'phdeligibilitylogisticsmanagements' ));
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
