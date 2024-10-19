<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVmakerController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\Createresume1Controller;
use App\Http\Controllers\Createresume2Controller;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Sessionmiddleware;
use App\Http\Controllers\DownloadController;
use App\CreateResume1;
use App\Http\Controllers\PDF;

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

// controller get
Route::get('/First_Template', [Createresume2Controller::class, 'first_template_show']);
Route::get('/Second_Template', [Createresume2Controller::class, 'second_template_show']);
Route::get('/Third_Template', [Createresume2Controller::class, 'third_template_show']);
Route::get('/Fourth_Template', [Createresume2Controller::class, 'fourth_template_show']);
Route::get('/Fifth_Template', [Createresume2Controller::class, 'fifth_template_show']);
Route::get('/Sixth_Template', [Createresume2Controller::class, 'sixth_template_show']);
Route::get('/Registration',[RegistrationController::class, 'Registration_index']);
Route::get('/Registration/login_destroy/{id}', [RegistrationController::class, 'login_destroy']);
Route::get('/ContactUs', [ContactusController::class, 'contactus_index']);
Route::get('/ContactUs/delete/{id}', [ContactusController::class, 'delete'])->name('contact.delete');
Route::get('/User-Query', [ContactusController::class, 'show']);
Route::get('/User-Login-Info', [RegistrationController::class, 'admin_user_show']);
Route::get('/Login', [RegistrationController::class, 'login_index']);
Route::get('/CreateResume1', [Createresume1Controller::class, 'index']);
Route::get('/User-Personal-Info', [Createresume1Controller::class, 'user_personal_info_show']);
Route::get('/Createresume1/personal_info_destroy/{id}', [Createresume1Controller::class, 'personal_info_destroy'])->name('personal.personal_info_destroy');
Route::get('/ChangeByUser', [RegistrationController::class, 'edit_userprofile']);
Route::get('/UpdateProfile/{id}', [RegistrationController::class, 'edit']);
Route::get('/CreateResume2', [Createresume2Controller::class, 'index']);
Route::get('/Admin-Profile', [AdminController::class, 'edit_adminprofile']);
Route::get('/VerifyEmail', [RegistrationController::class, 'verifyIndex']);
Route::get('/ChangePassword', [RegistrationController::class, 'newPasswordIndex']);
Route::get('/ForgetPassword', [RegistrationController::class, 'forgotIndex']);
Route::get('/User-Profile', [RegistrationController::class, 'userinformationstore']);

Route::get('/Logout', function(){
    Session::flush();
    return redirect('/Login');
});







// post


Route::post('/Registration',[RegistrationController::class, 'registration_store']);
Route::post('/ContactUs',[ContactusController::class, 'contactus_store']);
Route::post('/Login', [RegistrationController::class, 'login']);
Route::post('/CreateResume1', [Createresume1Controller::class, 'store']);
Route::post('/ChangeByUser', [RegistrationController::class, 'update_userprofile']);
Route::post('/UpdateProfile/{id}', [RegistrationController::class, 'Update_Login_Data']);
Route::post('/CreateResume2', [Createresume2Controller::class, 'store']);
Route::post('/Admin-Profile', [AdminController::class, 'update_adminprofile']);
Route::post('/forgotpassword', [RegistrationController::class, 'forgotPassword']);
Route::post('/checkzip', [RegistrationController::class, 'checkZip']);
Route::post('/newpassword', [RegistrationController::class, 'newPassword']);
Route::post('/User-Profile', [RegistrationController::class, 'userinformationstore']);



//

Route::get('/', function () {
    return view('Home');
});

Route::get('Header', function () {
    return view('Header');
});

Route::get('Footer', function () {
    return view('Footer');
});

Route::get('Faq', function () {
    return view('Faq');
});



Route::get('Header&Footer', function () {
    return view('Header&Footer');
});



Route::get('AboutUs', function () {
    return view('AboutUs');
});

Route::get('Resumetemplate', function () {
    return view('Resumetemplate');
});


Route::get('Template', function () {
    return view('Template');
});

Route::get('Download', function () {
    return view('Download');
});

Route::get('Header-2', function () {
    return view('Header-2');
});

Route::get('Header-3', function () {
    return view('Header-3');
});


Route::get('PrivatePolicy', function () {
    return view('PrivatePolicy');
});

Route::get('Term&Condition', function () {
    return view('Term&Condition');
});

Route::get('abc', function () {
    return view('abc');
});


