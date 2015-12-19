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


Route::get('admin-register', 'reg\RegistrationController@register');
Route::post('reg', 'reg\RegistrationController@postRegister');
Route::get('admin-login', 'login\LoginController@login');
Route::post('/login', 'login\LoginController@postLogin');
Route::get('/logout', 'login\LoginController@logout');

Route::controllers([
    'password' => 'Auth\PasswordController',
]);


Route::get('/hierarchy', 'ChartController@index');

Route::get('/member', 'MemberController@index');

Route::get('/announces', 'AnnounceController@index');
Route::get('/announces/add', 'AnnounceController@create');
Route::post('/announces', 'AnnounceController@store');
Route::get('/announces/show/{year}', 'AnnounceController@getAnnounceByYear');


//progress
Route::post('/progress', 'ProgressController@store');
Route::get('/progress/add', ['uses' => 'ProgressController@create', 'middleware' => 'auth']);



//plans
Route::get('/plan', 'PlanController@index');
Route::get('/plans/add', 'PlanController@create');
Route::post('/plans', 'PlanController@store');

//responsibility
Route::get('/responsibility/add', 'ResponsibilityController@create');
Route::post('/responsibility', 'ResponsibilityController@store');

Route::get('/commands/add', 'CommandController@create');
Route::post('/commands', 'CommandController@store');


//board command
Route::get('/board-command/add', 'BoardCommandController@create');
Route::post('/board-command', 'BoardCommandController@store');


//Risk Report Controller
Route::get('/riskreport/authorize', 'RiskReportController@authorizeUser');
Route::post('/riskreport/checkpassword', 'RiskReportController@checkAuthorizeUser');


Route::get('/riskreports', 'RiskReportController@index');

Route::get('/risk-plan', 'RiskplanController@index');
Route::get('/risk-plan/add', 'RiskplanController@create');
Route::post('/risk-plan', 'RiskplanController@store');

Route::get('/risk-progress', 'RiskprogressController@index');
Route::get('/risk-progress/add', 'RiskprogressController@create');
Route::post('/risk-progress', 'RiskprogressController@store');

Route::get('/risk-management', 'ManageriskController@index');
Route::get('/risk-management/add', 'ManageriskController@create');
Route::post('/risk-management', 'ManageriskController@store');


Route::get('/control-report', 'ControlController@index');
Route::get('/control-report/add', 'ControlController@create');
Route::post('/control-report', 'ControlController@store');



Route::get('/meetingReport', 'MeetingreportController@index');

Route::get('/result', 'ProgressController@index');


//Performance Agreement
Route::get('/performance-agreement', 'PaController@index');
Route::get('/performances/add', ['uses' => 'PaController@create', 'middleware' => 'auth']);
Route::post('/performances', 'PaController@store');


Route::get('/track_pa', 'TrackController@index');

Route::get('/csr_activity', 'CsrController@index');

Route::get('/track-performance/add', 'TrackController@create');

Route::post('/track-performance/add', 'TrackController@store');

Route::get('/oprReport', 'OprController@index');


//sfu report
Route::get('/sfuReport', 'SfuController@index');
Route::get('/sfu/meeting-report/add', 'SfuController@create');
Route::post('/sfu/meeting-report', 'SfuController@store');
//Route::get('/progressreport', 'ProgressController@index');

Route::get('/member/add', 'MemberController@create');

Route::get('/product', 'ProductController@index');


//Admin
Route::get('/admin/management', ['uses' => 'AdminManageController@index', 'middleware' => 'auth']);


Route::get('/sidebar', 'SidebarController@index');
Route::get('/sidebar', 'SidebarController@index');