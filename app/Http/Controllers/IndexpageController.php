<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

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



class IndexpageController extends Controller
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



        return view('indexpage',compact ('publications','admissions', 'researches', 'legacies', 'whyicris', 'campuses', 'whyicricontents', 'applications', 'admissioncourses', 'researchpics', 'events', 'recruiters', 'topcourses', 'addresses', 'studenttestimonials', 'usefullinks', 'lifeaticris', 'icrinetworks','awards', 'anantapurcampuses', 'bhopalcampuses', 'dehraduncampuses', 'jaipurcampuses', 'mumbaicampuses', 'mangalurucampuses', 'punecampuses', 'delhicampuses', 'socialconnectfacebooks', 'socialconnectinstagrams', 'socialconnecttwitters', 'parenttestimonials', 'industryspeaktestimonials', 'hiringpartners' ));




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
        $this->validate($request,[
            'email' => 'required|unique:subscribers,email'
            
            ]);
      
            $subscribers = new subscriber;
            $subscribers->email = $request->input('email');
            $subscribers->save();
             return redirect('/')->with('success', 'You have successfully subscribed to our newsletter.');
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
