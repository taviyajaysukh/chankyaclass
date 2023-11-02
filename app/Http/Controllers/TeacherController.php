<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Batchsubject;
use App\Models\Subject;
use App\Models\Assignment;
use App\Models\Applyleave;
use Illuminate\Support\Facades\Auth;
class TeacherController extends Controller
{
    //
	public function dashboard()
    {
        return view('teacher.dashboard');
    }
	//teacher manage assignment
	public function assignmentmanage(){
		$assignment = Assignment::whereIn('status', array('active','deactive'))->get();
		return view('teacher.assignmentManage',['assignments'=>$assignment]);
	}
	//getBatchSubject
	public function getBatchSubject(Request $request){
		$batchid = $request->batchid;
		$bsubject = Batchsubject::where('batch_id',$batchid)->get();
		$subjectids = array();
		foreach($bsubject as $sbdt){
			array_push($subjectids,$sbdt->id);
		}
		$subject = Subject::whereIn('id',$subjectids)->get();
		$response = array();
		if(sizeof($subject) > 0){
			foreach($subject as $sbdt){
				$response[] = array(
				  "id"=>$sbdt->id,
				  "text"=>$sbdt->subjectname
				);	
			}
		}else{
			$response[] = array(
              "id"=>'',
              "text"=>'Please select'
			  );
		}
		return response()->json($response);
	}
	//add assignment
	public function addAssignment(Request $request){
		$validator = \Validator::make($request->all(),[
            'batch_id' => 'required',
            'subject_id' => 'required',
            'assigndate' => 'required',
            'assigndescription' => 'required',
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
			$assignment = new Assignment;
			$assignment->batch_id = (int)$request->batch_id;
			$assignment->subject_id = $request->subject_id;
			$assignment->assigndate = $request->assigndate;
			$assignment->assigndescription = $request->assigndescription;
			$assignment->createdby = $createby;
			$assignment->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'assignment saved successfully!'
			], 200);	
		}
	}
	//assignment status change
	public function changeassignmentstatus(Request $request){
		$assignmentid = (int)$request->assignmentid ?? '';
		$assignment = Assignment::find($assignmentid);
		$status = '';
		if($assignment->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$assignment->status = $status;
		$assignment->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	public function deleteAssignment(Request $request){
		$assignmentid = (int)$request->assignmentid ?? '';
		$assignment = Assignment::find($assignmentid);
		if ($assignment && $assignment->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'assignment deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'assignment not found!'
			], 200);
		}
	}
	//add assignment
	public function updateAssignment(Request $request){
		$validator = \Validator::make($request->all(),[
            'batch_id' => 'required',
            'subject_id' => 'required',
            'assigndate' => 'required',
            'assigndescription' => 'required',
        ]);
		if ($validator->fails()) {
			$error = $validator->errors()->all();
		    return response()->json([
				'status' => 'error', 
				'errors' =>$error, 
				'message' => 'Some validation error!'
			],200);
		}else{
			$assignmentid = (int)$request->assignmentid ?? '';
			$assignment = Assignment::find($assignmentid);
			$assignment->batch_id = (int)$request->batch_id;
			$assignment->subject_id = $request->subject_id;
			$assignment->assigndate = $request->assigndate;
			$assignment->assigndescription = $request->assigndescription;
			$assignment->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'assignment saved successfully!'
			], 200);	
		}
	}
	//apply leave 
	public function applyLeave(){
		$applyleave = Applyleave::whereIn('status', array('active','deactive'))->get();
		return view('teacher.applyleave',['applyleaves'=>$applyleave]);
	}
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
			$createby = Auth::user()->role;
			$applyleave = new Applyleave;
			$applyleave->from_date = $request->apf_fdate;
			$applyleave->to_date = $request->apf_tdate;
			$applyleave->subject = $request->apf_subject;
			$applyleave->message = $request->apf_message;
			$applyleave->createdby = $createby;
			$applyleave->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Leave apply successfully!'
			], 200);	
		}
	}
	
	//update apply leave
	public function updateApplyleave(Request $request){
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
			$applyid = (int)$request->applyid ?? '';
			$applyleave = Applyleave::find($applyid);
			$applyleave->from_date = $request->apf_fdate;
			$applyleave->to_date = $request->apf_tdate;
			$applyleave->subject = $request->apf_subject;
			$applyleave->message = $request->apf_message;
			$applyleave->save();
			return response()->json([
				'status' => 'success', 
				'data' =>[], 
				'message' => 'Leave apply successfully!'
			], 200);	
		}
	}
	
	//assignment status change
	public function changeApplyleaveStatus(Request $request){
		$applyid = (int)$request->applyid ?? '';
		$applyleave = Applyleave::find($applyid);
		$status = '';
		if($applyleave->status == 'active'){
			$status = 'deactive';	
		}else{
			$status = 'active';
		}
		$applyleave->status = $status;
		$applyleave->save();
			return response()->json([
					'status' => 'success',  
					'message' => 'status change successfully!'
			], 200);
	}
	//delete apply leave
	public function deleteApplyleave(Request $request){
		$applyid = (int)$request->applyid ?? '';
		$applyleave = Applyleave::find($applyid);
		if ($applyleave && $applyleave->delete()) {
			return response()->json([
				'status' => 'success',  
				'message' => 'applyleave deleted successfully!'
			], 200);
		}else{
			return response()->json([
				'status' => 'error', 
				'message' => 'applyleave not found!'
			], 200);
		}
	}
}
