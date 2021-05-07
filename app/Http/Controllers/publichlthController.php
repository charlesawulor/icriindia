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



use App\clinicalpsy;
use App\whyclinicalpsy;
use App\deliverablesclinicalpsy;
use App\whyicriclinicalpsy;
use App\msceligibilityclinicalpsy;
use App\msccurriculumclinicalpsy;
use App\msccareerprospectclinicalpsy;
use App\msccampusclinicalpsy;

use App\bsceligibilityclinicalpsy;
use App\bsccurriculumclinicalpsy;
use App\bsccareerprospectclinicalpsy;
use App\bsccampusclinicalpsy;

use App\pgdeligibilityclinicalpsy;
use App\pgdcurriculumclinicalpsy;
use App\pgdcareerprospectclinicalpsy;
use App\pgdcampusclinicalpsy;

use App\phdeligibilityclinicalpsy;
use App\phdcurriculumclinicalpsy;
use App\phdcareerprospectclinicalpsy;
use App\phdcampusclinicalpsy;

use App\placementclinicalpsy;


use App\publichlth;
use App\whypublichlth;
use App\deliverablespublichlth;
use App\whyicripublichlth;





class publichlthController extends Controller
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



        $clinicalpsies = clinicalpsy::orderBy('image','asc')->get();
        $whyclinicalpsies = whyclinicalpsy::orderBy('why_clinicalpsy','asc')->get();
        $deliverablesclinicalpsies = deliverablesclinicalpsy::orderBy('deliverables','asc')->get();
        $whyicriclinicalpsies = whyicriclinicalpsy::orderBy('why_icri_clinicalpsy','asc')->get();
        $msceligibilityclinicalpsies = msceligibilityclinicalpsy::orderBy('eligibility','asc')->get();
        $msccurriculumclinicalpsies = msccurriculumclinicalpsy::orderBy('curriculum','asc')->get();
        $msccareerprospectclinicalpsies = msccareerprospectclinicalpsy::orderBy('career_prospect','asc')->get();
        $msccampusclinicalpsies = msccampusclinicalpsy::orderBy('image','asc')->get();

        $bsceligibilityclinicalpsies = bsceligibilityclinicalpsy::orderBy('eligibility','asc')->get();
        $bsccurriculumclinicalpsies = bsccurriculumclinicalpsy::orderBy('curriculum','asc')->get();
        $bsccareerprospectclinicalpsies = bsccareerprospectclinicalpsy::orderBy('career_prospect','asc')->get();
        $bsccampusclinicalpsies = bsccampusclinicalpsy::orderBy('image','asc')->get();

        $pgdeligibilityclinicalpsies = pgdeligibilityclinicalpsy::orderBy('eligibility','asc')->get();
        $pgdcurriculumclinicalpsies = pgdcurriculumclinicalpsy::orderBy('curriculum','asc')->get();
        $pgdcareerprospectclinicalpsies = pgdcareerprospectclinicalpsy::orderBy('career_prospect','asc')->get();
        $pgdcampusclinicalpsies = pgdcampusclinicalpsy::orderBy('image','asc')->get();

        $phdeligibilityclinicalpsies = phdeligibilityclinicalpsy::orderBy('eligibility','asc')->get();
        $phdcurriculumclinicalpsies = phdcurriculumclinicalpsy::orderBy('curriculum','asc')->get();
        $phdcareerprospectclinicalpsies = phdcareerprospectclinicalpsy::orderBy('career_prospect','asc')->get();
        $phdcampusclinicalpsies = phdcampusclinicalpsy::orderBy('image','asc')->get();
        $placementclinicalpsies = placementclinicalpsy::orderBy('image','asc')->get();





        $publichlths = publichlth::orderBy('image','asc')->get();
        $whypublichlths = whypublichlth::orderBy('why_public_health','asc')->get();
        $deliverablespublichlths = deliverablespublichlth::orderBy('deliverables','asc')->get();
        $whyicripublichlths = whyicripublichlth::orderBy('why_icri_public_health','asc')->get();



     
        return view('public-health',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners', 'clinicalpsies', 'whyclinicalpsies', 'deliverablesclinicalpsies', 'whyicriclinicalpsies', 'msceligibilityclinicalpsies', 'msccurriculumclinicalpsies', 'msccareerprospectclinicalpsies', 'msccampusclinicalpsies', 'bsceligibilityclinicalpsies', 'bsccurriculumclinicalpsies', 'bsccareerprospectclinicalpsies', 'bsccampusclinicalpsies', 'pgdeligibilityclinicalpsies', 'pgdcurriculumclinicalpsies', 'pgdcareerprospectclinicalpsies', 'pgdcampusclinicalpsies', 'phdeligibilityclinicalpsies', 'phdcurriculumclinicalpsies', 'phdcareerprospectclinicalpsies', 'phdcampusclinicalpsies', 'placementclinicalpsies', 'publichlths', 'whypublichlths', 'deliverablespublichlths', 'whyicripublichlths' ));
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
