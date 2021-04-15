<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('users', UserController::class);
     

    $router->resource('admission', AdmissionController::class);

    $router->resource('research', ResearchController::class);

    $router->resource('publications', PublicationController::class);

    $router->resource('legacies', LegacyController::class);

    $router->resource('whyicris', whyicriController::class);

    $router->resource('campuses', CampusController::class);

    $router->resource('whyicricontents', WhyicricontentController::class);

    $router->resource('researchcontents', ResearchcontentController::class);

    $router->resource('applications', ApplicationController::class); 

    $router->resource('admissioncourses', AdmissioncourseController::class);

    $router->resource('researchpics', ResearchpicController::class);

    $router->resource('events', EventController::class);

    $router->resource('recruiters', RecruiterController::class); 

    $router->resource('topcourses', TopcourseController::class);

    $router->resource('addresses', AddressController::class);

    $router->resource('subscribers', SubscriberController::class);
    
    $router->resource('studenttestimonials', StudenttestimonialController::class);

    $router->resource('usefullinks', UsefullinksController::class);

    $router->resource('lifeaticris', LifeaticrisController::class);

    $router->resource('icrinetworks', IcrinetworkController::class);

    $router->resource('awards', AwardController::class);

    $router->resource('anantapurcampuses', AnantapurcampusesController::class);

    $router->resource('bhopalcampuses', BhopalcampusesController::class);

    $router->resource('dehraduncampuses', DehraduncampusesController::class);

    $router->resource('jaipurcampuses', JaipurcampusController::class);
  
});
