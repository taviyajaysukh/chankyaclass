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
//ACAD12254
Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',function(){
    return redirect('/');
});
Route::get('/',[AuthController::class,'loadLogin']);
Route::get('/getcurrency',[AdminController::class,'getCurrency']);
Route::get('/gettimezone',[AdminController::class,'getTimezone']);
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
	
	Route::get('/getcategoty',[AdminController::class,'getCategoty'])->name('getcategoty');
	Route::post('/getsubcategoty',[AdminController::class,'getSubCategoty'])->name('getsubcategoty');
	
	//subcategory manage
	Route::get('/subcategorymanage',[AdminController::class,'subCategoryManage']);
	Route::post('/addsubcategory',[AdminController::class,'addSubCategory'])->name('addsubcategory');
	Route::post('/updatesubcategory',[AdminController::class,'updateSubCategory'])->name('updatesubcategory');
	Route::post('/changesubcatestatus',[AdminController::class,'changeSubCategoryStatus'])->name('changesubcatestatus');
	Route::post('/deletesubcategory',[AdminController::class,'deleteSubCategory'])->name('deleteSubcategory');
	
	//Notice manage
	Route::get('/noticemanage',[AdminController::class,'noticeManage']);
	Route::post('/addnotice',[AdminController::class,'addNotice'])->name('addnotice');
	Route::post('/updatenotice',[AdminController::class,'updateNotice'])->name('updatenotice');
	Route::post('/changenoticestatus',[AdminController::class,'changeNoticeStatus'])->name('changenoticestatus');
	Route::post('/deletenotice',[AdminController::class,'deleteNotice'])->name('deletenotice');
	
	//Subject manage
	Route::get('/subjectmanage',[AdminController::class,'subjectManage']);
	Route::post('/addsubject',[AdminController::class,'addSubject'])->name('addsubject');
	Route::post('/updatesubject',[AdminController::class,'updateSubject'])->name('updatesubject');
	Route::post('/changesubjectstatus',[AdminController::class,'changeSubjectStatus'])->name('changesubjectstatus');
	Route::post('/deletesubject',[AdminController::class,'deleteSubject'])->name('deletesubject');
	Route::get('/getsubject',[AdminController::class,'getSubject'])->name('getsubject');
	
	//Question manage
	Route::get('/questionmanage',[AdminController::class,'questionManage']);
	Route::get('/addquestion',[AdminController::class,'addQuestion']);
	Route::get('/editquestion/{id}',[AdminController::class,'editQuestion']);
	Route::post('/addquestion',[AdminController::class,'insertQuestion'])->name('addquestion');
	Route::post('/updatequestion',[AdminController::class,'updateQuestion'])->name('updatequestion');
	Route::post('/changequestionstatus',[AdminController::class,'changeQuestionStatus'])->name('changequestionstatus');
	Route::post('/deletequestion',[AdminController::class,'deleteQuestion'])->name('deletequestion');
	//Subject chapter
	Route::post('/addsubjectchapter',[AdminController::class,'addSubjectChapter'])->name('addsubjectchapter');
	Route::post('/updatesubjectchapter',[AdminController::class,'updateSubjectChapter'])->name('updatesubjectchapter');
	Route::post('/deletesubjectchapter',[AdminController::class,'deleteSubjectChapter'])->name('deletesubjectchapter');
	Route::post('/getchapter',[AdminController::class,'getChapter'])->name('getchapter');
	//Upcomming exams
	Route::get('/upcommingexammanage',[AdminController::class,'upcommingexamManage']);
	Route::get('/viewupcommingfile/{id}',[AdminController::class,'viewupcommingFile']);
	Route::post('/addupexam',[AdminController::class,'addUpexam'])->name('addupexam');
	Route::post('/updateupexam',[AdminController::class,'updateUpexam'])->name('updateupexam');
	Route::post('/deleteupexam',[AdminController::class,'deleteUpexam'])->name('deleteupexam');
	Route::post('/changeupexamstatus',[AdminController::class,'changeUpexamstatus'])->name('changeupexamstatus');
	
	//student manage
	Route::get('/studentmanage',[AdminController::class,'studentManage']);
	Route::get('/managestudentleave',[AdminController::class,'manageStudentLeave']);
	Route::get('/studentpaymenthistory',[AdminController::class,'studentPaymentHistory']);
	Route::get('/editstudent/{studentid}',[AdminController::class,'editStudent']);
	Route::get('/addstudent',[AdminController::class,'addStudent']);
	Route::post('/submitstudent',[AdminController::class,'submitStudent'])->name('submitstudent');
	Route::post('/updatestudent',[AdminController::class,'updateStudent'])->name('updatestudent');
	Route::post('/deletestudent',[AdminController::class,'deleteStudent'])->name('deletestudent');
	Route::post('/changestudentstatus',[AdminController::class,'changeStudentstatus'])->name('changestudentstatus');
	
	//student action page
	Route::get('/studentattendance/{id}',[AdminController::class,'studentAttendance']);
	Route::get('/studentmanagecertificate/{id}',[AdminController::class,'studentManageCertificate']);
	Route::get('/extraclassattendance/{id}',[AdminController::class,'extraClassAttendance']);
	Route::get('/studentprogress/{id}',[AdminController::class,'studentProgress']);
	Route::get('/studentacademicrecord/{id}',[AdminController::class,'studentAcademicRecord']);
	Route::get('/studentnotice/{id}',[AdminController::class,'studentNotice']);
	Route::get('/studentdoubtask/{id}',[AdminController::class,'studentDoubtask']);
	Route::post('/submitstudentpassword',[AdminController::class,'submitStudentPassword']);
	
	//extra classes manage
	Route::get('/extraclassesmanage',[AdminController::class,'extraClassesManage']);
	//extra class add
	Route::post('/addextraclass',[AdminController::class,'addExtraClass'])->name('addextraclass');
	//extra class updateCategory
	Route::post('/updateextraclass',[AdminController::class,'updateExtraClass'])->name('updateextraclass');
	//delete extra class
	Route::post('/deleteextraclass',[AdminController::class,'deleteExtraClass'])->name('deleteextraclass');
	Route::post('/changeextraclassstatus',[AdminController::class,'changeExtraClassstatus'])->name('changeextraclassstatus');
	
	//Teacher manage
	Route::get('/teachermanage',[AdminController::class,'teacherManage']);
	Route::post('/addteacher',[AdminController::class,'addTeacher'])->name('addteacher');
	Route::post('/updateteacher',[AdminController::class,'updateTeacher'])->name('updateteacher');
	Route::post('/deleteteacher',[AdminController::class,'deleteTeacher'])->name('deleteteacher');
	Route::post('/changeteacherstatus',[AdminController::class,'changeTeacherStatus'])->name('changeteacherstatus');
	Route::get('/getteacher',[AdminController::class,'getTeacher'])->name('getteacher');
	
	Route::get('/manageteacherleave',[AdminController::class,'manageTeacherLeave']);
	//manage doubts class
	Route::get('/doubtsclass',[AdminController::class,'doubtsClass']);
	Route::get('/enquiry',[AdminController::class,'Enquiry']);
	Route::get('/practiceresult',[AdminController::class,'practiceResult']);
	Route::get('/mocktestresult',[AdminController::class,'mockTestResult']);
	Route::get('/viewcertificatesample',[AdminController::class,'viewCertificateSample']);
	//book manage
	Route::get('/bookmanage',[AdminController::class,'bookManage']);
	Route::post('/addbook',[AdminController::class,'addBook'])->name('addbook');
	Route::post('/updatebook',[AdminController::class,'updateBook'])->name('updatebook');
	Route::post('/deletebook',[AdminController::class,'deleteBook'])->name('deletebook');
	Route::post('/changebookstatus',[AdminController::class,'changeBookStatus'])->name('changebookstatus');
	
	//Note manage
	Route::get('/notemanage',[AdminController::class,'noteManage']);
	Route::post('/addnote',[AdminController::class,'addNote'])->name('addnote');
	Route::post('/updatenote',[AdminController::class,'updateNote'])->name('updatenote');
	Route::post('/deletenote',[AdminController::class,'deleteNote'])->name('deletenote');
	Route::post('/changenotestatus',[AdminController::class,'changeNoteStatus'])->name('changeNotestatus');
	
	
	//Old paper manage
	Route::get('/oldpapermanage',[AdminController::class,'oldpaperManage']);
	Route::post('/addoldpaper',[AdminController::class,'addOldpaper'])->name('addoldpaper');
	Route::post('/updateoldpaper',[AdminController::class,'updateOldpaper'])->name('updateoldpaper');
	Route::post('/deleteoldpaper',[AdminController::class,'deleteOldpaper'])->name('deleteoldpaper');
	Route::post('/changeoldpaperstatus',[AdminController::class,'changeOldpaperStatus'])->name('changeOldpaperstatus');
	
	//gallery
	
	Route::get('/gallerymanage',[AdminController::class,'galleryManage']);
	Route::post('/addgallery',[AdminController::class,'addGallery'])->name('addgallery');
	Route::post('/updategallery',[AdminController::class,'updateGallery'])->name('updategallery');
	Route::post('/deletegallery',[AdminController::class,'deleteGallery'])->name('deletegallery');
	Route::post('/changegallerystatus',[AdminController::class,'changeGalleryStatus'])->name('changegallerystatus');
	
	//video
	
	Route::get('/videomanage',[AdminController::class,'videoManage']);
	Route::post('/addvideo',[AdminController::class,'addVideo'])->name('addvideo');
	Route::post('/updatevideo',[AdminController::class,'updateVideo'])->name('updatevideo');
	Route::post('/deletevideo',[AdminController::class,'deleteVideo'])->name('deletevideo');
	Route::post('/changevideostatus',[AdminController::class,'changeVideoStatus'])->name('changevideostatus');
	
	//add site setting
	Route::get('/sitesettings',[AdminController::class,'siteSettings']);
	Route::post('/updatesitesettings',[AdminController::class,'updateSiteSettings'])->name('updatesitesettings');
	
	//generarl site settings
	
	//payment setting
	Route::get('/paymentsettings',[AdminController::class,'paymentSettings']);
	Route::post('/updatepaymentsettings',[AdminController::class,'updatepaymentSettings'])->name('updatepaymentsettings');
	
	//email setting
	Route::get('/emailsettings',[AdminController::class,'emailSettings']);
	Route::post('/updateemailsettings',[AdminController::class,'updateEmailSettings'])->name('updateemailsettings');
	
	//Certificate setting
	Route::get('/certificate',[AdminController::class,'certificateSettings']);
	Route::post('/updatecertificatesettings',[AdminController::class,'updateCertificateSettings'])->name('updatecertificatesettings');
	
	
	//batch manage
	Route::get('/batchmanage',[AdminController::class,'batchManage']);
	Route::get('/editbatch/{batchid}',[AdminController::class,'editBatch']);
	Route::get('/addbatch',[AdminController::class,'addBatch']);
	Route::post('/insertbatch',[AdminController::class,'insertBatch'])->name('insertbatch');
	Route::post('/updatebatch',[AdminController::class,'updateBatch'])->name('updatebatch');
	Route::post('/deletebatch',[AdminController::class,'deleteBatch'])->name('deletebatch');
	Route::post('/changebatchstatuschangebatchstatus',[AdminController::class,'changeBatchStatus'])->name('changebatchstatus');
	
	
	//create paper maangement
	Route::get('/editpaper/{id}',[AdminController::class,'editPaper']);
	Route::get('/exammanage',[AdminController::class,'examManage']);
	Route::get('/createpaper',[AdminController::class,'createPaper']);
	Route::post('/submitcreatepaper',[AdminController::class,'submitCreatePaper'])->name('submitcreatepaper');
	Route::post('/updatepaper',[AdminController::class,'updatePaper'])->name('updatepaper');
	Route::post('/deletepaper',[AdminController::class,'deletePaper'])->name('deletepaper');
	Route::post('/changepaperstatus',[AdminController::class,'changePaperStatus'])->name('changePaperstatus');
});
Route::group(['prefix' => 'teacher','middleware'=>['web','isTeacher']],function(){
    Route::get('/dashboard',[TeacherController::class,'dashboard']);
	//assignment route
	Route::get('/assignmentmanage',[TeacherController::class,'assignmentManage']);
	Route::post('/getbatchsubject',[TeacherController::class,'getBatchSubject'])->name('getbatchsubject');
	Route::post('/addassignment',[TeacherController::class,'addAssignment'])->name('addassignment');
	Route::post('/updateassignment',[TeacherController::class,'updateAssignment'])->name('updateassignment');
	Route::post('/deleteassignment',[TeacherController::class,'deleteAssignment'])->name('deleteassignment');
	Route::post('/changeassignmentstatus',[TeacherController::class,'changeAssignmentstatus'])->name('changeassignmentstatus');
	
	//apply leave route
	Route::get('/applyleave',[TeacherController::class,'applyLeave']);
	Route::post('/submitapplyleave',[TeacherController::class,'submitApplyLeave'])->name('submitapplyleave');
	Route::post('/updateapplyleave',[TeacherController::class,'updateApplyleave'])->name('updateapplyleave');
	Route::post('/deleteapplyleave',[TeacherController::class,'deleteApplyleave'])->name('deleteapplyleave');
	Route::post('/changeapplyleavestatus',[TeacherController::class,'changeApplyleaveStatus'])->name('changeapplyleavestatus');
});
