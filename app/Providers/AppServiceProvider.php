<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


use App\logoicri;
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

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        
       View::share('campuses', campus::orderBy('id')->get());
       View::share('recruiters', recruiter::orderBy('id')->get());
       View::share('logoicris', logoicri::orderBy('id')->get());
       View::share('Admissions', Admission::orderBy('id')->get());
       View::share('legacies', legacy::orderBy('id')->get());
       View::share('topcourses', topcourse::orderBy('id')->get());
       View::share('addresses', address::orderBy('id')->get());
       View::share('usefullinks', usefullink::orderBy('id')->get());
       View::share('socialconnectfacebooks', socialconnectfacebook::orderBy('id')->get());
       View::share('socialconnectinstagrams', socialconnectinstagram::orderBy('id')->get());
       View::share('socialconnecttwitters', socialconnecttwitter::orderBy('id')->get());
       View::share('hiringpartners', hiringpartner::orderBy('id')->get());

    }
}
