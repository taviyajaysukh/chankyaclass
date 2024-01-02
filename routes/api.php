<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/getcurrency',[UserController::class,'getCurrency']);
Route::post('/sentotp',[UserController::class,'sentOtp']);
Route::post('/verifyotp',[UserController::class,'verifyOtp']);
Route::post('/studentsignup',[UserController::class,'studentSignup']);
Route::post('/studentlogin',[UserController::class,'studentLogin']);
Route::post('/studentlogout',[UserController::class,'studentLogout']);
Route::get('/getbatches',[UserController::class,'getBatches']);
Route::get('/getnotice',[UserController::class,'getNotice']);
Route::get('/getbatchbyid/{id}',[UserController::class,'getBatchesById']);
Route::get('/practicepaper',[UserController::class,'practicePaper']);
Route::get('/getquestion',[UserController::class,'getQuestion']);
Route::get('/practicepaperbybatchid/{id}',[UserController::class,'practicePaperByBatchid']);
Route::get('/getquestionbypaperid/{id}',[UserController::class,'getQuestionByPaperid']);
Route::get('/getquestionbyid/{id}',[UserController::class,'getQuestionById']);
Route::post('/startexam',[UserController::class,'StartExam']);



//Leave application API
Route::post('/submitapplyleave',[UserController::class,'submitApplyLeave']);
Route::post('/historyapplyleave',[UserController::class,'historyApplyLeave']);
Route::post('/historyapplyleavebyid',[UserController::class,'historyApplyLeaveById']);
Route::get('/getprivacypolicy',[UserController::class,'getPrivacyPolicy']);
Route::get('/getaboutapp',[UserController::class,'getAboutapp']);
Route::get('/getopensourcelibrary',[UserController::class,'getOpensourcelibrary']);
Route::get('/getbatchebycategory',[UserController::class,'getBatcheByCategory']);