@extends('layouts.master')
<style>

</style>
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Student</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add student</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<div class="card">
		  <div class="card-body">
				<form action="submitstudent" id="addstudent" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Image</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="student_image" name="student_image">
							  <label class="custom-file-label" for="student_image">Select your file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="student_name" id="student_name" class="form-control" placeholder="Enter name">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Father Name</label>
							<input type="text" name="father_name" id="father_name" class="form-control" placeholder="Enter father name">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Father Occupation</label>
							<input type="text" name="studenr_father_occupation" id="studenr_father_occupation" class="form-control" placeholder="Enter Occupation">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Gender</label>
							<select class="form-control" id="gender" name="gender">
							  <option value="">Gender</option>
							  <option value="male">Male</option>
							  <option value="female">Female</option>
							  <option value="other">Other</option>
							</select>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="dateofbirth">Date of Birth</label>
							<input type="date" name="dateofbirth" id="dateofbirth" class="form-control" placeholder="DOB">
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
							<label for="contactnumber">Contact Number</label>
							<input type="text" name="contactnumber" id="contactnumber" class="form-control" placeholder="Enter Contact Number">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batchinfo">Batch Inforamtion</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="batchinfo" id="offline" autocomplete="off" value="offline"> Offline
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="batchinfo" id="online" autocomplete="off" value="Online"> Online
							  </label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batch">Batch</label>
							<select class="form-control" id="batch" name="batch">
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
							<label for="batch">Address</label>
							<textarea name="address" id="address" class="form-control" placeholder="address"></textarea>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		  </div>
		<div>		
      </div>
    </section>
  </div>
  @endsection

