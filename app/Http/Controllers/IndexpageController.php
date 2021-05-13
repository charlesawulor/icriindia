<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Research;
use App\Publication;
use App\whyicri;
use App\whyicricontent;
use App\researchcontent;
use App\application;
use App\Admission;
use App\admissioncourse;
use App\researchpic;
use App\event;
use App\subscriber;
use App\studenttestimonial;
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
use App\parenttestimonial;
use App\industryspeaktestimonial;
use App\clinicalresearch;

use App\innerpagecourse;
use App\innercampuscourse;



class indexpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      


        $admissions = Admission::orderBy('status','asc')->get();
        $publications = Publication::orderBy('id','asc')->get();     
        $researches = Research::orderBy('type','asc')->get();    
        $whyicris = whyicri::orderBy('value','asc')->get();     
        $whyicricontents = whyicricontent::orderBy('content','asc')->get();
        $applications = application::orderBy('content','asc')->get();
        $admissioncourses = admissioncourse::orderBy('course','asc')->get();
        $researchpics = researchpic::orderBy('image','asc')->get();
        $events = event::orderBy('image','asc')->get();    
        $studenttestimonials = studenttestimonial::orderBy('image','asc')->get();
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
        $parenttestimonials = parenttestimonial::orderBy('image','asc')->get();
        $industryspeaktestimonials = industryspeaktestimonial::orderBy('image','asc')->get();
        $clinicalresearches = clinicalresearch::orderBy('image','asc')->get();

        $innerpagecourses = innerpagecourse::orderBy('id','asc')->get();
        $innercampuscourses = innercampuscourse::orderBy('id','asc')->get();

        

        return view('indexpage',compact ( 'publications','admissions','researches', 'whyicris', 'whyicricontents', 'applications', 'admissioncourses', 'researchpics', 'events', 'studenttestimonials', 'lifeaticris', 'icrinetworks','awards', 'anantapurcampuses', 'bhopalcampuses', 'dehraduncampuses', 'jaipurcampuses', 'mumbaicampuses', 'mangalurucampuses', 'punecampuses', 'delhicampuses', 'parenttestimonials', 'industryspeaktestimonials', 'clinicalresearches', 'innerpagecourses','innercampuscourses'));

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
