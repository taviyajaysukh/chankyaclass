@extends('layouts.master')
<style>

</style>
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Question</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Question</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<div class="card">
		  <div class="card-body">
				<form action="submitquestion" id="addquestion" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="subject">Subject</label>
							<select class="form-control" id="questionsubject" name="questionsubject">
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
							<label for="subject">Chapter</label>
							<select class="form-control" id="questionchapter" name="questionchapter">
							<option value="">Select chapter</option>
							</select>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="question">Question</label>
							<textarea class="form-control ckeditor" id="question" name="question">
							
							</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="optiona">Option A</label>
							<textarea class="form-control ckeditor" id="optiona" name="optiona">
							
							</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="optiona">Option B</label>
							<textarea class="form-control ckeditor" id="optionb" name="optionb">
							
							</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="optionc">Option C</label>
							<textarea class="form-control ckeditor" id="optionc" name="optionc">
							
							</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="optionc">Option D</label>
							<textarea class="form-control ckeditor" id="optiond" name="optiond">
							
							</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batchinfo">Right answer</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="rightanswer" id="answera" autocomplete="off" value="a">A
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="rightanswer" id="answerb" autocomplete="off" value="b">B
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="rightanswer" id="answerc" autocomplete="off" value="c">C
							  </label>
							  <label class="btn btn-secondary">
								<input type="radio" name="rightanswer" id="answerd" autocomplete="off" value="d">D
							  </label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="addmark">Add Marks</label>
							<input type="number" name="addmark" id="addmark" class="form-control" placeholder="Question Marks">
						  </div>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-success btn-block" id="submitquestion">Save</button>
					</div>
				</div>
			</form>
		  </div>
		<div>		
      </div>
    </section>
  </div>
  @endsection

