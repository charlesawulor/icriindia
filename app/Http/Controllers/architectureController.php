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



use App\publichlth;
use App\whypublichlth;
use App\deliverablespublichlth;
use App\whyicripublichlth;
use App\msceligibilitypublichlth;
use App\msccurriculumpublichlth;
use App\msccareerprospectpublichlth;
use App\msccampuspublichlth;
use App\bsceligibilitypublichlth;
use App\bsccurriculumpublichlth;
use App\bsccareerprospectpublichlth;
use App\bsccampuspublichlth;
use App\pgdeligibilitypublichlth;
use App\pgdcurriculumpublichlth;
use App\pgdcareerprospectpublichlth;
use App\pgdcampuspublichlth;
use App\phdeligibilitypublichlth;
use App\phdcurriculumpublichlth;
use App\phdcareerprospectpublichlth;
use App\phdcampuspublichlth;
use App\placementpublichlth;


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



class architectureController extends Controller
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


        $publichlths = publichlth::orderBy('image','asc')->get();
        $whypublichlths = whypublichlth::orderBy('why_public_health','asc')->get();
        $deliverablespublichlths = deliverablespublichlth::orderBy('deliverables','asc')->get();
        $whyicripublichlths = whyicripublichlth::orderBy('why_icri_public_health','asc')->get();
        $msceligibilitypublichlths = msceligibilitypublichlth::orderBy('eligibility','asc')->get();
        $msccurriculumpublichlths = msccurriculumpublichlth::orderBy('curriculum','asc')->get();
        $msccareerprospectpublichlths = msccareerprospectpublichlth::orderBy('career_prospect','asc')->get();
        $msccampuspublichlths = msccampuspublichlth::orderBy('image','asc')->get();
        $bsceligibilitypublichlths = bsceligibilitypublichlth::orderBy('eligibility','asc')->get();
        $bsccurriculumpublichlths = bsccurriculumpublichlth::orderBy('curriculum','asc')->get();
        $bsccareerprospectpublichlths = bsccareerprospectpublichlth::orderBy('career_prospect','asc')->get();
        $bsccampuspublichlths = bsccampuspublichlth::orderBy('image','asc')->get();

        $pgdeligibilitypublichlths = pgdeligibilitypublichlth::orderBy('eligibility','asc')->get();
        $pgdcurriculumpublichlths = pgdcurriculumpublichlth::orderBy('curriculum','asc')->get();
        $pgdcareerprospectpublichlths = pgdcareerprospectpublichlth::orderBy('career_prospect','asc')->get();
        $pgdcampuspublichlths = pgdcampuspublichlth::orderBy('image','asc')->get();

        $phdeligibilitypublichlths = phdeligibilitypublichlth::orderBy('eligibility','asc')->get();
        $phdcurriculumpublichlths = phdcurriculumpublichlth::orderBy('curriculum','asc')->get();
        $phdcareerprospectpublichlths = phdcareerprospectpublichlth::orderBy('career_prospect','asc')->get();
        $phdcampuspublichlths = phdcampuspublichlth::orderBy('image','asc')->get();
        $placementpublichlths = placementpublichlth::orderBy('image','asc')->get();



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


     
        return view('architecture',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners', 'clinicalpsies', 'whyclinicalpsies', 'deliverablesclinicalpsies', 'whyicriclinicalpsies', 'msceligibilityclinicalpsies', 'msccurriculumclinicalpsies', 'msccareerprospectclinicalpsies', 'msccampusclinicalpsies', 'bsceligibilityclinicalpsies', 'bsccurriculumclinicalpsies', 'bsccareerprospectclinicalpsies', 'bsccampusclinicalpsies', 'pgdeligibilityclinicalpsies', 'pgdcurriculumclinicalpsies', 'pgdcareerprospectclinicalpsies', 'pgdcampusclinicalpsies', 'phdeligibilityclinicalpsies', 'phdcurriculumclinicalpsies', 'phdcareerprospectclinicalpsies', 'phdcampusclinicalpsies', 'placementclinicalpsies', 'publichlths', 'whypublichlths', 'deliverablespublichlths', 'whyicripublichlths', 'msceligibilitypublichlths', 'msccurriculumpublichlths', 'msccareerprospectpublichlths', 'msccampuspublichlths', 'bsceligibilitypublichlths', 'bsccurriculumpublichlths', 'bsccareerprospectpublichlths','bsccampuspublichlths', 'pgdeligibilitypublichlths', 'pgdcurriculumpublichlths', 'pgdcareerprospectpublichlths', 'pgdcampuspublichlths', 'phdeligibilitypublichlths', 'phdcurriculumpublichlths', 'phdcareerprospectpublichlths', 'phdcampuspublichlths', 'placementpublichlths', 'architectures', 'whyarchitectures', 'deliverablesarchitectures', 'whyicriarchitectures', 'msceligibilityarchitectures','msccurriculumarchitectures', 'msccareerprospectarchitectures', 'msccampusarchitectures', 'bsceligibilityarchitectures', 'bsccurriculumarchitectures', 'bsccareerprospectarchitectures', 'bsccampusarchitectures'));
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
