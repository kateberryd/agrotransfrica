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
    return view('welcome');
})->name('home_page');
Route::get('/about', function () {
    return view('about');
})->name('about_us');


Route::get('login', 'AuthController@getLogin')->name('login');
Route::post('login', 'AuthController@postLogin')->name('do_login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin_dash')->middleware('admin');
    Route::get('create-lecturer', 'AdminController@create')->name('create_lecturer');
    Route::post('create-lecturer', 'AdminController@store')->name('create_admin');
    Route::get('/view-credit', 'AdminController@creditIndex')->name('view-loan')->middleware('admin');
    Route::get('/incorporated', 'EnterpriseController@allincorporate')->name('incorporated-all')->middleware('admin');
    Route::get('/unincorporated', 'EnterpriseController@allUnincorporate')->name('unincorporated-all')->middleware('admin');;
    Route::get('/unincorporated', 'EnterpriseController@allUnincorporate')->name('unincorporated-all')->middleware('admin');;
    Route::get('full-user-details/{id}', 'AdminController@fullDetails')->middleware('admin');;
    Route::get('/users-messages', 'MessageController@index')->name('user-message')->middleware('admin');
    Route::get('/trustees', 'FundingController@all')->name('funds')->middleware('admin');
    Route::get('/agent/create',  'StudentController@create')->middleware('admin');;
    Route::post('/agent/store',  'StudentController@store')->name('create_student')->middleware('admin');;

    
});

Route::group(['prefix' => 'agent'], function () {
    Route::get('/', 'LecturerController@index')->name('lecturer_dash');
    Route::get('profile', 'LecturerController@edit')->name('edit_profile');
    
    Route::get('create-a-course', 'CourseController@create')->name('create_course');
    Route::post('create-a-course', 'CourseController@store')->name('store_course');
    
   
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'StudentController@index')->name('student_dash');
    Route::get('register-student', 'StudentController@create')->name('register_student');
    Route::post('registeration', 'RegistrationController@store')->name('register');
    Route::get('registeration', 'RegistrationController@create');
    Route::get('/register-users', 'ClientController@index')->name('clients');
    Route::post('/register-users', 'ClientController@CompleteRegistration')->name('create-clients');
    Route::get('/student/activation/{email}/{activationCode}', 'StudentController@activate')->name('activate_student');
    Route::get('/student-registration', 'StudentController@studentRegistation')->name('student_registration');
    Route::get('/ask-for-loan', 'LoanController@AskForCredit')->name('loan');
    Route::post('/ask-for-loan', 'LoanController@SendLoanRequest')->name('users-loan');
    Route::get('/unincorporated', 'EnterpriseController@unincorporatedEnterprise')->name('unincorporated');
    Route::post('/unincorporated', 'EnterpriseController@sendUnicorporated')->name('send_unincorporated');
    Route::get('/incorporated', 'EnterpriseController@incorporatedEnterprise')->name('incorporated');
    Route::post('/incorporated', 'EnterpriseController@sendIncorporated')->name('send_incorporated');
    Route::post('/get-in-touch', 'MessageController@Sendmessage')->name('home-message');
    
    
});



   
    Route::get('users-login', 'LoginController@showLoginForm')->name('credit');
    Route::get('/users-dashboard', 'ClientController@clientDashboard'); 



    Route::get('/dashboard-all-users', 'HomeController@index')->name('home');
    Route::get('/users-messages', 'HomeController@message')->name('message');
    Route::get('/details/{id}', 'HomeController@fullDetails');
   
    Route::get('/funding/register', 'FundingController@index')->name('funding');
    Route::post('/funding/register', 'FundingController@store')->name('funding-store');
