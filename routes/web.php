<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('indexpage');
});




Route::resource('/','IndexpageController');

Route::resource('subscribers','IndexpageController');

Route::resource('clinical-research','clinicalresearchController');
Route::resource('aviation-management','aviationmanagementController');
Route::resource('logistics-management','logisticsmanagementController');
Route::resource('healthcare-hospital-management','healthcarehospitalmanagementController');
Route::resource('pharma-marketing-management','pharmamktmgtController');
Route::resource('marketing-automobile-management','mktautomgtController');
Route::resource('management-studies','managementstudiesController');
Route::resource('banking-wealth-management','bankingwealthmanagementController');
Route::resource('clinical-psychology','clinicalpsyController');
Route::resource('public-health','publichlthController');
Route::resource('architecture','architectureController');
Route::resource('ai-machine-learning','aimachinelearnController');


Route::resource('innerpagecourse','innerpagecourseController');
Route::resource('indexpage','innerpagecourseController');

Route::resource('innercampuscourse','innercampuscourseController');
Route::resource('indexpage','innercampuscourseController');




















