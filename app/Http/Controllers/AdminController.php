<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
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
            'name' => 'string|required|min:5',
            'email' => 'string|email|required|unique:users',
            'mobile' =>'required',
            'password' =>'string|required|min:5',
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
            'mobile' =>'required',
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
	
	//
	public function categoryManage()
    {
		$category = Category::whereIn('status', array('active','deactive'))->get();
        return view('admin.categorymanage',['categories'=>$category]);
    }
	public function addcategory(Request $request){
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
			$category = new Category;
			$category->categoryname = $request->categoryname;
			$category->createdby = 'admin';
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
}
