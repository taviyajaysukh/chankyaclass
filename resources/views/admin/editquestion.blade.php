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
				<form action="submitquestion" id="editquestionform" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<input type="hidden" id="questionid" value="{{@$questions->id}}">
					<div class="col-md-6">
						<div class="form-group">
							<label for="subject">Subject</label>
							<select class="form-control" id="editquestionsubject" name="questionsubject">
							<option value="">Select subject</option>
							  @if($subjects)
								@foreach($subjects as $subject)
								  <option {{ $questions->subject_id == $subject->id ? 'selected':''}} value="{{@$subject->id}}">{{@$subject->subjectname}}</option>
								  @endforeach
							@endif
							</select>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="subject">Chapter</label>
							<select class="form-control" id="editquestionchapter" name="questionchapter">
							<option value="">Select chapter</option>
							@if($chapters)
								@foreach($chapters as $chapter)
								  <option {{ $questions->chapter_id == $chapter->id ? 'selected':''}} value="{{@$chapter->id}}">{{@$chapter->chaptername}}</option>
								  @endforeach
							@endif

							</select>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="question">Question</label>
							<textarea class="form-control ckeditor" id="editquestion" name="question" value="{{@$questions->question}}">
								{{$questions->question}}
							</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="optiona">Option A</label>
							<textarea class="form-control ckeditor" id="editoptiona" name="optiona" value="{{$questions->optiona}}">
							{{$questions->optiona}}
							</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="optiona">Option B</label>
							<textarea class="form-control ckeditor" id="editoptionb" name="optionb" value="{{$questions->optionb}}">
							{{$questions->optionb}}
							</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="optionc">Option C</label>
							<textarea class="form-control ckeditor" id="editoptionc" name="optionc" value="{{$questions->optionc}}">
								{{$questions->optionc}}
							</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="optionc">Option D</label>
							<textarea class="form-control ckeditor" id="editoptiond" name="optiond" value="{{$questions->optiond}}">
							{{$questions->optiond}}
							</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batchinfo">Right answer</label>
							<br>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
							@if(isset($questions->right_answer) && $questions->right_answer == 'a')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="rightanswer" id="editanswera" autocomplete="off" value="a">A
							  </label>
							@else
							  <label class="btn btn-secondary">
								<input type="radio" name="rightanswer" id="editanswera" autocomplete="off" value="a">A
							  </label>	
							@endif
							@if(isset($questions->right_answer) && $questions->right_answer == 'b')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="rightanswer" id="editanswerb" autocomplete="off" value="b">B
							  </label>
							@else
							  <label class="btn btn-secondary">
								<input type="radio" name="rightanswer" id="editanswerb" autocomplete="off" value="b">B
							  </label>	
							@endif
							@if(isset($questions->right_answer) && $questions->right_answer == 'c')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="rightanswer" id="editanswerc" autocomplete="off" value="c">C
							  </label>
							@else
							  <label class="btn btn-secondary">
								<input type="radio" name="rightanswer" id="editanswerc" autocomplete="off" value="c">B
							  </label>	
							@endif
							@if(isset($questions->right_answer) && $questions->right_answer == 'd')
							  <label class="btn btn-secondary active">
								<input type="radio" checked="true" name="rightanswer" id="editanswerd" autocomplete="off" value="d">D
							  </label>
							@else
							  <label class="btn btn-secondary">
								<input type="radio" name="rightanswer" id="editanswerd" autocomplete="off" value="d">D
							  </label>	
							@endif	
							  
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="addmark">Add Marks</label>
							<input type="number" name="addmark" id="editaddmark" class="form-control" placeholder="Question Marks" value="{{$questions->add_marks}}">
						  </div>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-success btn-block" id="editsubmitquestion">Save</button>
					</div>
				</div>
			</form>
		  </div>
		<div>		
      </div>
    </section>
  </div>
  @endsection

