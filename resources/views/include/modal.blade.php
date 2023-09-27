<!-- Add User Model Admin -->
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
							  <label class="custom-file-label" for="customFile">Choose file</label>
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