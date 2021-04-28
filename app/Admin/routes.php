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

    $router->resource('mumbaicampuses', MumbaicampusController::class);

    $router->resource('mangalurucampuses', MangalurucampusController::class);

    $router->resource('punecampuses', PunecampusController::class);

    $router->resource('delhicampuses', DelhicampusController::class);

    $router->resource('socialconnectfacebooks', SocialconnectfacebookController::class);

    $router->resource('socialconnectinstagrams', SocialconnectinstagramController::class);

    $router->resource('socialconnecttwitters', SocialconnecttwitterController::class);

    $router->resource('parenttestimonials', ParenttestimonialController::class);

    $router->resource('industryspeaktestimonials', IndustryspeaktestimonialController::class);

    $router->resource('hiringpartners', HiringpartnerController::class);

    $router->resource('clinicalresearches', clinicalresearchController::class);

    $router->resource('whyclinicalresearches', whyclinicalresearchController::class);

    $router->resource('deliverablesclinicalresearches', deliverablesclinicalresearchController::class);

    $router->resource('whyicriclinicalresearches', whyicriclinicalresearchController::class);

    $router->resource('msceligibilityclinicalresearches', msceligibilityclinicalresearchController::class);
  
    $router->resource('msccurriculumclinicalresearches', msccurriculumclinicalresearchController::class);
     
    $router->resource('msccareerprospectclinical', msccareerprospectclinicalresearchController::class);

    $router->resource('msccampusclinicalresearches', msccampusclinicalresearchController::class);

    $router->resource('bsceligibilityclinicalresearches', bsceligibilityclinicalresearchController::class);

    $router->resource('bsccurriculumclinicalresearches', bsccurriculumclinicalresearchController::class);

    $router->resource('bsccareerprospectclinical', bsccareerprospectclinicalresearchController::class);

    $router->resource('bsccampusclinicalresearches', bsccampusclinicalresearchController::class);

    $router->resource('pgdeligibilityclinicalresearches', pgdeligibilityclinicalresearchController::class);

    $router->resource('pgdcurriculumclinicalresearches', pgdcurriculumclinicalresearchController::class);

    $router->resource('pgdcareerprospectclinical', pgdcareerprospectclinicalresearchController::class);

    $router->resource('pgdcampusclinicalresearches', pgdcampusclinicalresearchController::class);

    $router->resource('phdeligibilityclinicalresearches', phdeligibilityclinicalresearchController::class);

    $router->resource('phdcurriculumclinicalresearches', phdcurriculumclinicalresearchController::class);

    $router->resource('phdcareerprospectclinical', phdcareerprospectclinicalresearchController::class);

    $router->resource('phdcampusclinicalresearches', phdcampusclinicalresearchController::class);

    $router->resource('placementclinicalresearches', placementclinicalresearchController::class);

    $router->resource('aviationmanagements', aviationmanagementController::class);

    $router->resource('whyaviationmanagements', whyaviationmanagementController::class);

    $router->resource('deliverablesaviationmanagements', deliverablesaviationmanagementController::class);

    $router->resource('whyicriaviationmanagements', whyicriaviationmanagementController::class);

    $router->resource('msceligibilityaviationmanagements', msceligibilityaviationmanagementController::class);

    $router->resource('msccurriculumaviationmanagements', msccurriculumaviationmanagementController::class);

    $router->resource('msccareerprospectaviation', msccareerprospectaviationmanagementaviationmanagementController::class); 

    $router->resource('msccampusaviationmanagements', msccampusaviationmanagementController::class);

    $router->resource('bsceligibilityaviationmanagements', bsceligibilityaviationmanagementController::class);

    $router->resource('bsccurriculumaviationmanagements', bsccurriculumaviationmanagementController::class);

    $router->resource('bsccareerprospectaviation', bsccareerprospectaviationmanagementController::class);
    $router->resource('bsccampusaviationmanagements', bsccampusaviationmanagementController::class);

    $router->resource('pgdeligibilityaviationmanagements', pgdeligibilityaviationmanagementController::class);

    $router->resource('pgdcurriculumaviationmanagements', pgdcurriculumaviationmanagementController::class);

    $router->resource('pgdcareerprospectaviation', phdcareerprospectaviationmanagementController::class);

    $router->resource('pgdcampusaviationmanagements', pgdcampusaviationmanagementController::class);

    $router->resource('phdeligibilityaviationmanagements', phdeligibilityaviationmanagementController::class);

    $router->resource('phdcurriculumaviationmanagements', phdcurriculumaviationmanagementController::class);

    $router->resource('phdcareerprospectaviation', phdcareerprospectaviationmanagementController::class);

    $router->resource('phdcampusaviationmanagements', phdcampusaviationmanagementController::class);

    $router->resource('placementaviationmanagements', placementaviationmanagementController::class);

    $router->resource('logisticsmanagements', logisticsmanagementController::class);

    $router->resource('whylogisticsmanagements', whylogisticsmanagementController::class);

    $router->resource('deliverableslogisticsmanagements', deliverableslogisticsmanagementController::class);

    $router->resource('whyicrilogisticsmanagements', whyicrilogisticsmanagementController::class);

    $router->resource('msceligibilitylogistics', msceligibilitylogisticsmanagementController::class);

    $router->resource('msccurriculumlogisticsmanagements', msccurriculumlogisticsmanagementController::class);

    $router->resource('msccareerprospectlogistics', msccareerprospectlogisticsmanagementController::class);

    $router->resource('msccampuslogisticsmanagements', msccampuslogisticsmanagementController::class);

    $router->resource('bsceligibilitylogistics', bsceligibilitylogisticsmanagementController::class);

    $router->resource('bsccurriculumlogisticsmanagements', bsccurriculumlogisticsmanagementController::class);

    $router->resource('bsccareerprospectlogistics', bsccareerprospectlogisticsmanagementController::class);
    
    $router->resource('bsccampuslogisticsmanagements', bsccampuslogisticsmanagementController::class);

    
    




});
