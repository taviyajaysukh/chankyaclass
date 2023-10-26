@extends('layouts.master')
<style>

</style>
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Paper Manage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Paper</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">	
		<div class="card">
              <div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							<h3>EDIT MANAGE PAPER</h3>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-secondary active">
									<input type="radio" checked="true" name="editpaper" id="existingpaper" autocomplete="off" value="editpaper">Existing Paper Modify 
									</label>
									<label class="btn btn-secondary">
									<input type="radio" name="editpaper" id="newpaper" autocomplete="off" value="createnewpaper">New Paper Create
								</label>	
								</div>
							</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Paper Type</label>
									@php
										$testtype = array(
											'mocktestpaper'=>'Mock Test Paper',
											'practicepaper'=>'Practice Paper',
										);
									@endphp
									<select class="form-control papertype" id="papertype" name="papertype">
										@foreach($testtype as $key=>$val)
											<option value="{{$key}}" {{ $key == $papers->paper_type ? 'selected':''}}>{{$val}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Paper Name</label>
									<input type="text" name="papername" id="papername" class="form-control" placeholder="Paper name" value="{{@$papers->paper_name}}">
								 </div>
							</div>	
							<div class="col-md-6">
								<div class="form-group">
									<label>Mock test schedule date</label>
									<input type="date" name="mocktest_schedule_date" id="mocktest_schedule_date" class="form-control" placeholder="Schedule date" value="{{@$papers->mocktest_schedule_date}}">
								 </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Mock test schedule time</label>
									<input type="text" name="mocktest_schedule_time" id="mocktest_schedule_time" class="form-control default_time" placeholder="Schedule time" value="{{@$papers->mocktest_schedule_time}}">
								 </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Time Duration (Min</label>
									<input type="number" name="timeduration" id="timeduration" class="form-control" placeholder="Time duration in minute" value="{{@$papers->time_duration}}">
								 </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Batch</label>
									<select class="form-control paperbath" id="paperbatch" name="paperbatch">
									  @if($batches)
										@foreach($batches as $batch)
									  <option value="{{@$batch->id}}" {{ $batch->id == $papers->batch_id ? 'selected':''}}>{{@$batch->batch_name}}</option>
									  @endforeach
									@endif
									</select>
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
    </section>
  </div>
@endsection
