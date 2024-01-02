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
use App\Models\Question;
use App\Models\Exam;
use App\Models\Paper;
use App\Models\Sentotp;
use App\Models\Startexam;
use App\Models\Applyleave;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
  
	//get currency
	public function getCurrency(){
		$currency = DB::select('select * from currency');
		return response()->json([
				'status' => 'success',
				'currency' => $currency,				
				'message' => 'Currency list'
			], 200);
	}
	//sent otp
	public function sentOtp(Request $request){
		$mobile = $request->mobile ?? 0;
		$otp = random_int(100000, 999999);
		$fields = array(
		"variables_values" => $otp,
		"route" => "otp",
		"numbers" => $mobile,
	);
	$validator = \Validator::make($request->all(),[
            'mobile' => ['required', 'digits:10'],
    ]);
	if ($validator->fails()){
		    return response()->json([
				'status' => 'error',
				'message' => 'Please enter valid mobile!'
			],200);
		}else{
			$ismobile = Sentotp::where("mobile",$mobile)->first();
			if($ismobile){
				$id = $ismobile->id;
				$sentobj = Sentotp::find($id);
				$sentobj->otp = $otp;
				$sentobj->save();
			}else{
				$sentobj = new Sentotp;
				$sentobj->otp = $otp;
				$sentobj->mobile = $mobile;
				$sentobj->save();
			}
			$curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_SSL_VERIFYHOST => 0,
			  CURLOPT_SSL_VERIFYPEER => 0,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => json_encode($fields),
			  CURLOPT_HTTPHEADER => array(
				"authorization: 35QVEvamzjWIxHpgkD4Yy7sFOLTZnPht1ow8AfNbrCeXJKM6iSSN3BbCghAZwHtFizeaX5WTJ2IsfLrO",
				"accept: */*",
				"cache-control: no-cache",
				"content-type: application/json"
			  ),
			));
			$response = curl_exec($curl);
			$err = curl_error($curl);
			if($err){
				return response()->json([
						'status' => 'error',				
						'message' => 'Otp can not sent'
					], 200);
			}else{
				return response()->json([
						'status' => 'success',				
						'message' => 'Otp send success please check on mobile'
					], 200);
			}
				
			}
	}
	public function verifyOtp(Request $request){
		$mobile = $request->mobile ?? '';
		$otp = $request->otp ?? '';
		$validator = \Validator::make($request->all(),[
            'mobile' => ['required', 'digits:10'],
		]);
		if ($validator->fails()){
				return response()->json([
					'status' => 'error',
					'message' => 'Please enter valid mobile!'
				],200);
		}else{
			$verifyotp = Sentotp::where("mobile",$mobile)->where("otp",$otp)->first();
			if($verifyotp){
				return response()->json([
					'status' => 'success',
					'varifyOtp'=>true,
					'message' => 'Otp verify successfully!'
				],200);
			}else{
				return response()->json([
					'status' => 'error',
					'varifyOtp'=>false,
					'message' => 'Please enter valid otp!'
				],200);
			}
		}	
	}	
	// student sign Up
	public function studentSignup(Request $request){
		$validator = \Validator::make($request->all(),[
            'email' => 'string|email|required|unique:students',
            'mobile' =>'required',
            'password' =>'string|required',
        ]);
		if ($validator->fails()) {
		    return response()->json([
				'status' => 'error',
				'message' => 'Some validation error!'
			],200);
		}else{
			$student = new Student;
			$student->contact_number = $request->mobile;
			$student->email = $request->email;
			$student->password = Hash::make($request->password);
			$student->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Student saved successfully!'
			], 200);	
		}
	}
	// student login
	
	// student sign Up
	public function studentLogin(Request $request){
		$validator = \Validator::make($request->all(),[
            'email' => 'string|email|required',
            'password' =>'string|required',
        ]);
		if ($validator->fails()) {
		    return response()->json([
				'status' => 'error',
				'message' => 'Some validation error!'
			],200);
		}else{
			$email = $request->email;
			$password = $request->password;
			$isstudent = Student::where("email",$request->email)->first();
			if(!$isstudent){
				return response()->json([
					'status' => 'error',
					'varifyuser'=>false,
					'message' => 'Login Fail, please check email'
				],200);
			}
			 if (!Hash::check($password, $isstudent->password)) {
				return response()->json([
					'status' => 'error',
					'varifyuser'=>false,
					'message' => 'Login Fail, pls check password'
				],200);
			 }
				return response()->json([
					'status' => 'success',
					'varifyuser'=>true,
					'data'=>$isstudent,
					'message' => 'Login successfully'
				],200);
		}
	}	
	//studnet logout
	public function studentLogout(Request $request)
    {
        //$request->session()->flush();
        Auth::logout();
        return response()->json([
			'status' => 'success',
			'message' => 'Logout successfully'
		],200);
    }
	//get all batches
	public function getBatches(){
		$batches = Batch::whereIn('status',array('active','deactive'))->get();
		return response()->json([
					'status' => 'success',
					'varifyuser'=>true,
					'data'=>$batches,
					'message' => 'Batch List'
				],200);
	}
	public function getBatchesById($id){
		$batch = Batch::where('id','=',$id)->first();
		return response()->json([
					'status' => 'success',
					'varifyuser'=>true,
					'data'=>$batch,
					'message' => 'list record'
				],200);
	}
	//get all batches
	public function getNotice(){
		$notice = Notice::whereIn('status',array('active'))->get();
		return response()->json([
					'status' => 'success',
					'varifyuser'=>true,
					'data'=>$notice,
					'message' => 'Notice List'
				],200);
	}
	//practice Paper by batch id
	public function getQuestionByPaperid($paperid){
		$qpaper = Paper::select('question_ids','time_duration','negative_marketing_value')->where('id',$paperid)->first();
			$queids = explode(',',$qpaper['question_ids']);
			$time_duration = ((int)$qpaper['time_duration']*60);
			$defaultQue = Question::whereIn('id',$queids)->get();
		return response()->json([
					'status' => 'success',
					'varifyuser'=>true,
					'time_duration'=>$time_duration,
					'question'=>$defaultQue,
					'message' => 'Paper List'
				],200);
	}
	//practice Paper by batch id
	public function practicePaperByBatchid($batchid){
		$paper = Paper::whereIn('status',array('active'))->where('paper_type','practicepaper')->where('batch_id',$batchid)->get();
		$paperQue = array();
		foreach($paper as $demo1){
			$drt = explode(',',$demo1->question_ids);
			$qubydd = Question::whereIn('id',$drt)->get();
			$qudr = array();
			$totalmarsum = 0;
			foreach($qubydd as $pqtd){
				$totalmarsum += $pqtd->add_marks;
			}
			$paperQue[] = array(
				      'paper_id'=>$demo1->id,
				      'paper_name'=>$demo1->paper_name,
				      'total_marks'=>$totalmarsum,
				      'number_of_question'=>$demo1->number_of_question,
				      'time_duration'=>$demo1->time_duration,
				      'negative_marketing_value'=>$demo1->negative_marketing_value,
				      'question_ids'=>$demo1->question_ids,
				);
		}
		return response()->json([
					'status' => 'success',
					'varifyuser'=>true,
					'data'=>$paperQue,
					'message' => 'Paper List'
				],200);
	}
	//practice Paper
	public function practicePaper(){
		$paper = Paper::whereIn('status',array('active'))->where('paper_type','practicepaper')->get();
		return response()->json([
					'status' => 'success',
					'varifyuser'=>true,
					'data'=>$paper,
					'message' => 'Paper List'
				],200);
	}
	//get Paper question
	public function getQuestion(){
		$question = Question::whereIn('status',array('active'))->get();
		return response()->json([
					'status' => 'success',
					'varifyuser'=>true,
					'data'=>$question,
					'message' => 'Question List'
				],200);
	}
	//get question by id
	public function getQuestionById($id){
		$question = Question::where('id','=',$id)->first();
		return response()->json([
					'status' => 'success',
					'varifyuser'=>true,
					'data'=>$question,
					'message' => 'question record'
				],200);
	}
	//start Exam
	public function StartExam(Request $request){
		$rightansarr = [];
		$totalmark = [];
		$totalattemptedmark = [];
		$negativefult = [];
		if($request['attemptqts']){
			$attemptqts = json_decode($request['attemptqts']);
			$questid = array_column($attemptqts,'quid');
			$batch_id = $request['batch_id'];
			$attemptQue = Question::whereIn('id',$questid)->get();
			$qpaper = Paper::select('question_ids','negative_marketing_value')->where('batch_id',$batch_id)->get();
			$queidefult = [];
			foreach($qpaper as $gdt){
				array_push($queidefult,$gdt->question_ids);
				array_push($negativefult,$gdt->negative_marketing_value);
			}
			$queidefult = implode(",",$queidefult);
			$queidefult = explode(",",$queidefult);
			$queidefult = array_unique($queidefult);
			$defaultQue = Question::whereIn('id',$queidefult)->get();
			foreach($defaultQue as $dft){
				$qidf = $dft->id;
				$right_answer = $dft->right_answer;
				array_push($totalmark,$dft->add_marks);
				foreach($attemptqts as $dt){
					$modelid = substr($dt->modelid,0,1);
					$quid = $dt->quid;
					if($quid == $qidf && $right_answer == $modelid){
						array_push($rightansarr,$qidf);
						array_push($totalattemptedmark,$dft->add_marks);
					}
				}
			}	
		}
		$student_id = $request['student_id'];
		$start_time = $request['start_time'];
		$submit_time = $request['submit_time'];
		$start_time_minute = strtotime($start_time);
		$submit_time_minute = strtotime($submit_time);
		$time_taken = round(abs($submit_time_minute - $start_time_minute) / 60,2);;
		$total_marks = array_sum($totalmark);
		$negative_marketing = array_sum($negativefult);
		$examdate = date('Y-m-d');
		$total_questions = $request['total_questions'];
		$total_questions_attempt = $request['total_questions_attempt'];
		$currect_answers = sizeof($rightansarr);
		$wrong_answers = (int)$total_questions_attempt - $currect_answers;
		$percentage = number_format((($currect_answers*100)/$total_questions_attempt),2);
		$result = '';
		if(ceil($percentage) >= 35){
			$result = 'pass';
		}else{
			$result = 'fail';
		}
		$startexamobj = new Startexam;
		$startexamobj->batch_id = $batch_id;
		$startexamobj->student_id = (int)$student_id;
		$startexamobj->examdate = $examdate;
		$startexamobj->total_questions = $total_questions;
		$startexamobj->total_questions_attempt = $total_questions_attempt;
		$startexamobj->currect_answers = $currect_answers;
		$startexamobj->wrong_answers = $wrong_answers;
		$startexamobj->percentage = $percentage;
		$startexamobj->start_time = $start_time;
		$startexamobj->submit_time = $submit_time;
		$startexamobj->time_taken = ceil($time_taken);
		$startexamobj->total_marks = $total_marks;
		$startexamobj->negative_marketing = $negative_marketing;
		$startexamobj->result = $result;
		$startexamobj->save();
		$data = array(
		"examdate"=>$examdate,
		"total_questions"=>$total_questions,
		"total_questions_attempt"=>$total_questions_attempt,
		"currect_answers"=>$currect_answers,
		"wrong_answers"=>$wrong_answers,
		"percentage"=>$percentage,
		"start_time"=>$start_time,
		"submit_time"=>$submit_time,
		"time_taken"=>$time_taken,
		"total_marks"=>$total_marks,
		"negative_marketing"=>$negative_marketing,
		"result"=>$result,
		);
		return response()->json([
					'status' => 'success',
					'varifyuser'=>true,
					'data'=>$data,
					'message' => 'Exam successfully completed...'
				],200);
		
	}
	
	//Leave manage api
	//submit apply leave
	public function submitApplyLeave(Request $request){
		$validator = \Validator::make($request->all(),[
            'apf_fdate' => 'required',
            'apf_tdate' => 'required',
            'apf_subject' => 'required',
            'apf_message' => 'required',
        ]);
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			
			//$createby = Auth::user()->role;
			$applyleave = new Applyleave;
			$applyleave->applyby = $request->currentuser;
			$applyleave->from_date = $request->apf_fdate;
			$applyleave->to_date = $request->apf_tdate;
			$applyleave->subject = $request->apf_subject;
			$applyleave->message = $request->apf_message;
			$applyleave->createdby = 'student';
			$applyleave->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Leave apply successfully!'
			], 200);	
		}
	}
	
	//leave application history
	
	public function historyApplyLeave(Request $request){
		$userid = $request->currentuser;
		$leaves = Applyleave::where('applyby',$userid)->get();
		return response()->json([
				'status' => 'success', 
				'data' =>$leaves, 
				'message' => 'Leave apply successfully!'
			], 200);
	}
	public function historyApplyLeaveById(Request $request){
		$leaveid = $request->leaveid;
		$leaves = Applyleave::where('id',$leaveid)->first();
		return response()->json([
				'status' => 'success', 
				'data' =>$leaves, 
				'message' => 'Leave apply successfully!'
			], 200);
	}
	public function getPrivacyPolicy(){
		$sitesettings = Sitesettings::select('privacypolicy')->where('status','active')->first();
		return response()->json([
				'status' => 'success', 
				'data' =>$sitesettings, 
				'message' => 'Privaciy policy get successfully!'
			], 200);
	}
	public function getAboutapp(){
		$aboutapp = Sitesettings::select('aboutapp')->where('status','active')->first();
		return response()->json([
				'status' => 'success', 
				'data' =>$aboutapp, 
				'message' => 'About app get successfully!'
			], 200);
	}
	public function getOpensourcelibrary(){
		$opensourcelibrary = Sitesettings::select('opensourcelibrary')->where('status','active')->first();
		return response()->json([
				'status' => 'success', 
				'data' =>$opensourcelibrary, 
				'message' => 'Open source library get successfully!'
			], 200);
	}
	public function getBatcheByCategory(){
		$category = Category::whereIn('status', array('active','deactive'))->get();
		$batchbycate = [];
		foreach($category as $cat){
			$categoryname = $cat->categoryname;
			$subcategory = Subcategory::where('categoryid',$cat->id)->get();
			if($subcategory){
				foreach($subcategory as $sbcate){
					$subcategoryname = $sbcate->subcategoryname;
					$batches = Batch::where('category_id',$sbcate->categoryid)->where('sub_category_id',$sbcate->id)->get();
					foreach($batches as $batch){
						$batchid = $batch->id;
						$batch_name = $batch->batch_name;
						$batch_type = $batch->batch_type;
						$batch_image = $batch->batch_image;
						$batchbycate[] = array(
							"categoryname"=>$categoryname,
							"subcategoryname"=>$subcategoryname,
							"batch_name"=>$batch_name,
							"batch_image"=>$batch_image,
							"batch_type"=>$batch_type,
						);
					}
				}	
			}
		}
		return response()->json([
				'status' => 'success', 
				'data' =>$batchbycate, 
				'message' => 'Batches get successfully!'
			], 200);	
	}
}
