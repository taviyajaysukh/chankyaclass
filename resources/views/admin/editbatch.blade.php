@extends('layouts.master')
<style>

</style>
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Batch</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Batch</li>
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
					<input type="hidden" name="batch_imagehidden" id="editbatch_imagehidden">
					<input type="hidden" name="batch_image" id="editbatch_imageold" value="{{@$batch->batch_image}}">
					<input type="hidden" name="batchid" id="batchid" value="{{@$batch->id}}">
					<div class="col-md-6">
						<div class="form-group">
							<label for="category">Category</label>
							<select class="form-control" id="editbatch_category" name="batch_category">
							@if($category)
								@foreach($category as $cat)
							  <option value="{{@$cat->id}}" {{$cat->id == $batch->category_id ? 'selected' : '' }}>{{@$cat->categoryname}}</option>
							  @endforeach
							@endif 
							</select>	
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="subcategory">Sub Category</label>
							<select class="form-control" id="editbatch_subcategory" name="batch_subcategory">
							@if($subcategory)
								@foreach($subcategory as $cat)
							  <option value="{{@$cat->id}}" {{$cat->id == $batch->sub_category_id ? 'selected' : '' }}>{{@$cat->subcategoryname}}</option>
							  @endforeach
							@endif
							</select>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="batchname">Batch Name</label>
							<input type="text" name="batch_name" id="editbatch_name" class="form-control" placeholder="Enter batch name" value="{{@$batch->batch_name}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="startdate">Start Date</label>
							<input type="date" name="start_date" id="editstart_date" class="form-control" placeholder="start date" value="{{@$batch->start_date}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="enddate">End Date</label>
							<input type="date" name="end_date" id="editend_date" class="form-control" placeholder="End date" value="{{@$batch->end_date}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="starttime">Start Time</label>
							<input type="text" name="start_time" id="editstart_time" class="form-control" placeholder="Start time" value="{{@$batch->start_time}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="endtime">End Time</label>
							<input type="text" name="end_time" id="editend_time" class="form-control" placeholder="End time" value="{{@$batch->end_time}}">
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="batchinfo">Batch Type</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							@if($batch->batch_type == 'free')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="editbatch_type" id="free" autocomplete="off" value="free"> Free
							  </label>
							@else
							  <label class="btn btn-secondary">
								<input type="radio" name="editbatch_type" id="free" autocomplete="off" value="free"> Free
							  </label>	
							@endif
							@if($batch->batch_type == 'paid')	
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="editbatch_type" id="paid" autocomplete="off" value="paid"> Paid
							  </label>
							@else
								<label class="btn btn-secondary">
								<input type="radio" name="editbatch_type" id="paid" autocomplete="off" value="paid"> Paid
							  </label>
							@endif  
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Image</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="editbatch_image" name="batch_image">
							  <label class="custom-file-label" for="batch_image">Select your file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batch">Description</label>
							<textarea name="description" id="editdescription" class="form-control" placeholder="description" value="{{@$batch->batch_description}}">{{@$batch->batch_description}}</textarea>
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
										<input type="text" name="featureheader" id="editfeatureheader" class="form-control" placeholder="Heading" value="{{@$batchfeature->heading}}">
									  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="heading">Feature</label>
										<div class="featurewrapper">
											<div class="subfeature">
												<input type="text" name="feature" id="editfeature" class="form-control" placeholder="Feature" value="{{@$batchfeature->feature}}">
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
											<select class="form-control" id="editbatch_subject" name="batch_subject">
											  @if($subject)
												@foreach($subject as $sub)
												  <option value="{{@$sub->id}}">{{@$sub->subjectname}}</option>
												  @endforeach
												@endif 
											</select>
										</div>
								</div>
								<div class="col-md-6">
										<div class="form-group">
											<label for="chapter">Chapter</label>
											<select class="form-control" id="editbatch_chapter" name="batch_chapter">
											  @if($chapter)
												@foreach($chapter as $chp)
												  <option value="{{@$chp->id}}">{{@$chp->chaptername}}</option>
												  @endforeach
												@endif 
											</select>
										</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="teacher">Teacher</label>
										<select class="form-control" id="editbatch_teacher" name="batch_teacher">
										  @if($teacher)
											@foreach($teacher as $teac)
											  <option value="{{@$teac->id}}">{{@$teac->name}}</option>
											 @endforeach
										  @endif
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="subjectstartdate">Start Date</label>
										<input type="date" name="subject_start_date" id="editsubject_start_date" class="form-control" placeholder="start date" value="{{@$batchsubject->start_subject_date}}">
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="subjectenddate">End Date</label>
										<input type="date" name="subject_end_date" id="editsubject_end_date" class="form-control" placeholder="End date" value="{{@$batchsubject->end_subject_date}}">
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="subjectstarttime">Start Time</label>
										<input type="text" name="subject_start_time" id="editsubject_start_time" class="form-control" placeholder="Start time" value="{{@$batchsubject->start_subject_time}}">
									  </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="subjectendtime">End Time</label>
										<input type="text" name="subject_end_time" id="editsubject_end_time" class="form-control" placeholder="End time" value="{{@$batchsubject->end_subject_time}}">
									  </div>
								</div>
							</div>	
						  </div>
						</div>
					</div>
					<div class="col-md-2">
						<button type="button" id="editsubmitbatchform" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
		  </div>
		<div>		
      </div>
    </section>
  </div>
  @endsection

