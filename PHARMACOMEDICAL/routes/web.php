<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Home;


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

//----------------------------Login&Registration----------------------------//
Route::get('/', [PagesController::class, 'login']);
Route::post('/', [PagesController::class, 'loginSubmit'])->name('login');
Route::get('/logout', [PagesController::class, 'logout'])->name('logout');

Route::get('/registration', [PagesController::class, 'registration'])->name('registration');
Route::post('/registration', [PagesController::class, 'registrationSubmit'])->name('registration');

//----------------------------Doctors----------------------------//
Route::get('/doctors/homeDoctor', [DoctorController::class, 'homeDoctor'])->name('homeDoctor')->middleware('ValidDoctors');

//----------------------------Admin----------------------------//
Route::get('/chart', [AdminController::class, 'chart'])->name('chart')->middleware('ValidAdmin');
Route::get('/admindash', [AdminController::class, 'admindash'])->name('admindash')->middleware('ValidAdmin');
Route::get('/profileAdmin', [AdminController::class, 'profileAdmin'])->name('profileAdmin')->middleware('ValidAdmin');
Route::post('/profileAdmin', [AdminController::class, 'profileEdit'])->name('profileAdmin')->middleware('ValidAdmin');
Route::get('/list', [AdminController::class, 'list'])->name('listAdmin')->middleware('ValidAdmin');
Route::get('/searchUser', [AdminController::class, 'searchUser'])->name('searchUser')->middleware('ValidAdmin');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/addUser', [AdminController::class, 'addUser'])->name('addUser')->middleware('ValidAdmin');
Route::post('/addUser', [AdminController::class, 'addUserSubmit'])->name('addUser')->middleware('ValidAdmin');
Route::get('/editUser/{name}', [AdminController::class, 'editUser'])->middleware('ValidAdmin');
Route::post('/editUser', [AdminController::class, 'editUserSubmit'])->name('editUser')->middleware('ValidAdmin');
Route::get('/deleteUser/{name}', [AdminController::class, 'deleteUser'])->middleware('ValidAdmin');
Route::post('/deleteUser', [AdminController::class, 'deleteUserSubmit'])->name('deleteUser')->middleware('ValidAdmin');

Route::get('/appointmentlist', [AdminController::class, 'applist'])->name('applist')->middleware('ValidAdmin');
Route::get('/addapp', [AdminController::class, 'addapp'])->name('addapp')->middleware('ValidAdmin');
Route::post('/addapp', [AdminController::class, 'addappSubmit'])->name('addapp')->middleware('ValidAdmin');
Route::get('/editapp/{appID}', [AdminController::class, 'editapp'])->name('editapp')->middleware('ValidAdmin');
Route::post('/editapp', [AdminController::class, 'editappSubmit'])->name('editapp')->middleware('ValidAdmin');
Route::get('/deleteapp/{appID}', [AdminController::class, 'deleteapp'])->name('deleteapp')->middleware('ValidAdmin');
Route::post('/deleteapp', [AdminController::class, 'deleteappSubmit'])->name('deleteapp')->middleware('ValidAdmin');
Route::get('/searchApp', [AdminController::class, 'searchApp'])->name('searchApp')->middleware('ValidAdmin');



Route::get('/Itemlist', [AdminController::class, 'Itemlist'])->name('Itemlist')->middleware('ValidAdmin');
Route::get('/searchProduct', [AdminController::class, 'searchProduct'])->name('searchProduct')->middleware('ValidAdmin');

Route::get('/docreviews', [AdminController::class, 'docreviews'])->name('docreviews')->middleware('ValidAdmin');
Route::get('/deletereview/{doctorReviewID}', [AdminController::class, 'deletereviewSubmit'])->name('deletereview')->middleware('ValidAdmin');
//Route::post('/deletereview', [AdminController::class, 'deletereviewSubmit'])->name('deletereview');

Route::get('/unverified', [AdminController::class, 'unverified'])->name('unverified')->middleware('ValidAdmin');
Route::get('/accept/{name}', [AdminController::class, 'accept'])->name('accept')->middleware('ValidAdmin');
Route::post('/accept', [AdminController::class, 'acceptSubmit'])->name('accept')->middleware('ValidAdmin');
Route::get('/decline/{name}', [AdminController::class, 'decline'])->name('decline')->middleware('ValidAdmin');
Route::get('/ban/{name}', [AdminController::class, 'ban'])->name('ban')->middleware('ValidAdmin');
Route::post('/ban', [AdminController::class, 'banSubmit'])->name('ban')->middleware('ValidAdmin');
Route::get('/unban/{name}', [AdminController::class, 'unban'])->name('unban')->middleware('ValidAdmin');
Route::post('/unban', [AdminController::class, 'unbanSubmit'])->name('unban')->middleware('ValidAdmin');



//Appointment
Route::get('/appointments',[AdminController::class,'appDoctor'])->name('appDoctor')->middleware('ValidAdmin'); 

Route::get('/Doctorsapps', [AdminController::class, 'join'])->name('join')->middleware('ValidAdmin');
Route::get('/chart', [AdminController::class, 'chart'])->name('chart')->middleware('ValidAdmin');
Route::get('/downloadPdf', [AdminController::class, 'downloadPdf'])->name('downloadPdf')->middleware('ValidAdmin');


//----------------------------Pharmacist----------------------------//
Route::get('/pharmacist/homePharmacist', [UsersController::class, 'homePharmacist'])->name('homePharmacist')->middleware('ValidPharmacist');
Route::get('/chart', [UsersController::class, 'chart'])->name('chart')->middleware('ValidPharmacist');
Route::get('/pharmacist/cart', [UsersController::class, 'cart'])->name('cart')->middleware('ValidPharmacist');
Route::get('/pharmacist/shop', [UsersController::class, 'shop'])->name('shop')->middleware('ValidPharmacist');
Route::get('/pharmacist/checkout', [UsersController::class, 'checkout'])->name('checkout')->middleware('ValidPharmacist');
Route::get('/pharmacist/pharmacistDashboard',[UsersController::class, 'pharmacistDashboard'])->name('pharmacistDashboard')->middleware('ValidPharmacist');
Route::get ('/pharmacist/pharmacistProfile',[UsersController::class,'pharmacistProfile'])->name('pharmacistProfile')->middleware('ValidPharmacist');
Route::get('/pharmacist/updatePharmacistProfile',[UsersController::class, 'updatePharmacistProfile'])->name('updatePharmacistProfile')->middleware('ValidPharmacist');
Route::post('/pharmacist/updatePharmacistProfile',[UsersController::class, 'updateSubmitted'])->name('updateProfile')->middleware('ValidPharmacist');
Route::get('/pharmacist/changePassword',[UsersController::class, 'changePassword'])->name('changePassword')->middleware('ValidPharmacist');
Route::get('/pharmacist/index',[UsersController::class, 'index'])->name('index')->middleware('ValidPharmacist');
Route::get('/pharmacist/list', [UsersController::class, 'list'])->name('listPharmacist')->middleware('ValidPharmacist');
Route::get('/pharmacist/searchItem', [UsersController::class, 'searchItem'])->name('searchItem')->middleware('ValidPharmacist');
Route::get('/pharmacist/addItem', [UsersController::class, 'addItem'])->name('addItem')->middleware('ValidPharmacist');
Route::post('/pharmacist/addItem', [UsersController::class, 'itemAdd'])->name('itemAdd')->middleware('ValidPharmacist');
Route::get('/pharmacist/editItem/{itemName}', [UsersController::class, 'editItem'])->middleware('ValidPharmacist');
Route::post('/pharmacist/editItem', [UsersController::class, 'editItemSubmit'])->name('editItem')->middleware('ValidPharmacist');
Route::get('/pharmacist/deleteItem/{itemName}', [UsersController::class, 'deleteItem'])->middleware('ValidPharmacist');
Route::post('/pharmacist/deleteItem', [UsersController::class, 'deleteItemSubmit'])->name('deleteItem')->middleware('ValidPharmacist');
Route::get('/pharmacist/viewItem',[UsersController::class, 'viewItem'])->name('viewItem')->middleware('ValidPharmacist');
Route::get('/downloadPdf', [UsersController::class, 'downloadPdf'])->name('downloadPdf')->middleware('ValidPharmacist');
Route::get('/pharmacistOtp', function () {return view('pharmacist.email.otpCheck');})->name('pharmacistOtp');
Route::post('/pharmacistOtpSubmit',[PagesController::class, 'otp'])->name('pharmacistOtpSubmit');
// Route::get('/pharmacist/deleteItem',[UsersController::class, 'deleteItem'])->name('deleteItem');
// Route::post('/pharmacist/deleteItem',[UsersController::class, 'deleteItemSubmit'])->name('deleteItemSubmit');
