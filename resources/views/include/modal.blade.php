<!-- Add User Model Admin -->
@php
	$batches = \App\Models\Batch::whereIn('status', array('active','deactive'))->get();
	$subjects = \App\Models\Subject::whereIn('status', array('active','deactive'))->get();
	$chapters = \App\Models\Chapter::whereIn('status', array('active','deactive'))->get();
@endphp
<div class="modal fade" id="addUserModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add new user</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="adduser" id="adduser" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="mobile">Mobile</label>
							<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Image</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="userImage" name="userImage">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="role">Role</label>
							<select class="form-control" id="role" name="role">
							  <option value="teacher" selected>Teacher</option>
							  <option value="subadmin">Sub Admin</option>
							  <option value="student">Student</option>
							</select>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>

<!-- Edit User Model Admin -->
<div class="modal fade" id="editUserModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit user</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updateuser" id="edituser" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="userid" id="edituserid">
			<input type="hidden" name="edituserimage" id="edituserimage">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="username" class="form-control" placeholder="Enter name">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="mobile">Mobile</label>
							<input type="text" name="mobile" id="usermobile" class="form-control" placeholder="Enter mobile">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" id="useremail" class="form-control" placeholder="Enter email">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="userpassword" class="form-control" disabled="true" placeholder="password not update try on forgot">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Image</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="userEditImage" name="userImage">
							  <label class="custom-file-label edituserimagetext" for="customFile">Choose file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="role">Role</label>
							<select class="form-control" id="userrole" name="role">
							  <option value="teacher" selected>Teacher</option>
							  <option value="subadmin">Sub Admin</option>
							  <option value="student">Student</option>
							</select>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>

<!-- Admin modal for user delete -->
<div class="modal fade" id="deleteUserModal">
        <div class="modal-dialog">
          <div class="modal-content">
		  <input type="hidden" name="deleteid" id="deleteid">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure delete this record?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="button" id="deleteuser" class="btn btn-danger">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	  
<!-- Add category modal -->	  
<div class="modal fade" id="addCategoryModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add new category</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addcategory" id="addcategory" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="categoryname" id="categoryname" class="form-control" placeholder="Enter category name">
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>	  
<!-- edit category modal -->	  
<div class="modal fade" id="editCategoryModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit category</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updatecategory" id="updatecategory" method="POST">
				@csrf
				<div class="row">
					<input type="hidden" name="editcateid" id="editcateid">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="categoryname" id="editcategoryname" class="form-control" placeholder="Enter category name">
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>

<!-- Admin modal for category delete -->
<div class="modal fade" id="deleteCategoryModal">
        <div class="modal-dialog">
          <div class="modal-content">
		  <input type="hidden" name="deletecateid" id="deletecateid">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure delete this record?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="button" id="deletecategory" class="btn btn-danger">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	  
<!-- Add sub category modal -->	  
<div class="modal fade" id="addSubCategoryModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add new sub category</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addsubcategory" id="addsubcategory" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="subcategoryname" id="subcategoryname" class="form-control" placeholder="Enter subcategory name">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<select class="js-example-basic-single class="form-control" name="categoryid" id="categoryid">
						  <option value="">Please select category</option>
							@if(isset($category) && $category)
							@foreach($category as $cate)
								<option value="{{@$cate->id}}">{{@$cate->categoryname}}</option>
							@endforeach
						@endif
						</select>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>	  
<!-- edit category modal -->	  
<div class="modal fade" id="editSubCategoryModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit subcategory</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updatesubcategory" id="updatesubcategory" method="POST">
				@csrf
				<div class="row">
					<input type="hidden" name="editsubcateid" id="editsubcateid">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="subcategoryname" id="editsubcategoryname" class="form-control" placeholder="Enter subcategory name">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<select class="js-example-basic-single class="form-control" name="categoryid" id="editddsubcategoryid">
						  <option value="">Please select category</option>
							@if(isset($category) && $category)
							@foreach($category as $cate)
								<option value="{{@$cate->id}}">{{@$cate->categoryname}}</option>
							@endforeach
						@endif
						</select>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>

<!-- Admin modal for category delete -->
<div class="modal fade" id="deleteSubCategoryModal">
        <div class="modal-dialog">
          <div class="modal-content">
		  <input type="hidden" name="deletecateid" id="deletecateid">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure delete this record?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="button" id="deletesubcategory" class="btn btn-danger">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->	  
	  

<!-- Add notice modal -->	  
<div class="modal fade" id="addNoticeModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add notice</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addnotice" id="addnotice" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" name="title" id="title" class="form-control" placeholder="Enter Title">
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<select name="noticefor" id="noticefor" class="form-control">
								<option value="both">Both</option>
								<option value="student">Student</option>
								<option value="teacher">Teacher</option>
							</select>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea name="notice" id="notice" class="form-control" placeholder="Description"></textarea>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>	  


<!-- Student change password modal -->	  
<div class="modal fade" id="studentChangepasswordModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Change Password</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="submitstudentpassword" id="changestudentpassword" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-12">
						<input type="hidden" id="changepassstudentid" name="changepassstudentid">
						<div class="form-group">
							<input type="password" name="studentnewpassword" id="studentnewpassword" class="form-control" placeholder="Enter new password">
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<input type="password" name="studentconfpassword" id="studentconfpassword" class="form-control" placeholder="Enter confirm password">
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>

<!-- Add notice modal -->	  
<div class="modal fade" id="addStudentNoticeModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add notice</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addnotice" id="addstudentnotice" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" name="title" id="studenttitle" class="form-control" placeholder="Enter Title">
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<select name="noticefor" id="studentnoticefor" class="form-control">
								<option value="student" selected="true">Student</option>
							</select>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea name="notice" id="studentnotice" class="form-control" placeholder="Description"></textarea>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>

<!-- edit notice modal -->	  
<div class="modal fade" id="editNoticeModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit Notice</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updatenotice" id="updatenotice" method="POST">
				@csrf
				<div class="row">
					<input type="hidden" name="editnoticeid" id="editnoticeid">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" name="title" id="editnoticetitle" class="form-control" placeholder="Enter Title">
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<select name="noticefor" id="editnoticefor" class="form-control">
								<option value="both">Both</option>
								<option value="student">Student</option>
								<option value="teacher">Teacher</option>
							</select>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea name="notice" id="editnoticedescription" class="form-control" placeholder="Description"></textarea>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>

<!-- Admin modal for notice delete -->
<div class="modal fade" id="deleteNoticeModal">
        <div class="modal-dialog">
          <div class="modal-content">
		  <input type="hidden" name="deletenoticeid" id="deletenoticeid">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure delete this record?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="button" id="deletenotice" class="btn btn-danger">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->	  
	  
<!-- Add subject modal -->	  
<div class="modal fade" id="addSubjectModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add subject</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addsubject" id="addsubject" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" name="subjectname" id="subjectname" class="form-control" placeholder="Enter Subject">
						  </div>
					</div>
					
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>	  
<!-- edit subject modal -->	  
<div class="modal fade" id="editSubjectModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit Subject</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updatesubject" id="updatesubject" method="POST">
				@csrf
				<div class="row">
					<input type="hidden" name="editsubjectid" id="editsubjectid">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" name="subjectname" id="editsubjectname" class="form-control" placeholder="Enter Subject Name">
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>

<!-- Admin modal for subject delete -->
<div class="modal fade" id="deleteSubjectModal">
        <div class="modal-dialog">
          <div class="modal-content">
		  <input type="hidden" name="deletesubjectid" id="deletesubjectid">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure delete this record?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="button" id="deletesubject" class="btn btn-danger">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->	  
	  	  

<!-- Add subject chapter modal -->	  
<div class="modal fade" id="addChapterModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add chapter</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addsubjectchapter" id="addsubjectchapter" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-12">
					<input type="hidden" name="chaptersubjectid" id="chaptersubjectid">
						<div class="form-group">
							<input type="text" name="subjectchaptername" id="subjectchaptername" class="form-control" placeholder="Enter Subject Chapter">
						  </div>
					</div>
					
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>		  
<!-- edit subject chapter modal -->	  
<div class="modal fade" id="editChapterModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit chapter</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updatesubjectchapter" id="editsubjectchapter" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-12">
					<input type="hidden" name="chapterid" id="editchapterid">
					<input type="hidden" name="chaptersubjectid" id="editchaptersubjectid">
						<div class="form-group">
							<input type="text" name="subjectchaptername" id="editsubjectchaptername" class="form-control" placeholder="Enter Subject Chapter">
						  </div>
					</div>
					
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>

<!-- Admin modal for subject chapter delete -->
<div class="modal fade" id="deleteChapterModal">
        <div class="modal-dialog">
          <div class="modal-content">
		  <input type="hidden" name="deletechapterid" id="deletechapterid">
		  <input type="hidden" name="deletechaptersubjectid" id="deletechaptersubjectid">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure delete this record?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="button" id="deletesubjectchapters" class="btn btn-danger">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->	
	  
	  
<!-- Add upcomming exam modal -->	  
<div class="modal fade" id="addUpexamModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add upcomming exam</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addupexam" id="addupexam" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" name="title" id="upexamtitle" class="form-control" placeholder="Enter title">
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea name="description" id="upexamdescription" class="form-control" placeholder="Enter Description"></textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="date" name="startdate" id="upexamstartdate" class="form-control" placeholder="Enter start date">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="date" name="enddate" id="upexamenddate" class="form-control" placeholder="Enter end date">
						 </div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<select class="form-control" id="applicationmode" name="applicationmode">
							  <option value="offline" selected>Offline Mode</option>
							  <option value="online">Online Mode</option>
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="upexamfile" name="upexamfile">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						 </div>	
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>	  
<!-- edit upcomming exam modal -->	  
<div class="modal fade" id="editUpexamModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">edit upcomming exam</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updateupexam" id="updateupexam" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
				<input type="hidden" name="upexamid" id="upexamid">
				<input type="hidden" name="upexamuploadfile" id="upexamuploadfile">
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" name="title" id="editupexamtitle" class="form-control" placeholder="Enter title">
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea name="description" id="editupexamdescription" class="form-control" placeholder="Enter Description"></textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="date" name="startdate" id="editupexamstartdate" class="form-control" placeholder="Enter start date">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="date" name="enddate" id="editupexamenddate" class="form-control" placeholder="Enter end date">
						 </div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<select class="form-control" id="editapplicationmode" name="applicationmode">
							  <option value="offline" selected>Offline Mode</option>
							  <option value="online">Online Mode</option>
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="editupexamfile" name="upexamfile">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						 </div>	
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>
<!-- Admin modal for upcomming exam delete -->
<div class="modal fade" id="deleteUpexamModal">
        <div class="modal-dialog">
          <div class="modal-content">
		  <input type="hidden" name="deleteupexamid" id="deleteupexamid">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure delete this record?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="button" id="deleteupcommingexam" class="btn btn-danger">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->	
	  
<!-- Admin modal for student delete -->
<div class="modal fade" id="deleteStudentModal">
        <div class="modal-dialog">
          <div class="modal-content">
		  <input type="hidden" name="deletstudentid" id="deletestudentid">
            <div class="modal-header">
              <h4 class="modal-title">Confirmation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure delete this record?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <button type="button" id="deletestudent" class="btn btn-danger">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->	  
	  
<!-- Add extra classes modal -->	  
<div class="modal fade" id="addExatraClassesModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add extra class</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addextraclass" id="addextraclasses" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Teacher</label>
							<select class="form-control" id="extraclassteacher" name="teacher">
							  <option value="">Select Teacher</option>
							  <option value="teacher1">Teacher1</option>
							  <option value="teacher2">Teacher2</option>
							  <option value="teacher3">Teacher3</option>
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control extraclassbatch" multiple="multiple" id="extraclassbatch" name="batch[]">
							  <option value="">Select batch</option>
							  <option value="php">Php</option>
							  <option value="java">Java</option>
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Date</label>
							<input type="date" name="date" id="extraclassdate" class="form-control" placeholder="Select date">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Start Time</label>
							<input type="time" name="starttime" id="extraclassstarttime" class="form-control" placeholder="Select start time">
						 </div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>End Time</label>
							<input type="time" name="endtime" id="extraclassendtime" class="form-control" placeholder="Select end time">
						 </div>	
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name="description" id="extraclassdescription" placeholder="Description">
							</textarea>
						 </div>	
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>	 	  

<!-- edit extra classes modal -->	  
<div class="modal fade" id="editExatraClassesModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit extra class</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updateextraclass" id="editextraclasses" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<input type="hidden" name="extclassid" id="editextclassid">
					<div class="col-md-6">
						<div class="form-group">
							<label>Teacher</label>
							<select class="form-control" id="editextclassteacher" name="teacher">
							  <option value="">Select Teacher</option>
							  <option value="teacher1">Teacher1</option>
							  <option value="teacher2">Teacher2</option>
							  <option value="teacher3">Teacher3</option>
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control extraclassbatch" multiple="multiple" id="editextclassbatch" name="batch[]">
							  <option value="">Select batch</option>
							  <option value="php">Php</option>
							  <option value="java">Java</option>
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Date</label>
							<input type="date" name="date" id="editextclassdate" class="form-control" placeholder="Select date">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Start Time</label>
							<input type="time" name="starttime" id="editextclassstarttime" class="form-control" placeholder="Select start time">
						 </div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>End Time</label>
							<input type="time" name="endtime" id="editextclassendtime" class="form-control" placeholder="Select end time">
						 </div>	
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name="description" id="editextclassenddescription" placeholder="Description">
							</textarea>
						 </div>	
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>	 	  

<!-- Admin modal for student delete -->
<div class="modal fade" id="deleteExtraClassModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deletextraclassid" id="deleteextraclassid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deleteextraclass" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div>
 
<!-- Add Teacher modal -->	  
<div class="modal fade" id="addTeacherModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add extra class</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addteacher" id="addteacher" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" id="teachername" class="form-control" placeholder="Name">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Gender</label>
							<select class="form-control teachergender"id="teachergender" name="gender">
							  <option value="">Select gender</option>
							  <option value="male">Male</option>
							  <option value="female">Female</option>
							  <option value="other">Other</option>
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" id="teacheremail" class="form-control" placeholder="Email">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" id="teacherpassword" class="form-control" placeholder="password">
						 </div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Education</label>
							<input type="text" name="education" id="education" class="form-control" placeholder="education">
						 </div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Image</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="teacherImage" name="teacherImage">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control teachersubject" multiple="multiple" id="teachersubject" name="subject[]">
							  <option value="">Select Subject</option>
							  <option value="php">Php</option>
							  <option value="java">Java</option>
							</select>
						 </div>	
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Module access</label>
							<select class="form-control moduleaccess" multiple="multiple" id="moduleaccess" name="moduleaccess[]">
							  <option value="">Select module</option>
							  <option value="notice">Notice</option>
							  <option value="liveclass">Live class</option>
							</select>
						 </div>	
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>	 


<!-- Edit Teacher modal -->	  
<div class="modal fade" id="editTeacherModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add extra class</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updateteacher" id="updateteacher" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<input type="hidden" name="teacherid" id="teacherid">
					<input type="hidden" name="editteacherimage" id="editteacherimage">
					<div class="col-md-6">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" id="editteachername" class="form-control" placeholder="Name">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Gender</label>
							<select class="form-control teachergender"id="editteachergender" name="gender">
							  <option value="">Select gender</option>
							  <option value="male">Male</option>
							  <option value="female">Female</option>
							  <option value="other">Other</option>
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" id="editteacheremail" class="form-control" placeholder="Email">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Password</label>
							<input type="password" disabled="true" name="password" id="editteacherpassword" class="form-control" placeholder="password">
						 </div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Education</label>
							<input type="text" name="education" id="editeducation" class="form-control" placeholder="education">
						 </div>	
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Image</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="eteacherImage" name="teacherImage">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control teachersubject" multiple="multiple" id="editteachersubject" name="subject[]">
							  <option value="">Select Subject</option>
							  <option value="php">Php</option>
							  <option value="java">Java</option>
							</select>
						 </div>	
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Module access</label>
							<select class="form-control moduleaccess" multiple="multiple" id="editmoduleaccess" name="moduleaccess[]">
							  <option value="">Select module</option>
							  <option value="notice">Notice</option>
							  <option value="liveclass">Live class</option>
							</select>
						 </div>	
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div>	 

<!-- Admin modal for teacher delete -->
<div class="modal fade" id="deleteTeacherModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="modeldeleteteacherid" id="modeldeleteteacherid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deleteteacherbtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div>
 
 
<!-- Add book modal -->	  
<div class="modal fade" id="addBookModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add book</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addbook" id="addbook" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" id="booktitle" class="form-control" placeholder="Title">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control bookbatch"id="bookbatch" name="batch">
							<option value="">select batch</option>
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control booksubject"id="booksubject" name="subject">
							<option value="">Select subject</option>
							  @if($subjects)
								@foreach($subjects as $subject)
							  <option value="{{@$subject->id}}">{{@$subject->subjectname}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">File</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="bookfile" name="bookfile">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div> 


<!-- edit book modal -->	  
<div class="modal fade" id="editBookModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit book</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updatebook" id="updatebook" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<input type="hidden" name="bookid" id="bookid">
					<input type="hidden" name="bookfilename" id="editbookfile">
					<div class="col-md-6">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" id="editbooktitle" class="form-control" placeholder="Title">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control bookbatch"id="editbookbatch" name="batch">
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control booksubject"id="editbooksubject" name="subject">
							  @if($subjects)
								@foreach($subjects as $subject)
							  <option value="{{@$subject->id}}">{{@$subject->subjectname}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">File</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="editbookfilename" name="bookfile">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div> 

<!-- Admin modal for book delete -->
<div class="modal fade" id="deleteBookModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deletebookid" id="deletebookid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deletebookbtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div>
 
 
 
 <!-- Add note modal -->	  
<div class="modal fade" id="addNoteModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add Note</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addnote" id="addnote" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" id="notetitle" class="form-control" placeholder="Title">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control notebatch"id="notebatch" name="batch">
							  <option value="">Select batch</option>
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control notesubject" id="notesubject" name="subject">
							  <option value="">Select Subject</option>
							  @if($subjects)
								@foreach($subjects as $subject)
							  <option value="{{@$subject->id}}">{{@$subject->subjectname}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Chapter</label>
							<select class="form-control notechapter" id="notechapter" name="chapter">
							  <option value="">Select chapter</option>
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">File</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="notefile" name="notefile">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div> 


<!-- edit note modal -->	  
<div class="modal fade" id="editNoteModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit note</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updatenote" id="updatenote" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<input type="hidden" name="noteid" id="noteid">
					<input type="hidden" name="notefilename" id="editnotefile">
					<div class="col-md-6">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" id="editnotetitle" class="form-control" placeholder="Title">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control notebatch"id="editnotebatch" name="batch">
							  <option value="">Select batch</option>
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control notesubject"id="editnotesubject" name="subject">
							  <option value="">Select subject</option>
							  @if($subjects)
								@foreach($subjects as $subject)
							  <option value="{{@$subject->id}}">{{@$subject->subjectname}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Chapter</label>
							<select class="form-control notechapter"id="editnotechapter" name="chapter">
							  <option value="">Select chapter</option>
							  @if($chapters)
								@foreach($chapters as $cpt)
							  <option value="{{@$cpt->id}}">{{@$cpt->chaptername}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">File</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="editnotefilename" name="notefile">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div> 

<!-- Admin modal for note delete -->
<div class="modal fade" id="deleteNoteModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deletenoteid" id="deletenoteid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deletenotebtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div>
 
 
<!-- Add oldpaper modal -->	  
<div class="modal fade" id="addOldpaperModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add paper</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="addoldpaper" id="addoldpaper" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" id="oldpapertitle" class="form-control" placeholder="Title">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control oldpaperbatch"id="oldpaperbatch" name="batch">
							  <option value="">Select batch</option>
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control oldpapersubject"id="oldpapersubject" name="subject">
							  <option value="">Select subject</option>
							  @if($subjects)
								@foreach($subjects as $sub)
							  <option value="{{@$sub->id}}">{{@$sub->subjectname}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">File</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="oldpaperfile" name="oldpaperfile">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div> 


<!-- edit oldpaper modal -->	  
<div class="modal fade" id="editOldpaperModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit oldpaper</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<form action="updateoldpaper" id="updateoldpaper" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<input type="hidden" name="oldpaperid" id="oldpaperid">
					<input type="hidden" name="oldpaperfilename" id="editoldpaperfile">
					<div class="col-md-6">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" id="editoldpapertitle" class="form-control" placeholder="Title">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control oldpaperbatch"id="editoldpaperbatch" name="batch">
							  <option value="">Select batch</option>
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control oldpapersubject"id="editoldpapersubject" name="subject">
							  <option value="">Select subject</option>
							  @if($subjects)
								@foreach($subjects as $sub)
							  <option value="{{@$sub->id}}">{{@$sub->subjectname}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">File</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="editoldpaperfilename" name="oldpaperfile">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		</div>
	  </div>
	</div>
</div> 

<!-- Admin modal for oldpaper delete -->
<div class="modal fade" id="deleteOldpaperModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deleteoldpaperid" id="deleteoldpaperid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deleteoldpaperbtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div> 
 
<!-- Add gallery modal -->	  
<div class="modal fade" id="addGalleryModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add gallery</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
				<input type="hidden" name="galleryimagename" id="galleryimagename">
				<input type="hidden" name="galleryvideoname" id="galleryvideoname">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" id="gallerytitle" class="form-control" placeholder="Title">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Type</label>
							<select class="form-control gallerytype"id="gallerytype" name="type">
							  <option value="image">Image</option>
							  <option value="video">Video</option>
							</select>
						 </div>
					</div>
					<div class="col-md-12 videosourcediv">
						<div class="form-group">
							<label>Source</label>
							<select class="form-control gallerysource"id="gallerysource" name="source">
							  <option value="file">File</option>
							  <option value="url">Url</option>
							</select>
						 </div>
					</div>
					<div class="col-md-12 galleryimagediv">
						<div class="form-group">
							<label for="Image">Image</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="galleryImage" name="galleryImage">
							  <label class="custom-file-label" for="customFile">Select Your File</label>
							</div>
						  </div>
					</div>
					<div class="col-md-12 youtubevideodiv">
						<div class="form-group">
							<label for="Image">Video</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="galleryVideo" name="galleryVideo">
							  <label class="custom-file-label" for="customFile">Select Your File</label>
							</div>
						  </div>
					</div>
					<div class="col-md-12 youtubeurldiv">
						<div class="form-group">
							<label>Youtube Url</label>
							<input type="text" name="youtubeurl" id="youtubeurl" class="form-control" placeholder="Url">
						 </div>
					</div>
					<div class="col-md-2">
						<button type="button" id="submitGallery" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
		</div>
	  </div>
	</div>
</div> 

<!-- edit gallery modal -->	  
<div class="modal fade" id="editGalleryModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit gallery</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
				<input type="hidden" name="editgalleryimagename" id="editgalleryimagename">
				<input type="hidden" name="editgalleryvideoname" id="editgalleryvideoname">
				<input type="hidden" name="galleryid" id="editgalleryid">
				<input type="hidden" name="editsgalleryimagename" id="editsgalleryimagename">
				<input type="hidden" name="editsgalleryvideoname" id="editsgalleryvideoname">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="edittitle" id="editgallerytitle" class="form-control" placeholder="Title">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Type</label>
							<select class="form-control editgallerytype"id="editgallerytype" name="edittype">
							  <option value="image">Image</option>
							  <option value="video">Video</option>
							</select>
						 </div>
					</div>
					<div class="col-md-12 editvideosourcediv">
						<div class="form-group">
							<label>Source</label>
							<select class="form-control editgallerysource" id="editgallerysource" name="editsource">
							  <option value="file">File</option>
							  <option value="url">Url</option>
							</select>
						 </div>
					</div>
					<div class="col-md-12 editgalleryimagediv">
						<div class="form-group">
							<label for="Image">Image</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="editgalleryImage" name="editgalleryImage">
							  <label class="custom-file-label" for="customFile">Select Your File</label>
							</div>
						  </div>
					</div>
					<div class="col-md-12 edityoutubevideodiv">
						<div class="form-group">
							<label for="Image">Video</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="editgalleryVideo" name="editgalleryVideo">
							  <label class="custom-file-label" for="customFile">Select Your File</label>
							</div>
						  </div>
					</div>
					<div class="col-md-12 edityoutubeurldiv">
						<div class="form-group">
							<label>Youtube Url</label>
							<input type="text" name="edityoutubeurl" id="edityoutubeurl" class="form-control" placeholder="Url">
						 </div>
					</div>
					<div class="col-md-2">
						<button type="button" id="submitEditGallery" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
		</div>
	  </div>
	</div>
</div> 

<!-- Admin modal for gallery delete -->
<div class="modal fade" id="deleteGalleryModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deletegalleryid" id="deletegalleryid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deletegallerybtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div>
 
<!-- Add Video modal -->	  
<div class="modal fade" id="addVideoModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add Video</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
				<input type="hidden" name="videoname" id="vdvideoname">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="videotitle" id="videotitle" class="form-control" placeholder="Title">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control videobatch" id="videobatch" name="videobatch">
							  <option value="">Select batch</option>
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control videosubject" id="videosubject" name="videosubject">
							  <option value="">Select subject</option>
							  @if($subjects)
								@foreach($subjects as $subject)
							  <option value="{{@$subject->id}}">{{@$subject->subjectname}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Chapter</label>
							<select class="form-control videochapter" id="videochapter" name="videochapter">
							 
							</select>
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Source</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="videosource" id="videoyoutube" autocomplete="off" value="youtube">Youtube
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="videosource" id="videovimeo" autocomplete="off" value="vimeo">Vimeo
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="videosource" id="videodropbox" autocomplete="off" value="dropbox">Dropbox
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="videosource" id="videoembed" autocomplete="off" value="embed">Embed
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="videosource" id="videoupload" autocomplete="off" value="upload">Upload
							  </label>
							</div>
						 </div>
					</div>
					<div class="col-md-12 youtubevdvideodiv">
						<div class="form-group">
							<label for="Image">Video file</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="vdoVideo" name="vdoVideo">
							  <label class="custom-file-label" for="customFile">Select Your File</label>
							</div>
						  </div>
					</div>
					<div class="col-md-12 vdyoutubeurldiv">
						<div class="form-group">
							<label>Url</label>
							<input type="text" name="videourl" id="videourl" class="form-control" placeholder="Url">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Description</label>
							<textarea name="videodescription" id="videodescription" class="form-control">
							</textarea>
						 </div>
					</div>
					<div class="col-md-2">
						<button type="button" id="submitVideo" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
		</div>
	  </div>
	</div>
</div> 

<!-- edit Video modal -->	  
<div class="modal fade" id="editVideoModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit Video</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
				<input type="hidden" name="editvdvideoid" id="editvdvideoid">
				<input type="hidden" name="editvideovoimage" id="editvideovoimage">
				<input type="hidden" name="editvdvideoname" id="editvdvideoname">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="editvideotitle" id="editvideotitle" class="form-control" placeholder="Title">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control editvideobatch" id="editvideobatch" name="editvideobatch">
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control editvideosubject" id="editvideosubject" name="editvideosubject">
							  @if($subjects)
								@foreach($subjects as $subject)
							  <option value="{{@$subject->id}}">{{@$subject->subjectname}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Chapter</label>
							<select class="form-control editvideochapter"id="editvideochapter" name="editvideochapter">
							  @if($chapters)
								@foreach($chapters as $chapter)
							  <option value="{{@$chapter->id}}">{{@$chapter->chaptername}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Source</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="editvideosource" id="editvideoyoutube" autocomplete="off" value="youtube">Youtube
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="editvideosource" id="editvideovimeo" autocomplete="off" value="vimeo">Vimeo
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="editvideosource" id="editvideodropbox" autocomplete="off" value="dropbox">Dropbox
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="editvideosource" id="editvideoembed" autocomplete="off" value="embed">Embed
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="editvideosource" id="editvideoupload" autocomplete="off" value="upload">Upload
							  </label>
							</div>
						 </div>
					</div>
					<div class="col-md-12 edityoutubevdvideodiv">
						<div class="form-group">
							<label for="Image">Video file</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="editvdoVideo" name="editvdoVideo">
							  <label class="custom-file-label" for="customFile">Select Your File</label>
							</div>
						  </div>
					</div>
					<div class="col-md-12 editvdyoutubeurldiv">
						<div class="form-group">
							<label>Url</label>
							<input type="text" name="editvideourl" id="editvideourl" class="form-control" placeholder="Url">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Description</label>
							<textarea name="editvideodescription" id="editvideodescription" class="form-control">
							</textarea>
						 </div>
					</div>
					<div class="col-md-2">
						<button type="button" id="editsubmitVideo" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
		</div>
	  </div>
	</div>
</div>

<!-- Admin modal for video delete -->
<div class="modal fade" id="deleteVideoModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deletevideoid" id="deletevideoid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deletevideobtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div>
 
 
<!-- Admin modal for book delete -->
<div class="modal fade" id="deleteBatchModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deletebatchid" id="deletebatchid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deletebatchbtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div> 
 
<!-- Admin modal for question delete -->
<div class="modal fade" id="deleteQuestionModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deletequestionid" id="deletequestionid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deletequestionbtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div> 
 
 
<!-- create paper modal -->	  
<div class="modal fade" id="createPaperModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Create Exam</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
				<h3>TOTAL SELECTED QUESTIONS : <span class="totalselectqs"></span></h3>
				<div class="row">
					<input type="hidden" class="countval">
					<div class="col-md-6">
						<div class="form-group">
							<label>Paper Type</label>
							<select class="form-control papertype" id="papertype" name="papertype">
							  <option value="">Select paper type</option>
							  <option value="mocktestpaper">Mock Test Paper</option>
							  <option value="practicepaper">Practice Paper</option>
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Paper Name</label>
							<input type="text" name="papername" id="papername" class="form-control" placeholder="Paper name">
						 </div>
					</div>
					<div class="col-md-6 mocktestschedule">
						<div class="form-group">
							<label>Mock test schedule date</label>
							<input type="date" name="mocktest_schedule_date" id="mocktest_schedule_date" class="form-control" placeholder="Schedule date">
						 </div>
					</div>
					<div class="col-md-6 mocktestschedule">
						<div class="form-group">
							<label>Mock test schedule time</label>
							<input type="text" name="mocktest_schedule_time" id="mocktest_schedule_time" class="form-control default_time" placeholder="Schedule time">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Time Duration (Min</label>
							<input type="number" name="timeduration" id="timeduration" class="form-control" placeholder="Time duration in minute">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control paperbath" id="paperbatch" name="paperbatch">
							<option value="">Please select batch</option>
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-12">
						Set Negative Marking % <input type="checkbox" class="ismaking"> Negative Marking Disable                     <input type="checkbox" class="isnotmaking">	
						<p class="text-red">Note :- If not checked then it will take default value (0.25%) for negative marking.</p>	
					</div>	
					<div class="col-md-12 divnegativevalue">
						<div class="form-group">
							<input type="number" name="negativevalue" id="negativevalue" class="form-control" placeholder="Please enter value %">
						 </div>
					</div>
					<div class="col-md-2">
						<button type="button" id="createpaper" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
		</div>
	  </div>
	</div>
</div> 

<!-- Admin modal for question delete -->
<div class="modal fade" id="deletePaperModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deletepaperid" id="deletepaperid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deletepaperbtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div>
 
 
<!-- Teacher user modal design --> 
<!-- Teacher add assignment model --> 

<div class="modal fade" id="addAssignmentModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Add assignment</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control paperbath" id="assignbatch" name="assignbatch">
							<option value="">Please select batch</option>
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control assignsubject" id="assignsubject" name="assignsubject">
							<option value="">Please select subject</option>
							</select>
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Date</label>
							<input type="Date" name="assigndate" id="assigndate" class="form-control assigndate" placeholder="Date">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control assigndescription" id="assigndescription" name="assigndescription" placeholder="description"></textarea>
						 </div>
					</div>
					<div class="col-md-2">
						<button type="button" id="addassignment" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
		</div>
	  </div>
	</div>
</div>

<!-- Teacher modal for assignment delete -->
<div class="modal fade" id="deleteAssignmentModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deleteassignid" id="deleteassignid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deleteassignmentbtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div>
 
 
<!-- Teacher edit assignment model --> 

<div class="modal fade" id="editAssignmentModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit assignment</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Batch</label>
							<select class="form-control" id="editassignbatch" name="editassignbatch">
							<option value="">Please select batch</option>
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}">{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Subject</label>
							<select class="form-control assignsubject" id="editassignsubject" name="editassignsubject">
							<option value="">Please select subject</option>
							@if($subjects)
								@foreach($subjects as $subject)
							  <option value="{{@$subject->id}}">{{@$subject->subjectname}}</option>
							  @endforeach
							@endif
							</select>
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Date</label>
							<input type="Date" name="editassigndate" id="editassigndate" class="form-control assigndate" placeholder="Date">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control editassigndescription" id="editassigndescription" name="editassigndescription" placeholder="description"></textarea>
						 </div>
					</div>
					<input type="hidden" id="assignmentid">
					<div class="col-md-2">
						<button type="button" id="updateassignment" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
		</div>
	  </div>
	</div>
</div> 

<!-- Apply leave  model --> 

<div class="modal fade" id="applyLeaveModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Apply Leave</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
				<div class="row">
					
					<div class="col-md-6">
						<div class="form-group">
							<label>From Date</label>
							<input type="Date" name="applyleave_fromdate" id="applyleave_fromdate" class="form-control applyleave_fromdate" placeholder="From Date">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>To Date</label>
							<input type="Date" name="applyleave_todate" id="applyleave_todate" class="form-control applyleave_todate" placeholder="To Date">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Subject</label>
							<input type="text" name="applyleave_subject" id="applyleave_subject" class="form-control applyleave_subject" placeholder="Subject">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control applyleave_message" id="applyleave_message" name="applyleave_message" placeholder="Message"></textarea>
						 </div>
					</div>
					<div class="col-md-2">
						<button type="button" id="applyleave" class="btn btn-success btn-block">Apply Leave</button>
					</div>
				</div>
		</div>
	  </div>
	</div>
</div>


<!-- Edit Apply leave  model --> 

<div class="modal fade" id="editApplyleaveModal">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Apply Leave</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
				<div class="row">
					<input type="hidden" id="applyid">
					<div class="col-md-6">
						<div class="form-group">
							<label>From Date</label>
							<input type="Date" name="editapplyleave_fromdate" id="editapplyleave_fromdate" class="form-control editapplyleave_fromdate" placeholder="From Date">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>To Date</label>
							<input type="Date" name="editapplyleave_todate" id="editapplyleave_todate" class="form-control editapplyleave_todate" placeholder="To Date">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Subject</label>
							<input type="text" name="editapplyleave_subject" id="editapplyleave_subject" class="form-control editapplyleave_subject" placeholder="Subject">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control editapplyleave_message" id="editapplyleave_message" name="editapplyleave_message" placeholder="Message"></textarea>
						 </div>
					</div>
					<div class="col-md-2">
						<button type="button" id="editapplyleave" class="btn btn-success btn-block">Apply Leave</button>
					</div>
				</div>
		</div>
	  </div>
	</div>
</div>

<!-- Teacher modal for apply leave delete -->
<div class="modal fade" id="deleteApplyleaveModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	  <input type="hidden" name="deleteapplyid" id="deleteapplyid">
		<div class="modal-header">
		  <h4 class="modal-title">Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <p>Are you sure delete this record?</p>
		</div>
		<div class="modal-footer justify-content-between">
		  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  <button type="button" id="deleteapplyleavebtn" class="btn btn-danger">Delete</button>
		</div>
	  </div>
	</div>
 </div>