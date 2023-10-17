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
				<div class="row">
					<input type="hidden" name="batch_imagehidden" id="batch_imagehidden">
					<div class="col-md-6">
						<div class="form-group">
							<label for="category">Category</label>
							<select class="form-control" id="batch_category" name="batch_category">
							  <option value="">Select category</option>
							</select>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="subcategory">Sub Category</label>
							<select class="form-control" id="batch_subcategory" name="batch_subcategory">
							  
							</select>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="batchname">Batch Name</label>
							<input type="text" name="batch_name" id="batch_name" class="form-control" placeholder="Enter batch name">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="startdate">Start Date</label>
							<input type="date" name="start_date" id="start_date" class="form-control" placeholder="start date">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="enddate">End Date</label>
							<input type="date" name="end_date" id="end_date" class="form-control" placeholder="End date">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="starttime">Start Time</label>
							<input type="text" name="start_time" id="start_time" class="form-control" placeholder="Start time">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="endtime">End Time</label>
							<input type="text" name="end_time" id="end_time" class="form-control" placeholder="End time">
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="batchinfo">Batch Type</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="batch_type" id="free" autocomplete="off" value="free"> Free
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="batch_type" id="paid" autocomplete="off" value="paid"> Paid
							  </label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Image</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="batch_image" name="batch_image">
							  <label class="custom-file-label" for="batch_image">Select your file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batch">Description</label>
							<textarea name="description" id="description" class="form-control" placeholder="description"></textarea>
						  </div>
					</div>
					<div class="col-md-12">
						<!-- Default box -->
						<div class="card collapsed-card">
						  <div class="card-header">
							<label for="batchfeature" class="batchfeature">Feature</label>
							<div class="card-tools">
							  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-plus"></i>
							  </button>
							  <button type="button" class="btn btn-tool removewidgetfeature" data-card-widget="remove" title="Remove">
								<i class="fas fa-trash"></i>
							  </button>
							</div>
						  </div>
						  <div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="heading">Heading</label>
										<input type="text" name="featureheader" id="featureheader" class="form-control" placeholder="Heading">
									  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="heading">Feature</label>
										<div class="featurewrapper">
											<div class="subfeature">
												<input type="text" name="feature" id="feature" class="form-control" placeholder="Feature">
												<div class="adddeletefeature"><i class="fa fa-plus add_new_feature eb_add_sheading assSubHeading" onclick="addfeature()"></i>
											  <i class="fa fa-trash eb_rem_sheading removeSubHeading"></i></div>
											</div>
										</div>
									  </div>
								</div>
							</div>	
						  </div>
						</div>
					</div>
					<div class="col-md-12">
						<!-- Default box -->
						<div class="card collapsed-card" id="subject-validation">
						  <div class="card-header">
							<label for="batchfeature" class="batchfeature">Subject</label>
							<div class="card-tools">
							  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-plus"></i>
							  </button>
							  <button type="button" class="btn btn-tool removewidgetfeature" data-card-widget="remove" title="Remove">
								<i class="fas fa-trash"></i>
							  </button>
							</div>
						  </div>
						  <div class="card-body">
							<div class="row">
								<div class="col-md-12">
										<div class="form-group">
											<label for="category">Subject</label>
											<select class="form-control" id="batch_subject" name="batch_subject">
											  <option value="">Select subject</option>
											</select>
										</div>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label for="chapter">Chapter</label>
											<select class="form-control" id="batch_chapter" name="batch_chapter">
											  <option value="">Select chapter</option>
											</select>
										</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="teacher">Teacher</label>
										<select class="form-control" id="batch_teacher" name="batch_teacher">
										  <option value="">Select teacher</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="subjectstartdate">Start Date</label>
										<input type="date" name="subject_start_date" id="subject_start_date" class="form-control" placeholder="start date">
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="subjectenddate">End Date</label>
										<input type="date" name="subject_end_date" id="subject_end_date" class="form-control" placeholder="End date">
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="subjectstarttime">Start Time</label>
										<input type="text" name="subject_start_time" id="subject_start_time" class="form-control" placeholder="Start time">
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="subjectendtime">End Time</label>
										<input type="text" name="subject_end_time" id="subject_end_time" class="form-control" placeholder="End time">
									  </div>
								</div>
							</div>	
						  </div>
						</div>
					</div>
					<div class="col-md-2">
						<button type="button" id="submitbatchform" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
		  </div>
		<div>		
      </div>
    </section>
  </div>
  @endsection

