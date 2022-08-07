<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersAPIController;
use App\Http\Controllers\LoginAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/Users/list',[AdminController::class,'list']);

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

Route::get('/appointmentlist', [AdminController::class, 'applist']);
Route::get('/addapp', [AdminController::class, 'addapp'])->name('addapp')->middleware('ValidAdmin');
Route::post('/addapp', [AdminController::class, 'addappSubmit'])->name('addapp')->middleware('ValidAdmin');
Route::get('/editapp/{appID}', [AdminController::class, 'editapp'])->name('editapp')->middleware('ValidAdmin');
Route::post('/editapp', [AdminController::class, 'editappSubmit'])->name('editapp')->middleware('ValidAdmin');
Route::get('/deleteapp/{appID}', [AdminController::class, 'deleteapp'])->name('deleteapp')->middleware('ValidAdmin');
Route::post('/deleteapp', [AdminController::class, 'deleteappSubmit'])->name('deleteapp')->middleware('ValidAdmin');
Route::get('/searchApp', [AdminController::class, 'searchApp'])->name('searchApp')->middleware('ValidAdmin');



Route::get('/Itemlist', [AdminController::class, 'Itemlist']);
Route::get('/searchProduct', [AdminController::class, 'searchProduct'])->name('searchProduct')->middleware('ValidAdmin');

Route::get('/docreviews', [AdminController::class, 'docreviews']);
Route::get('/deletereview/{doctorReviewID}', [AdminController::class, 'deletereviewSubmit'])->name('deletereview')->middleware('ValidAdmin');


Route::get('/unverified', [AdminController::class, 'unverified']);
Route::get('/accept/{name}', [AdminController::class, 'accept'])->name('accept')->middleware('ValidAdmin');
Route::post('/accept', [AdminController::class, 'acceptSubmit'])->name('accept')->middleware('ValidAdmin');
Route::get('/decline/{name}', [AdminController::class, 'decline'])->name('decline')->middleware('ValidAdmin');
Route::get('/ban/{name}', [AdminController::class, 'ban'])->name('ban')->middleware('ValidAdmin');
Route::post('/ban', [AdminController::class, 'banSubmit'])->name('ban')->middleware('ValidAdmin');
Route::get('/unban/{name}', [AdminController::class, 'unban'])->name('unban')->middleware('ValidAdmin');
Route::post('/unban', [AdminController::class, 'unbanSubmit'])->name('unban')->middleware('ValidAdmin');





//Appointment
Route::get('/appointments',[AdminController::class,'appDoctor'])->name('appDoctor')->middleware('ValidAdmin'); 

Route::get('/Doctorsapps', [AdminController::class, 'join']);
Route::get('/chart', [AdminController::class, 'chart'])->name('chart')->middleware('ValidAdmin');
Route::get('/downloadPdf', [AdminController::class, 'downloadPdf'])->name('downloadPdf')->middleware('ValidAdmin');

//pharmacist
Route::get('/Users/list',[UsersAPIController::class,'APIlist'])->middleware('APIAuth');
Route::post('/Users/list',[UsersAPIController::class,'APIpost'])->middleware('APIAuth');
Route::get('/Items/list',[UsersAPIController::class,'APIItemlist'])->middleware('APIAuth');
Route::post('/Items/list',[UsersAPIController::class,'APIItempost'])->middleware('APIAuth');
Route::post('/createItemSubmit',[UsersAPIController::class,'createItemSubmit'])->middleware('APIAuth'); 
Route::get('/pharmacist/homePharmacist', [UsersController::class, 'homePharmacist'])->name('homePharmacist')->middleware('ValidPharmacist');
Route::get('/chart', [UsersController::class, 'chart'])->name('chart')->middleware('homePharmacist');
Route::get('/pharmacist/homePharmacist', [UsersController::class, 'homePharmacist'])->name('homePharmacist')->middleware('ValidPharmacist');
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


//Login
Route::post('/login',[LoginAPIController::class,'login']);
Route::post('/registration',[LoginAPIController::class,'registration']);
Route::post('/logout',[LoginAPIController::class,'logout']);