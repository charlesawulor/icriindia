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




class clinicalresearchController extends Controller
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






        

        return view('clinical-research',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners','clinicalresearches','whyclinicalresearches','deliverablesclinicalresearches', 'whyicriclinicalresearches', 'msceligibilityclinicalresearches','msccurriculumclinicalresearches', 'msccareerprospectclinicalresearches', 'msccampusclinicalresearches', 'bsceligibilityclinicalresearches', 'bsccurriculumclinicalresearches', 'bsccareerprospectclinicalresearches', 'bsccampusclinicalresearches', 'pgdeligibilityclinicalresearches', 'pgdcurriculumclinicalresearches', 'pgdcareerprospectclinicalresearches', 'pgdcampusclinicalresearches', 'phdeligibilityclinicalresearches', 'phdcurriculumclinicalresearches', 'phdcareerprospectclinicalresearches', 'phdcampusclinicalresearches', 'placementclinicalresearches' ));
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
