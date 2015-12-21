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
Route::get('/announces/add', ['uses' => 'AnnounceController@create', 'middleware' => 'auth']);
Route::post('/announces', 'AnnounceController@store');
Route::get('/announces/show/{year}', 'AnnounceController@getAnnounceByYear');


//progress
Route::post('/progress', 'ProgressController@store');
Route::get('/progress/add', ['uses' => 'ProgressController@create', 'middleware' => 'auth']);


//plans
Route::get('/plan', 'PlanController@index');
Route::get('/plans/add', ['uses' => 'PlanController@create', 'middleware' => 'auth']);
Route::post('/plans', 'PlanController@store');

//responsibility
Route::get('/responsibility/add',  ['uses' => 'ResponsibilityController@create', 'middleware' => 'auth']);
Route::post('/responsibility', 'ResponsibilityController@store');

//command
Route::get('/commands/add', ['uses' => 'CommandController@create', 'middleware' => 'auth']);
Route::post('/commands', 'CommandController@store');


//board command
Route::get('/board-command/add', ['uses' => 'BoardCommandController@create', 'middleware' => 'auth']);
Route::post('/board-command', 'BoardCommandController@store');


//Risk Report Controller
Route::get('/riskreport/authorize', 'RiskReportController@authorizeUser');
Route::post('/riskreport/checkpassword', 'RiskReportController@checkAuthorizeUser');
Route::get('/riskreports', 'RiskReportController@index');

//risk plan
Route::get('/risk-plan', 'RiskplanController@index');
Route::get('/risk-plan/add', ['uses' => 'RiskplanController@create', 'middleware' => 'auth']);
Route::post('/risk-plan', 'RiskplanController@store');

//risk progress
Route::get('/risk-progress', 'RiskprogressController@index');
Route::get('/risk-progress/add', ['uses' => 'RiskprogressController@create', 'middleware' => 'auth']);
Route::post('/risk-progress', 'RiskprogressController@store');

//risk management
Route::get('/risk-management', 'ManageriskController@index');
Route::get('/risk-management/add', ['uses' => 'ManageriskController@create', 'middleware' => 'auth']);
Route::post('/risk-management', 'ManageriskController@store');

//Control report
Route::get('/control-report', 'ControlController@index');
Route::get('/control-report/add', ['uses' => 'ControlController@create', 'middleware' => 'auth']);
Route::post('/control-report', 'ControlController@store');

//meeting report
Route::get('/meetingReport', 'MeetingreportController@index');
Route::get('/meetingReport/add', ['uses' => 'MeetingreportController@create', 'middleware' => 'auth']);
Route::post('/meetingReport', 'MeetingreportController@store');

//result
Route::get('/result', 'ProgressController@index');


//Performance Agreement
Route::get('/performance-agreement', 'PaController@index');
Route::get('/performances/add', ['uses' => 'PaController@create', 'middleware' => 'auth']);
Route::post('/performances', 'PaController@store');


Route::get('/track_pa', 'TrackController@index');

Route::get('/csr-activity', 'CsrController@index');
Route::get('/csr-activity/add', ['uses' => 'CsrController@create', 'middleware' => 'auth']);
Route::post('/csr-activity', 'CsrController@store');

Route::get('/track-performance/add', ['uses' => 'TrackController@create', 'middleware' => 'auth']);
Route::post('/track-performance', 'TrackController@store');

Route::get('/oprReport', 'OprController@index');
Route::get('/oprReport/add', ['uses' => 'OprController@create', 'middleware' => 'auth']);
Route::post('/oprReport', 'OprController@store');


//sfu report
Route::get('/sfu-report', 'SfuController@index');
Route::get('/sfu-report/add', ['uses' => 'SfuController@create', 'middleware' => 'auth']);
Route::post('/sfu-report', 'SfuController@store');

Route::get('/member/add', 'MemberController@create');


//Admin
Route::get('/admin/management', ['uses' => 'AdminManageController@index', 'middleware' => 'auth']);


Route::get('/sidebar', 'SidebarController@index');
Route::get('/sidebar', 'SidebarController@index');