<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//App::abort(404);
//
//App::missing(function($exception)
//{
//    return Response::view('errors.404', array(), 404);
//});


Route::get('/', function(){
    return view('home.homepage');
});

Route::get('/hierarchy', 'ChartController@index');

Route::get('/member', 'MemberController@index');

Route::get('/announces', 'AnnounceController@index');
Route::get('/announces/add', 'AnnounceController@create');
Route::post('/announces', 'AnnounceController@store');
Route::get('/announces/show/{year}', 'AnnounceController@getAnnounceByYear');

//progress
Route::get('/progress/add', 'ProgressController@create');



//responsibility
Route::get('/responsibility/add', 'ResponsibilityController@create');
Route::post('/responsibility', 'ResponsibilityController@store');

Route::get('/commands/add', 'CommandController@create');
Route::post('/commands', 'CommandController@store');


//Risk Report Controller
Route::get('/riskreport/authorize', 'RiskReportController@authorizeUser');
Route::post('/riskreport/checkpassword', 'RiskReportController@checkAuthorizeUser');


Route::get('/riskreports', 'RiskReportController@index');

Route::get('/riskPlan', 'RiskplanController@index');

Route::get('/riskProgress', 'RiskprogressController@index');

Route::get('/control', 'ControlController@index');

Route::get('/meetingReport', 'MeetingreportController@index');

Route::get('/result', 'ResultController@index');

Route::get('/pa', 'PaController@index');
Route::get('/performances/add', 'PaController@create');
Route::post('/performances', 'PaController@store');


Route::get('/track_pa', 'TrackController@index');

Route::get('/csr_activity', 'CsrController@index');

Route::get('/manageRisk', 'ManageriskController@index');

Route::get('/oprReport', 'OprController@index');

Route::get('/sfuReport', 'SfuController@index');

//Route::get('/progressreport', 'ProgressController@index');

Route::get('/member/add', 'MemberController@create');

Route::get('/product', 'ProductController@index');


//Admin

Route::get('/signin', 'SigninController@index');


Route::get('/sidebar', 'SidebarController@index');


Route::get('/admin/management', 'AdminManageController@index');