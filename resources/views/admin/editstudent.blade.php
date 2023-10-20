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
				<form action="/admin/updatestudent" id="editstudent" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<input type="hidden" name="studentid" value="{{@$student->id}}">
					<input type="hidden" name="studentedit_image" value="{{@$student->student_image}}">
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
							<input type="text" name="student_name" id="student_name" class="form-control" value="{{@$student->student_name}}" placeholder="Enter name">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Father Name</label>
							<input type="text" name="father_name" id="father_name" class="form-control" value="{{@$student->student_father_name}}" placeholder="Enter father name">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Father Occupation</label>
							<input type="text" name="studenr_father_occupation" id="studenr_father_occupation" class="form-control" placeholder="Enter Occupation" value="{{@$student->student_father_occupation}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						@php
							$gender = array(
								"male"=>"Male",
								"female"=>"female",
								"other"=>"Other",
							);
							@endphp
							<label for="name">Gender</label>
							<select class="form-control" id="gender" name="gender">
							  <option value="">Gender</option>
							  @if(isset($student->gender))
							  @foreach($gender as $key=>$val)
								<option value="{{$key}}" {{ $key == $student->gender ? 'selected' : '' }}>{{$val}}</option>
							  @endforeach
							  @endif
							</select>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="dateofbirth">Date of Birth</label>
							<input type="date" name="dateofbirth" id="dateofbirth" class="form-control" value="{{@$student->dateofbirth}}" placeholder="DOB">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" value="{{@$student->email}}" placeholder="Enter email">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="contactnumber">Contact Number</label>
							<input type="text" name="contactnumber" id="contactnumber" class="form-control" value="{{@$student->contact_number}}" placeholder="Enter Contact Number">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batchinfo">Batch Inforamtion</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							@if(isset($student->batch_information) && $student->batch_information == 'offline')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="batchinfo" id="offline" autocomplete="off" value="offline"> Offline
							  </label>
							@else
								<label class="btn btn-secondary">
								<input type="radio" name="batchinfo" id="offline" autocomplete="off" value="offline"> Offline
							  </label>
							@endif
							@if(isset($student->batch_information) && $student->batch_information == 'online')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="batchinfo" id="offline" autocomplete="off" value="online"> Online
							  </label>
							@else
								<label class="btn btn-secondary">
								<input type="radio" name="batchinfo" id="offline" autocomplete="off" value="online"> Online
							  </label>
							@endif							
							  
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batch">Batch</label>
							<select class="form-control" id="batch" name="batch">
							<?php
								$stdbatch = $student->batch ?? '';
							?>
							  @if($batches)
								@foreach($batches as $batch)
							  <option value="{{@$batch->id}}" {{$batch->id == $stdbatch ? 'selected' : '' }}>{{@$batch->batch_name}}</option>
							  @endforeach
							@endif
							</select>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="batch">Address</label>
							<textarea name="address" id="address" class="form-control" placeholder="address" value="{{@$student->address}}">{{@$student->address}}</textarea>
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

