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




