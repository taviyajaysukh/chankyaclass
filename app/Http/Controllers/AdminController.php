<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Notice;
use App\Models\Subject;
use App\Models\Chapter;
use App\Models\Student;
use App\Models\Extraclass;
use App\Models\Upcommingexam;
use App\Models\Teacher;
use App\Models\Book;
use App\Models\Note;
use App\Models\Oldpaper;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\Sitesettings;
use App\Models\Paymentsettings;
use App\Models\Emailsettings;
use App\Models\Certificate;
use App\Models\Batch;
use App\Models\Batchfeature;
use App\Models\Batchsubject;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
	public function dashboard()
    {
        return view('admin.dashboard');
    }
	//
	public function userManage()
    {
		$users = User::whereIn('role', array('teacher','subadmin','student'))->get();
        return view('admin.usermanage',['users'=>$users]);
    }
		
	public function addUser(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'name' => 'string|required|min:3',
            'email' => 'string|email|required|unique:users',
            'mobile' => ['required', 'digits:10'],
            'password' =>'string|required|min:3',
        ]);
		$imageName = '';
		if($files=$request->file('userImage')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$imageName =$name;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$user = new User;
			$user->name = $request->name;
			$user->email = $request->email;
			$user->mobile = $request->mobile;
			$user->password = Hash::make($request->password);
			$user->role = $request->role;
			$user->image = $imageName;
			$user->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'User saved successfully!'
			], 200);	
		}
    }
	public function deleteUser(Request $request){
		$userId = (int)$request->userId ?? '';
		$user = User::find($userId);
		if ($user && $user->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'User deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'User not found!'
			], 200);
		}
	}
	public function updateUser(Request $request)
	{
		$validator = \Validator::make($request->all(),[
            'name' => 'string|required|min:5',
            'email' => 'string|email|required',
            'mobile' => ['required', 'digits:10'],
        ]);
		$imageName = '';
		if($files=$request->file('userImage')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$imageName =$name;
		}else{
			$imageName = $request->edituserimage ?? '';
		}
		$userId = (int)$request->userid ?? '';
		$name = $request->name ?? '';
		$email = $request->email ?? '';
		$mobile = $request->mobile ?? '';
		$role = $request->role ?? '';
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$user = User::find($userId);
			$user->name = $name;
			$user->email = $email;
			$user->mobile = $mobile;
			$user->role = $role;
			$user->image = $imageName;
			$user->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'User update successfully!'
			], 200);	
		}
		
	}
	// category manage
	public function categoryManage()
    {
		$category = Category::whereIn('status', array('active','deactive'))->get();
        return view('admin.categorymanage',['categories'=>$category]);
    }
	public function addCategory(Request $request){
		$validator = \Validator::make($request->all(),[
            'categoryname' => 'string|required|min:1',
        ]);
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createby = Auth::user()->role;
			$category = new Category;
			$category->categoryname = $request->categoryname;
			$category->createdby = $createby;
			$category->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'category saved successfully!'
			], 200);	
		}
	}
	//update Category
	
	public function updateCategory(Request $request)
	{
		$validator = \Validator::make($request->all(),[
            'categoryname' => 'string|required|min:1',
        ]);
		
		$cateId = (int)$request->editcateid ?? '';
		$categoryname = $request->categoryname ?? '';
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$category = Category::find($cateId);
			$category->categoryname = $categoryname;
			$category->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'Category update successfully!'
			], 200);	
		}
		
	}
	public function changeCategoryStatus(Request $request){
		$cateId = (int)$request->cateid ?? '';
		$category = Category::find($cateId);
		$status = '';
		if($category->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$category->status = $status;
		$category->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	public function deleteCategory(Request $request){
		$cateId = (int)$request->cateid ?? '';
		$category = Category::find($cateId);
		if ($category && $category->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'category deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'category not found!'
			], 200);
		}
	}
	// sub category manage
	
	//get
	public function subCategoryManage()
    {
		$category = Category::select('id','categoryname')->whereIn('status', array('active'))->get();
		$subcategory = Subcategory::whereIn('status', array('active','deactive'))->get();
        return view('admin.subcategorymanage',['subcategories'=>$subcategory,'category'=>$category]);
    }
	
	public function addSubCategory(Request $request){
		$validator = \Validator::make($request->all(),[
            'subcategoryname' => 'string|required|min:1',
        ]);
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createby = Auth::user()->role;
			$subcategory = new Subcategory;
			$subcategory->subcategoryname = $request->subcategoryname;
			$subcategory->createdby = $createby;
			$subcategory->categoryid = $request->categoryid;
			$subcategory->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'subcategory saved successfully!'
			], 200);	
		}
	}
	//update Category
	
	public function updateSubCategory(Request $request)
	{
		$validator = \Validator::make($request->all(),[
            'subcategoryname' => 'string|required|min:1',
        ]);
		
		$subcateId = (int)$request->editsubcateid ?? '';
		$subcategoryname = $request->subcategoryname ?? '';
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$subcategory = Subcategory::find($subcateId);
			$subcategory->subcategoryname = $subcategoryname;
			$subcategory->categoryid = $request->categoryid;
			$subcategory->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'Subcategory update successfully!'
			], 200);	
		}
		
	}
	public function changeSubCategoryStatus(Request $request){
		$subcateId = (int)$request->subcateid ?? '';
		$subcategory = Subcategory::find($subcateId);
		$status = '';
		if($subcategory->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$subcategory->status = $status;
		$subcategory->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	public function deleteSubCategory(Request $request){
		$subcateId = (int)$request->subcateid ?? '';
		$subcategory = Subcategory::find($subcateId);
		if ($subcategory && $subcategory->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'subcategory deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'subcategory not found!'
			], 200);
		}
	}
	//get notice
	public function noticeManage()
    {
		$notice = Notice::whereIn('status', array('active','deactive'))->get();
        return view('admin.noticemanage',['notices'=>$notice]);
    }
	
	//add Notice
	public function addNotice(Request $request){
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:1',
            'notice' => 'string|required|min:1',
        ]);
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createby = Auth::user()->role;
			$notice = new Notice;
			$notice->title = $request->title;
			$notice->createdby = $createby;
			$notice->noticefor = $request->noticefor;
			$notice->notice = $request->notice;
			$notice->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'notice saved successfully!'
			], 200);	
		}
	}
	//update notice record
	
	public function updateNotice(Request $request)
	{
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:1',
            'notice' => 'string|required|min:1',
        ]);
		
		$noticeid = (int)$request->editnoticeid ?? '';
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$notice = Notice::find($noticeid);
			$notice->title = $request->title;
			$notice->noticefor = $request->noticefor;
			$notice->notice = $request->notice;
			$notice->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'Notice update successfully!'
			], 200);	
		}
		
	}
	//change notice status
	public function changeNoticeStatus(Request $request){
		$noticeId = (int)$request->noticeid ?? '';
		$notice = Notice::find($noticeId);
		$status = '';
		if($notice->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$notice->status = $status;
		$notice->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	public function deleteNotice(Request $request){
		$noticeId = (int)$request->noticeid ?? '';
		$notice = Notice::find($noticeId);
		if ($notice && $notice->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'notice deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'notice not found!'
			], 200);
		}
	}
	//get subject
	public function subjectManage()
    {
		$subjectData = array();
		$subject = Subject::whereIn('status', array('active','deactive'))->get();
		if(isset($subject) && $subject){
			foreach($subject as $key=>$sub){
				$subjectid = $sub->id;
				$subjectname = $sub->subjectname;
				$status = $sub->status;
				$createdby = $sub->createdby;
				$subjectData[$key]['subjectid'] = $subjectid;
				$subjectData[$key]['subjectname'] = $subjectname;
				$subjectData[$key]['subjectstatus'] = $status;
				$subjectData[$key]['createdby'] = $createdby;
				$chapter = Chapter::where('subject_id','=',$subjectid)->get();
				if(isset($chapter) && $chapter){
					foreach($chapter as $chp){
						$chapterid = $chp->id;	
						$chaptername = $chp->chaptername;	
						$subject_id = $chp->subject_id;
						$subjectData[$key]['chapter'][]=array(
						"chaptername"=>$chaptername,
						"chapterid"=>$chapterid,
						"subject_id"=>$subject_id,
						);	
					}
				}
			}
		}
	
		return view('admin.subjectmanage',['subjects'=>$subjectData]);
    }
	//add Subject
	public function addSubject(Request $request){
		$validator = \Validator::make($request->all(),[
            'subjectname' => 'string|required|min:1',
            
        ]);
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createby = Auth::user()->role;
			$subject = new Subject;
			$subject->subjectname = $request->subjectname;
			$subject->createdby = $createby;
			$subject->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'subject saved successfully!'
			], 200);	
		}
	}
	//update subject record
	
	public function updateSubject(Request $request)
	{
		$validator = \Validator::make($request->all(),[
            'subjectname' => 'string|required|min:1',
            
        ]);
		
		$subjectid = (int)$request->editsubjectid ?? '';
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$subject = Subject::find($subjectid);
			$subject->subjectname = $request->subjectname;
			$subject->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'subject update successfully!'
			], 200);	
		}
	}
	//change notice status
	public function changeSubjectStatus(Request $request){
		$subjectId = (int)$request->subjectid ?? '';
		$subject = Subject::find($subjectId);
		$status = '';
		if($subject->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$subject->status = $status;
		$subject->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	public function deleteSubject(Request $request){
		$subjectId = (int)$request->subjectid ?? '';
		$subject = Subject::find($subjectId);
		if ($subject && $subject->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'subject deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'subject not found!'
			], 200);
		}
	}
	
	//add Subject chapter
	public function addSubjectChapter(Request $request){
		$validator = \Validator::make($request->all(),[
            'subjectchaptername' => 'string|required|min:1',
            
        ]);
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createby = Auth::user()->role;
			$chapter = new Chapter;
			$chapter->chaptername = $request->subjectchaptername;
			$chapter->createdby = $createby;
			$chapter->subject_id = $request->chaptersubjectid;
			$chapter->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'subject chapter saved successfully!'
			], 200);	
		}
	}
	public function updateSubjectChapter(Request $request)
	{
		$validator = \Validator::make($request->all(),[
            'subjectchaptername' => 'string|required|min:1',
            
        ]);
		
		$chapterid = (int)$request->chapterid ?? '';
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$chapter = Chapter::find($chapterid);
			$chapter->chaptername = $request->subjectchaptername;
			$chapter->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'subject chapter update successfully!'
			], 200);	
		}
	}
	public function deleteSubjectChapter(Request $request){
		$chapterid = (int)$request->chapterid ?? '';
		$chapter = Chapter::find($chapterid);
		if ($chapter && $chapter->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'chapter deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'chapter not found!'
			], 200);
		}
	}
	//get Upcomming exam
	public function upcommingexamManage()
    {
		$upexamp = Upcommingexam::whereIn('status', array('active','deactive'))->get();
        return view('admin.upcommingexammanage',['upexamp'=>$upexamp]);
    }
	public function viewupcommingFile(Request $request){
		$upexamid = $request->id ?? '';
		$uploadfile = '';
		if($upexamid != ''){
			$upexam = Upcommingexam::find($upexamid);
			$uploadfile = $upexam->uploadfile ?? '';
		}
		return view('admin.viewupcommingfile',['uploadfile'=>$uploadfile]);
	}
	// add Upcomming exam
	public function addUpexam(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:3',
            'description' => 'string|required|min:3',
            'startdate' =>'required',
            'enddate' =>'required',
            //'upexamfile' =>'required',
        ]);
		$upexamfile = '';
		if($files=$request->file('upexamfile')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$upexamfile =$name;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createby = Auth::user()->role;
			$upexam = new Upcommingexam;
			$upexam->title = $request->title;
			$upexam->description = $request->description;
			$upexam->startdate = $request->startdate;
			$upexam->enddate = $request->enddate;
			$upexam->applicationmode = $request->applicationmode;
			$upexam->uploadfile = $upexamfile;
			$upexam->createdby = $createby;
			$upexam->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'User saved successfully!'
			], 200);	
		}
    }
	//update upcomming exam
	public function updateUpexam(Request $request)
	{
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:3',
            'description' => 'string|required|min:3',
            'startdate' =>'required',
            'enddate' =>'required',
            //'upexamfile' =>'required',
        ]);
		$upexamfile = '';
		if($files=$request->file('upexamfile')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$upexamfile =$name;
		}else{
			$upexamfile = $request->upexamuploadfile ?? '';
		}
		$upexamid = (int)$request->upexamid ?? '';
		$title = $request->title ?? '';
		$description = $request->description ?? '';
		$startdate = $request->startdate ?? '';
		$enddate = $request->enddate ?? '';
		$applicationmode = $request->applicationmode ?? '';
		
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createby = Auth::user()->role;
			$upexam = Upcommingexam::find($upexamid);
			$upexam->title = $title;
			$upexam->description = $description;
			$upexam->startdate = $startdate;
			$upexam->enddate = $enddate;
			$upexam->applicationmode = $applicationmode;
			$upexam->uploadfile = $upexamfile;
			$upexam->createdby = $createby;
			$upexam->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'upcomming exam update successfully!'
			], 200);	
		}	
	}
	//delete upcomming exam
	public function deleteUpexam(Request $request){
		$upexamid = (int)$request->upexamid ?? '';
		$upexam = Upcommingexam::find($upexamid);
		if ($upexam && $upexam->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'exam deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'exam not found!'
			], 200);
		}
	}
	//change upcomming exam status
	public function changeUpexamstatus(Request $request){
		$upexamid = (int)$request->upexamid ?? '';
		$upexam = Upcommingexam::find($upexamid);
		$status = '';
		if($upexam->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$upexam->status = $status;
		$upexam->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	
	//manage student
	public function studentManage()
    {
		$student = Student::whereIn('status', array('active','deactive'))->get();
        return view('admin.studentmanage',['students'=>$student]);
    }
	//get student form
	public function addStudent()
    {
        return view('admin.addstudent');
    }
	//add student form
	public function submitStudent(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'student_name' => 'string|required|min:3',
            'email' => 'string|email|required|unique:students',
            'gender' =>'required',
            'dateofbirth' =>'string',
            'contactnumber' =>'string',
            'batch' =>'string',
        ]);
		$student_imageName = '';
		if($files=$request->file('student_image')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/student',$name);  
			$student_imageName=$name;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$student = new Student;
			$student->student_image = $student_imageName;
			$student->student_name = $request->student_name;
			$student->student_father_name = $request->father_name;
			$student->student_father_occupation = $request->studenr_father_occupation;
			$student->gender = $request->gender;
			$student->dateofbirth = $request->dateofbirth;
			$student->contact_number = $request->contactnumber;
			$student->email = $request->email;
			$student->address = $request->address;
			$student->batch_information = $request->batchinfo;
			$student->batch = $request->batch;
			$student->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'User saved successfully!'
			], 200);	
		}
    }
	//update student
	public function updateStudent(Request $request)
	{
		$validator = \Validator::make($request->all(),[
            'student_name' => 'string|required|min:3',
            'email' => 'string|email|required',
            'gender' =>'required',
            'dateofbirth' =>'string',
            'contactnumber' =>'string',
            'batch' =>'string',
        ]);
		$student_imageName = '';
		if($files=$request->file('student_image')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$student_imageName =$name;
		}else{
			$student_imageName = $request->studentedit_image ?? '';
		}
		$studentid = (int)$request->studentid ?? '';
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$student = Student::find($studentid);
			$student->student_image = $student_imageName;
			$student->student_name = $request->student_name;
			$student->student_father_name = $request->father_name;
			$student->student_father_occupation = $request->studenr_father_occupation;
			$student->gender = $request->gender;
			$student->dateofbirth = $request->dateofbirth;
			$student->contact_number = $request->contactnumber;
			$student->email = $request->email;
			$student->address = $request->address;
			$student->batch_information = $request->batchinfo;
			$student->batch = $request->batch;
			$student->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'Student update successfully!',
					
			], 200);	
		}
		
	}
	//delete student
	public function deleteStudent(Request $request){
		$studentid = (int)$request->studentid ?? '';
		$student = Student::find($studentid);
		if ($student && $student->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'student deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'student not found!'
			], 200);
		}
	}
	//edit get student
	public function editStudent($studentid){
		$student = Student::find($studentid);
		return view('admin.editstudent',['student'=>$student]);
	}
	//change upcomming exam status
	public function changeStudentstatus(Request $request){
		$studentid = (int)$request->studentid ?? '';
		$student = Student::find($studentid);
		$status = '';
		if($student->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$student->status = $status;
		$student->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	
	//extra classes manage
	public function extraClassesManage()
    {
		$exclass = Extraclass::whereIn('status', array('active','deactive'))->get();
        return view('admin.manageextraclasses',['extraclass'=>$exclass]);
    }
	//add extra class
	public function addExtraClass(Request $request){
		$validator = \Validator::make($request->all(),[
            'teacher' => 'string|required',
            'batch' => 'required',
            'date' =>'required|required',
            'starttime' =>'string|required',
            'endtime' =>'string|required',
            'description' =>'string|required',
        ]);
		
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$exclass = new Extraclass;
			$exclass->teacher = $request->teacher;
			$exclass->batch = implode(',',$request->batch);
			$exclass->date = $request->date;
			$exclass->starttime = $request->starttime;
			$exclass->endtime = $request->endtime;
			$exclass->description = $request->description;
			$exclass->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'extra class save successfully!'
			], 200);
		}	
	}
	//add extra class
	public function updateExtraClass(Request $request){
		$validator = \Validator::make($request->all(),[
            'teacher' => 'string|required',
            'batch' => 'required',
            'date' =>'required|required',
            'starttime' =>'string|required',
            'endtime' =>'string|required',
            'description' =>'string|required',
        ]);
		
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$extclassid = $request->extclassid;
			$exclass = Extraclass::find($extclassid);
			$exclass->teacher = $request->teacher;
			$exclass->batch = implode(',',$request->batch);
			$exclass->date = $request->date;
			$exclass->starttime = $request->starttime;
			$exclass->endtime = $request->endtime;
			$exclass->description = $request->description;
			$exclass->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'extra class save successfully!'
			], 200);
		}	
	}
	
	//delete extra class
	public function deleteExtraClass(Request $request){
		$deletextraclassid = (int)$request->deletextraclassid ?? '';
		$extclass = Extraclass::find($deletextraclassid);
		if ($extclass && $extclass->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'Extra class deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'Extra class not found!'
			], 200);
		}
	}
	//change upcomming exam status
	public function changeExtraClassstatus(Request $request){
		$extclassid = (int)$request->extclassid ?? '';
		$extclass = Extraclass::find($extclassid);
		$status = '';
		if($extclass->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$extclass->status = $status;
		$extclass->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	//teacher manage
	public function teacherManage()
    {
		$teacher = Teacher::whereIn('status', array('active','deactive'))->get();
        return view('admin.manageteacher',['teachers'=>$teacher]);
    }
	public function addTeacher(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'name' => 'string|required|min:3',
            'email' => 'string|email|required|unique:teachers',
            'gender' =>'required',
            'password' =>'string|required|min:3',
            'subject' =>'required',
            'moduleaccess' =>'required',
        ]);
		$teacherImage = '';
		if($files=$request->file('teacherImage')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/teacher',$name);  
			$teacherImage =$name;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createby = Auth::user()->role;
			$teacher = new Teacher;
			$teacher->name = $request->name;
			$teacher->email = $request->email;
			$teacher->gender = $request->gender;
			$teacher->password = Hash::make($request->password);
			$teacher->education = $request->education;
			$teacher->subject = implode(',',$request->subject);
			$teacher->moduleaccess = implode(',',$request->moduleaccess);
			$teacher->teacherimage = $teacherImage;
			$teacher->createdby = $createby;
			$teacher->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Teacher saved successfully!'
			], 200);	
		}
    }
	public function updateTeacher(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'name' => 'string|required|min:3',
            'email' => 'string|email|required',
            'gender' =>'required',
           // 'password' =>'string|required|min:3',
            //'subject' =>'required',
            //'moduleaccess' =>'required',
        ]);
		$teacherImage = '';
		if($files=$request->file('teacherImage')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/teacher',$name);  
			$teacherImage =$name;
		}else{
			$teacherImage =$request->editteacherimage;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$teacherid = $request->teacherid;
			$teacher = Teacher::find($teacherid);
			$teacher->name = $request->name;
			$teacher->email = $request->email;
			$teacher->gender = $request->gender;
			$teacher->education = $request->education;
			//$teacher->subject = is_array($request->subject)?implode(',',$request->subject):$request->subject;
			//$teacher->moduleaccess = is_array($request->moduleaccess)?implode(',',$request->moduleaccess):$request->moduleaccess;
			$teacher->teacherimage = $teacherImage;
			$teacher->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Teacher saved successfully!'
			], 200);	
		}
    }
	//delete teacher 
	public function deleteTeacher(Request $request){
		$teacherid = (int)$request->teacherid ?? '';
		$teacher = Teacher::find($teacherid);
		if ($teacher && $teacher->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'Teacher deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'Teacher not found!'
			], 200);
		}
	}
	
	//change teacher status
	public function changeTeacherStatus(Request $request){
		$teacherid = (int)$request->teacherid ?? '';
		$teacher = Teacher::find($teacherid);
		$status = '';
		if($teacher->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$teacher->status = $status;
		$teacher->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	
	//book manage
	public function bookManage()
    {
		$book = Book::whereIn('status', array('active','deactive'))->get();
        return view('admin.bookmanage',['books'=>$book]);
    }
	//add Book
	public function addBook(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:3',
            'batch' => 'required',
            'subject' =>'required',
            //'bookfile' =>'required',
        ]);
		$fileName = '';
		if($files=$request->file('bookfile')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$fileName =$name;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createdby = Auth::user()->role;
			$book = new Book;
			$book->title = $request->title;
			$book->batch = $request->batch;
			$book->subject = $request->subject;
			$book->bookfile = $fileName;
			$book->createdby = $createdby;
			$book->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Book saved successfully!'
			], 200);	
		}
    }
	//update Book
	//add Book
	public function updateBook(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:3',
            'batch' => 'required',
            'subject' =>'required',
            //'bookfile' =>'required',
        ]);
		$fileName = '';
		if($files=$request->file('bookfile')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$fileName =$name;
		}else{
			$fileName = $request->bookfilename;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$bookid = $request->bookid;
			$book = Book::find($bookid);
			$book->title = $request->title;
			$book->batch = $request->batch;
			$book->subject = $request->subject;
			$book->bookfile = $fileName;
			$book->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Book saved successfully!'
			], 200);	
		}
    }
	//delete teacher 
	public function deleteBook(Request $request){
		$bookid = (int)$request->bookid ?? '';
		$book = Book::find($bookid);
		if ($book && $book->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'Book deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'Book not found!'
			], 200);
		}
	}
	
	//change teacher status
	public function changeBookStatus(Request $request){
		$bookid = (int)$request->bookid ?? '';
		$book = Book::find($bookid);
		$status = '';
		if($book->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$book->status = $status;
		$book->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	
	//note manage
	public function noteManage()
    {
		$note = Note::whereIn('status', array('active','deactive'))->get();
        return view('admin.notemanage',['notes'=>$note]);
    }
	//add Note
	public function addNote(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:3',
            'batch' => 'required',
            'subject' =>'required',
            'chapter' =>'required',
            //'bookfile' =>'required',
        ]);
		$fileName = '';
		if($files=$request->file('notefile')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$fileName =$name;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createdby = Auth::user()->role;
			$note = new Note;
			$note->title = $request->title;
			$note->batch = $request->batch;
			$note->subject = $request->subject;
			$note->chapter = $request->chapter;
			$note->notefile = $fileName;
			$note->createdby = $createdby;
			$note->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Note saved successfully!'
			], 200);	
		}
    }
	//update chapter
	public function updateNote(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:3',
            'batch' => 'required',
            'subject' =>'required',
            'chapter' =>'required',
            //'bookfile' =>'required',
        ]);
		$fileName = '';
		if($files=$request->file('notefile')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$fileName =$name;
		}else{
			$fileName = $request->notefilename;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$noteid = $request->noteid;
			$note = Note::find($noteid);
			$note->title = $request->title;
			$note->batch = $request->batch;
			$note->subject = $request->subject;
			$note->chapter = $request->chapter;
			$note->notefile = $fileName;
			$note->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Note saved successfully!'
			], 200);	
		}
    }
	//delete note 
	public function deleteNote(Request $request){
		$noteid = (int)$request->noteid ?? '';
		$note = Note::find($noteid);
		if ($note && $note->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'Note deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'Note not found!'
			], 200);
		}
	}
	
	//change nots status
	public function changeNoteStatus(Request $request){
		$noteid = (int)$request->noteid ?? '';
		$note = Note::find($noteid);
		$status = '';
		if($note->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$note->status = $status;
		$note->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	
	
	//old paper manage
	public function oldpaperManage()
    {
		$oldpaper = Oldpaper::whereIn('status', array('active','deactive'))->get();
        return view('admin.oldpapermanage',['oldpapers'=>$oldpaper]);
    }
	//add old paper
	public function addOldpaper(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:3',
            'batch' => 'required',
            'subject' =>'required',
            //'bookfile' =>'required',
        ]);
		$fileName = '';
		if($files=$request->file('oldpaperfile')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$fileName =$name;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createdby = Auth::user()->role;
			$oldpaper = new Oldpaper;
			$oldpaper->title = $request->title;
			$oldpaper->batch = $request->batch;
			$oldpaper->subject = $request->subject;
			$oldpaper->oldpaperfile = $fileName;
			$oldpaper->createdby = $createdby;
			$oldpaper->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Old paper saved successfully!'
			], 200);	
		}
    }
	//update Book
	public function updateOldpaper(Request $request)
    {        
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:3',
            'batch' => 'required',
            'subject' =>'required',
            //'bookfile' =>'required',
        ]);
		$fileName = '';
		if($files=$request->file('oldpaperfile')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads',$name);  
			$fileName =$name;
		}else{
			$fileName = $request->oldpaperfilename;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$oldpaperid = $request->oldpaperid;
			$oldpaper = Oldpaper::find($oldpaperid);
			$oldpaper->title = $request->title;
			$oldpaper->batch = $request->batch;
			$oldpaper->subject = $request->subject;
			$oldpaper->oldpaperfile = $fileName;
			$oldpaper->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Old paper saved successfully!'
			], 200);	
		}
    }
	//delete old paper 
	public function deleteOldpaper(Request $request){
		$oldpaperid = (int)$request->oldpaperid ?? '';
		$oldpaper = Oldpaper::find($oldpaperid);
		if ($oldpaper && $oldpaper->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'Old paper deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'Old paper not found!'
			], 200);
		}
	}
	
	//change old paper status
	public function changeOldpaperStatus(Request $request){
		$oldpaperid = (int)$request->oldpaperid ?? '';
		$oldpaper = Oldpaper::find($oldpaperid);
		$status = '';
		if($oldpaper->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$oldpaper->status = $status;
		$oldpaper->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	
	//gallery manage
	public function galleryManage()
    {
		$gallery = Gallery::whereIn('status', array('active','deactive'))->get();
        return view('admin.managegallery',['galleries'=>$gallery]);
    }
	//add Gallery
	public function addGallery(Request $request){
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:3',
        ]);
		$imageName = '';
		$videoName = '';
		if($files=$request->file('gimage')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/gallery/image',$name);  
			$imageName =$name;
		}
		if($files=$request->file('gvideo')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/gallery/video',$name);  
			$videoName =$name;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createdby = Auth::user()->role;
			$source = $request->source ?? '';
			$youtubeurl = $request->youtubeurl ?? '';
			$gallery = new Gallery;
			$gallery->title = $request->title;
			$gallery->type = $request->type;
			$gallery->source = $source;
			$gallery->image = $imageName;
			$gallery->video = $videoName;
			$gallery->url = $youtubeurl;
			$gallery->createdby = $createdby;
			$gallery->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'gallery saved successfully!'
			], 200);	
		}
	}
	//update Gallery
	public function updateGallery(Request $request){
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required|min:3',
        ]);
		$imageName = '';
		$videoName = '';
		if($files=$request->file('gimage')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/gallery/image',$name);  
			$imageName =$name;
		}else{
			$imageName =$request->galleryimage;	
		}
		if($files=$request->file('gvideo')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/gallery/video',$name);  
			$videoName =$name;
		}else{
			$videoName =$request->galleryvideo;	
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$source = $request->source ?? '';
			$youtubeurl = $request->youtubeurl ?? '';
			$galleryid = $request->galleryid ?? 0;
			$gallery = Gallery::find($galleryid);
			$gallery->title = $request->title;
			$gallery->type = $request->type;
			$gallery->source = $source;
			$gallery->image = $imageName;
			$gallery->video = $videoName;
			$gallery->url = $youtubeurl;
			$gallery->save();
			return response()->json([
				'status' => 'success', 
				'message' => 'gallery saved successfully!'
			], 200);	
		}
	}
	//delete gallery 
	public function deleteGallery(Request $request){
		$galleryid = (int)$request->galleryid ?? '';
		$gallery = Gallery::find($galleryid);
		if ($gallery && $gallery->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'gallery deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'gallery not found!'
			], 200);
		}
	}
	
	//change gallery status
	public function changeGalleryStatus(Request $request){
		$galleryid = (int)$request->galleryid ?? '';
		$gallery = Gallery::find($galleryid);
		$status = '';
		if($gallery->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$gallery->status = $status;
		$gallery->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	
	//video manage
	public function videoManage()
    {
		$video = Video::whereIn('status', array('active','deactive'))->get();
        return view('admin.managevideo',['videos'=>$video]);
    }
	//add Video
	public function addVideo(Request $request){
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required',
            'batch' => 'required',
            'subject' => 'required',
            'chapter' => 'required',
        ]);
		$videoName = '';
		if($files=$request->file('video')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/videos/video',$name);  
			$videoName =$name;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createdby = Auth::user()->role;
			$source = $request->source ?? '';
			$youtubeurl = $request->url ?? '';
			$video = new Video;
			$video->title = $request->title;
			$video->batch = $request->batch;
			$video->subject = $request->subject;
			$video->chapter = $request->chapter;
			$video->video = $videoName;
			$video->url = $youtubeurl;
			$video->source = $source;
			$video->description = $request->description;
			$video->createdby = $createdby;
			$video->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'video saved successfully!'
			], 200);	
		}
	}
	//update Video
	public function updateVideo(Request $request){
		$validator = \Validator::make($request->all(),[
            'title' => 'string|required',
            'batch' => 'required',
            'subject' => 'required',
            'chapter' => 'required',
        ]);
		$videoName = '';
		if($files=$request->file('video')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/videos/video',$name);  
			$videoName =$name;
		}else{
			$videoName = $request->editvdvideoname;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$videoid = $request->videoid ?? '';
			$source = $request->source ?? '';
			$youtubeurl = $request->url ?? '';
			$video = Video::find($videoid);
			$video->title = $request->title;
			$video->batch = $request->batch;
			$video->subject = $request->subject;
			$video->chapter = $request->chapter;
			$video->video = $videoName;
			$video->url = $youtubeurl;
			$video->source = $source;
			$video->description = $request->description;
			$video->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'video saved successfully!'
			], 200);	
		}
	}
	
	//delete video 
	public function deleteVideo(Request $request){
		$videoid = (int)$request->videoid ?? '';
		$video = Video::find($videoid);
		if ($video && $video->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'video deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'video not found!'
			], 200);
		}
	}
	
	//change video status
	public function changeVideoStatus(Request $request){
		$videoid = (int)$request->videoid ?? '';
		$video = Video::find($videoid);
		$status = '';
		if($video->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$video->status = $status;
		$video->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	
	//site settings
	public function siteSettings()
    {
		$sitesetting = Sitesettings::whereIn('status', array('active','deactive'))->first();
        return view('admin.sitesettings',['sitesettings'=>$sitesetting]);
    }
	
	//update Site setting
	public function updateSiteSettings(Request $request){
		$validator = \Validator::make($request->all(),[
            'sitetitle' => 'string|required|min:3',
            'siteauthorname' => 'string|required|min:3',
            'sitekeywords' => 'string|required|min:3',
            'sitedescription' => 'string|required|min:3',
            'enrollmentword' => 'string|required|min:3',
            'copyrighttext' => 'string|required|min:3',
            
        ]);
		$feviconName = '';
		$sitelogoName = '';
		$siteminilogoName = '';
		$sitepreloaderName = '';
		if($files=$request->file('feviconicon')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/sitesetting',$name);  
			$feviconName =$name;
		}else{
			$feviconName =$request->editfeviconicon ?? '';
		}
		if($files=$request->file('sitelogo')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/sitesetting',$name);  
			$sitelogoName =$name;
		}else{
			$sitelogoName =$request->editsitelogo ?? '';
		}
		if($files=$request->file('siteminilogo')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/sitesetting',$name);  
			$siteminilogoName =$name;
		}else{
			$siteminilogoName =$request->editsiteminilogo ?? '';
		}
		if($files=$request->file('sitepreloader')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/sitesetting',$name);  
			$sitepreloader =$name;
		}else{
			$sitepreloader =$request->editsitepreloader ?? '';
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$sitesetingid = $request->sitesetingid ?? '';
			$createdby = Auth::user()->role;
			$sitesetting = new Sitesettings;
			if(isset($sitesetingid) && $sitesetingid !=''){
				$sitesetting = Sitesettings::find($sitesetingid);
			}
			$sitesetting->feviconicon = $feviconName;
			$sitesetting->sitelogo = $sitelogoName;
			$sitesetting->siteminilogo = $siteminilogoName;
			$sitesetting->sitepreloader = $sitepreloader;
			$sitesetting->sitetitle = $request->sitetitle;
			$sitesetting->siteauthorname = $request->siteauthorname;
			$sitesetting->sitekeywords = $request->sitekeywords;
			$sitesetting->sitedescription = $request->sitedescription;
			$sitesetting->enrollmentword = $request->enrollmentword;
			$sitesetting->copyrighttext = $request->copyrighttext;
			$sitesetting->createdby = $createdby;
			$sitesetting->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Site settings saved successfully!'
			], 200);	
		}
	}
	//site payment settings
	public function paymentSettings()
    {
		$paymentsetting = Paymentsettings::whereIn('status', array('active','deactive'))->first();
        return view('admin.paymentsettings',['paymentsettings'=>$paymentsetting]);
    }
	
	//update Site setting
	public function updatepaymentSettings(Request $request){
		$validator = \Validator::make($request->all(),[
            'paymentcurrency' => 'string|required',
            'razorpaykeyid' => 'string|required',
            'razorpaysecretkey' => 'string|required',
            'paypalclientid' => 'string|required',
            'paypalsandboxaccount' => 'string|required',
        ]);		
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$paymentsettingid = $request->paymentsettingid ?? '';
			$createdby = Auth::user()->role;
			$paymentsetting = new Paymentsettings;
			if(isset($paymentsettingid) && $paymentsettingid !=''){
				$paymentsetting = Paymentsettings::find($paymentsettingid);
			}
			$paymentsetting->currency = $request->paymentcurrency;
			$paymentsetting->paymenttype = $request->paymenttype;
			$paymentsetting->razorpaykeyid = $request->razorpaykeyid;
			$paymentsetting->razorpaysecretkey = $request->razorpaysecretkey;
			$paymentsetting->paypalclientid = $request->paypalclientid;
			$paymentsetting->paypalsandboxaccount = $request->paypalsandboxaccount;
			$paymentsetting->createdby = $createdby;
			$paymentsetting->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Payment settings saved successfully!'
			], 200);	
		}
	}
	
	//site email settings
	public function emailSettings()
    {
		$emailsetting = Emailsettings::whereIn('status', array('active','deactive'))->first();
        return view('admin.emailsettings',['emailsettings'=>$emailsetting]);
    }
	
	//update email setting
	public function updateEmailSettings(Request $request){
		$validator = \Validator::make($request->all(),[
            'smtpusername' => 'string|required',
            'smtppassword' => 'string|required',
            'smtphost' => 'string|required',
            'smtpport' => 'string|required',
        ]);		
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$emailsettingid = $request->emailsettingid ?? '';
			$createdby = Auth::user()->role;
			$emailsetting = new Emailsettings;
			if(isset($emailsettingid) && $emailsettingid !=''){
				$emailsetting = Emailsettings::find($emailsettingid);
			}
			$emailsetting->servertype = $request->servertype;
			$emailsetting->smtpencrypted = $request->smtpencrypted;
			$emailsetting->smtpusername = $request->smtpusername;
			$emailsetting->smtppassword = $request->smtppassword;
			$emailsetting->smtphost = $request->smtphost;
			$emailsetting->smtpport = $request->smtpport;
			$emailsetting->createdby = $createdby;
			$emailsetting->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Email settings saved successfully!'
			], 200);	
		}
	}
	
	//Certificate setting
	public function certificateSettings()
    {
		$certificate = Certificate::whereIn('status', array('active','deactive'))->first();
        return view('admin.certificate',['certificates'=>$certificate]);
    }
	
	//update certificate setting
	public function updatecertificatesettings(Request $request){
		$validator = \Validator::make($request->all(),[
            'heading' => 'string|required|min:3',
            'subheading' => 'string|required|min:3',
            'certificatetemplate' => 'string|required',
            'title' => 'string|required|min:3',
            'description' => 'string|required|min:3',
        ]);	
		$certificatelogoName = '';
		$signatureName = '';
		if($files=$request->file('certificatelogo')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/certificate',$name);  
			$certificatelogoName =$name;
		}else{
			$certificatelogoName =$request->editcertificatelogo ?? '';
		}
		if($files=$request->file('signature')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/certificate',$name);  
			$signatureName =$name;
		}else{
			$signatureName =$request->editsignature ?? '';
		}	
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$certificateid = $request->certificateid ?? '';
			$createdby = Auth::user()->role;
			$certificate = new Certificate;
			if(isset($certificateid) && $certificateid !=''){
				$certificate = Certificate::find($certificateid);
			}
			$certificate->certificatelogo = $certificatelogoName;
			$certificate->signature = $signatureName;
			$certificate->heading = $request->heading;
			$certificate->subheading = $request->subheading;
			$certificate->title = $request->title;
			$certificate->certificatetemplate = $request->certificatetemplate;
			$certificate->description = $request->description;
			$certificate->createdby = $createdby;
			$certificate->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Payment settings saved successfully!'
			], 200);	
		}
	}
	
	//manage batch
	public function batchManage()
    {
		$batch = Batch::whereIn('status', array('active','deactive'))->get();
        return view('admin.batchmanage',['batches'=>$batch]);
    }
	//get batch form
	public function addBatch()
    {
		
        return view('admin.addbatch');
    }
	//get category by select2
	public function getCategoty(Request $request){
		$category = Category::whereIn('status', array('active','deactive'))->get();
		$response = array();
		foreach($category as $catdt){
			$response[] = array(
              "id"=>$catdt->id,
              "text"=>$catdt->categoryname
         );
		}
		return response()->json($response);
	}
	//get category by select2
	public function getSubcategoty(Request $request){
		$cateid = $request->cateid;
		$subcategory = Subcategory::where('categoryid',$cateid)->get();
		$response = array();
		foreach($subcategory as $catdt){
			$response[] = array(
              "id"=>$catdt->id,
              "text"=>$catdt->subcategoryname
         );
		}
		return response()->json($response);
	}
	//get subject by select2
	public function getSubject(Request $request){
		$subject = Subject::whereIn('status', array('active','deactive'))->get();
		$response = array();
		foreach($subject as $subdt){
			$response[] = array(
              "id"=>$subdt->id,
              "text"=>$subdt->subjectname
         );
		}
		return response()->json($response);
	}
	//get chapter by select2
	public function getChapter(Request $request){
		$subjectid = $request->subjectid;
		$chapter = Chapter::where('subject_id',$subjectid)->get();
		$response = array();
		foreach($chapter as $chdt){
			$response[] = array(
              "id"=>$chdt->id,
              "text"=>$chdt->chaptername
         );
		}
		return response()->json($response);
	}
	//get subject by select2
	public function getTeacher(Request $request){
		$teacher = Teacher::whereIn('status', array('active','deactive'))->get();
		$response = array();
		foreach($teacher as $teadt){
			$response[] = array(
              "id"=>$teadt->id,
              "text"=>$teadt->name
         );
		}
		return response()->json($response);
	}
	//insert batch record
	
	public function insertBatch(Request $request){
		$validator = \Validator::make($request->all(),[
            'batch_name' => 'string|required',

        ]);
		$batchImageName = '';
		if($files=$request->file('batch_image')){  
			$name=$files->getClientOriginalName();  
			$files->move('uploads/batches/',$name);  
			$batchImageName =$name;
		}
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$createdby = Auth::user()->role;
			$batch_category = $request->batch_category ?? '';
			$batch_subcategory = $request->batch_subcategory ?? '';
			$batch_name = $request->batch_name ?? '';
			$start_date = $request->start_date ?? '';
			$end_date = $request->end_date ?? '';
			$start_time = $request->start_time ?? '';
			$end_time = $request->end_time ?? '';
			$batch_type = $request->batch_type ?? '';
			$description = $request->description ?? '';
			$featureheader = $request->featureheader ?? '';
			$feature = $request->feature ?? '';
			$batchv_subject = $request->batch_subject ?? '';
			$batch_chapter = $request->batch_chapter ?? '';
			$batch_teacher = $request->batch_teacher ?? '';
			$subject_start_date = $request->subject_start_date ?? '';
			$subject_end_date = $request->subject_end_date ?? '';
			$subject_start_time = $request->subject_start_time ?? '';
			$subject_end_time = $request->subject_end_time ?? '';
			$batch = new Batch;
			$batch->category_id = $batch_category;
			$batch->sub_category_id = $batch_subcategory;
			$batch->batch_name = $batch_name;
			$batch->start_date = $start_date;
			$batch->end_date = $end_date;
			$batch->start_time = $start_time;
			$batch->end_time = $end_time;
			$batch->batch_type = $batch_type;
			$batch->batch_image = $batchImageName;
			$batch->batch_description = $description;
			$batch->createdby = $createdby;
			$batch->save();
			$batch_id = $batch->id;
			$batch_feature = new Batchfeature;
			$batch_feature->batch_id = $batch_id;
			$batch_feature->heading = $featureheader;
			$batch_feature->feature = $feature;
			$batch_feature->createdby = $createdby;
			$batch_feature->save();
			
			$batch_subject = new Batchsubject;
			$batch_subject->batch_id = $batch_id;
			$batch_subject->teacher_id = $batch_teacher;
			$batch_subject->batch_subject = $batchv_subject;
			$batch_subject->batch_chapter = $batch_chapter;
			$batch_subject->start_subject_date = $subject_start_date;
			$batch_subject->end_subject_date = $subject_end_date;
			$batch_subject->start_subject_time = $subject_start_time;
			$batch_subject->end_subject_time = $subject_end_time;
			$batch_subject->createdby = $createdby;
			$batch_subject->save();
			
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'batch saved successfully!'
			], 200);	
		}
	}
}