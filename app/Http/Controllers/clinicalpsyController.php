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


use App\bankwltmgt;
use App\whybankwltmgt;
use App\deliverablesbankwltmgt;
use App\whyicribankwltmgt;
use App\msceligibilitybankwltmgt;
use App\msccurriculumbankwltmgt;
use App\msccareerprospectbankwltmgt;
use App\msccampusbankwltmgt;
use App\bsceligibilitybankwltmgt;
use App\bsccurriculumbankwltmgt;
use App\bsccareerprospectbankwltmgt;
use App\bsccampusbankwltmgt;
use App\pgdeligibilitybankwltmgt;
use App\pgdcurriculumbankwltmgt;
use App\pgdcareerprospectbankwltmgt;
use App\pgdcampusbankwltmgt;
use App\phdeligibilitybankwltmgt;
use App\phdcurriculumbankwltmgt;
use App\phdcareerprospectbankwltmgt;
use App\phdcampusbankwltmgt;
use App\placementbankwltmgt;

use App\clinicalpsy;
use App\whyclinicalpsy;
use App\deliverablesclinicalpsy;
use App\whyicriclinicalpsy;
use App\msceligibilityclinicalpsy;




class clinicalpsyController extends Controller
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


        $bankwltmgts = bankwltmgt::orderBy('image','asc')->get();
        $whybankwltmgts = whybankwltmgt::orderBy('why_bankwealth','asc')->get();
        $deliverablesbankwltmgts = deliverablesbankwltmgt::orderBy('deliverables','asc')->get();
        $whyicribankwltmgts = whyicribankwltmgt::orderBy('why_icri_bankwealth','asc')->get();
        $msceligibilitybankwltmgts = msceligibilitybankwltmgt::orderBy('eligibility','asc')->get();
        $msccurriculumbankwltmgts = msccurriculumbankwltmgt::orderBy('curriculum','asc')->get();
        $msccareerprospectbankwltmgts = msccareerprospectbankwltmgt::orderBy('career_prospect','asc')->get();
        $msccampusbankwltmgts = msccampusbankwltmgt::orderBy('image','asc')->get();
        $bsceligibilitybankwltmgts = bsceligibilitybankwltmgt::orderBy('eligibility','asc')->get();
        $bsccurriculumbankwltmgts = bsccurriculumbankwltmgt::orderBy('curriculum','asc')->get();
        $bsccareerprospectbankwltmgts = bsccareerprospectbankwltmgt::orderBy('career_prospect','asc')->get();
        $bsccampusbankwltmgts = bsccampusbankwltmgt::orderBy('image','asc')->get();
        $pgdeligibilitybankwltmgts = pgdeligibilitybankwltmgt::orderBy('eligibility','asc')->get();
        $pgdcurriculumbankwltmgts = pgdcurriculumbankwltmgt::orderBy('curriculum','asc')->get();
        $pgdcareerprospectbankwltmgts = pgdcareerprospectbankwltmgt::orderBy('career_prospect','asc')->get();
        $pgdcampusbankwltmgts = pgdcampusbankwltmgt::orderBy('image','asc')->get();
        $phdeligibilitybankwltmgts = phdeligibilitybankwltmgt::orderBy('eligibility','asc')->get();
        $phdcurriculumbankwltmgts = phdcurriculumbankwltmgt::orderBy('curriculum','asc')->get();
        $phdcareerprospectbankwltmgts = phdcareerprospectbankwltmgt::orderBy('career_prospect','asc')->get();
        $phdcampusbankwltmgts = phdcampusbankwltmgt::orderBy('image','asc')->get();
        $placementbankwltmgts = placementbankwltmgt::orderBy('image','asc')->get();





        $clinicalpsies = clinicalpsy::orderBy('image','asc')->get();
        $whyclinicalpsies = whyclinicalpsy::orderBy('why_clinicalpsy','asc')->get();
        $deliverablesclinicalpsies = deliverablesclinicalpsy::orderBy('deliverables','asc')->get();
        $whyicriclinicalpsies = whyicriclinicalpsy::orderBy('why_icri_clinicalpsy','asc')->get();
        $msceligibilityclinicalpsies = msceligibilityclinicalpsy::orderBy('eligibility','asc')->get();


     
        return view('clinical-psychology',compact ('admissions', 'legacies',  'campuses','recruiters', 'topcourses', 'addresses', 'usefullinks','socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters','hiringpartners', 'bankwltmgts', 'whybankwltmgts', 'deliverablesbankwltmgts', 'whyicribankwltmgts', 'msceligibilitybankwltmgts', 'msccurriculumbankwltmgts', 'msccareerprospectbankwltmgts','msccampusbankwltmgts', 'bsceligibilitybankwltmgts', 'bsccurriculumbankwltmgts', 'bsccareerprospectbankwltmgts', 'bsccampusbankwltmgts', 'pgdeligibilitybankwltmgts', 'pgdcurriculumbankwltmgts', 'pgdcareerprospectbankwltmgts', 'pgdcampusbankwltmgts', 'phdeligibilitybankwltmgts', 'phdcurriculumbankwltmgts', 'phdcareerprospectbankwltmgts', 'phdcampusbankwltmgts', 'placementbankwltmgts', 'clinicalpsies', 'whyclinicalpsies', 'deliverablesclinicalpsies', 'whyicriclinicalpsies', 'msceligibilityclinicalpsies' ));
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
