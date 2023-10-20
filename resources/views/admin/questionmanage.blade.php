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
            <h1 class="m-0">Question</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Question</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<a href="addquestion" class="btn btn-default">
		Add Question
       </a>
		<div class="card">
              <div class="card-body">
                <table id="questionTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
					<th>Question</th>
                    <th>Options</th>
                    <th>Answer</th>
                    <th>Question Marks</th>
                    <th>Subject</th>
                    <th>Chapter</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($questions) && $questions)
							@foreach($questions as $question)
								<tr>
									<td>{{$question->id}}</td>
									<td>{{strip_tags($question->question)}}</td>
									<td>
									{{strip_tags($question->optiona)}},{{strip_tags($question->optionb)}}
									{{strip_tags($question->optionc)}},{{strip_tags($question->optiond)}}
									</td>
									<td>{{$question->right_answer}}</td>
									<td>{{$question->add_marks}}</td>
									<td>{{$question->subject_id}}</td>
									<td>{{$question->chapter_id}}</td>
									<td>{{$question->createdby}}</td>
									<td>
									@if($question->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeQuestionStatus" data-id="{{ $question->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeQuestionStatus" data-id="{{ $question->id }}">Deactive</a>
									@endif
									</td>
									<td class="text-right py-0 align-middle">
										<div class="btn-group btn-group-sm">
											<a href="editquestion/{{$question->id}}" class="btn btn-info editclicnote"><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="btn btn-danger deletquestionclick" data-toggle="modal" data-target="#deleteQuestionModal" id="deleteQuestionclick" data-id="{{ $question->id }}"><i class="fas fa-trash"></i></a>
										  </div>
									</td>
								</tr>
							@endforeach
						@endif
							
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Question</th>
                    <th>Options</th>
                    <th>Answer</th>
                    <th>Question Marks</th>
                    <th>Subject</th>
                    <th>Chapter</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
      </div>
    </section>
  </div>
  @endsection

