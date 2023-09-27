<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
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

Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',function(){
    return redirect('/');
});
Route::get('/',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/forgotpassword',[AuthController::class,'loadForgotpassword']);
Route::post('/forgotpassword',[AuthController::class,'forgotpassword'])->name('forgotpassword');
Route::get('/logout',[AuthController::class,'logout']);
// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
    Route::get('/usermanage',[AdminController::class,'userManage']);
    Route::post('/adduser',[AdminController::class,'addUser'])->name('adduser');
    Route::post('/deleteuser',[AdminController::class,'deleteUser'])->name('deleteuser');
	Route::post('/updateuser',[AdminController::class,'updateUser'])->name('updateuser');
	
	//category manage
	Route::get('/categorymanage',[AdminController::class,'categoryManage']);
	Route::post('/addcategory',[AdminController::class,'addCategory'])->name('addcategory');
	Route::post('/updatecategory',[AdminController::class,'updateCategory'])->name('updatecategory');
	Route::post('/changecatestatus',[AdminController::class,'changeCategoryStatus'])->name('changecatestatus');
	Route::post('/deletecategory',[AdminController::class,'deleteCategory'])->name('deletecategory');
});
Route::group(['prefix' => 'teacher','middleware'=>['web','isTeacher']],function(){
    Route::get('/dashboard',[TeacherController::class,'dashboard']);
});
