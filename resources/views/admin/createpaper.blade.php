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
            <h1 class="m-0">Create Paper</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create paper</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<div class="card">
              <div class="card-body">
                <table id="createPaperTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>
						<input type="checkbox" name="createpaperallcheck" class="createpaperallcheck" value="">
					</th>
                    <th>Index</th>
					<th>Question</th>
                    <th>Options</th>
                    <th>Answer</th>
                    <th>Subject</th>
                    <th>Chapter</th>
					
                  </tr>
                  </thead>
                  <tbody>
						@php
							$indx = 1;
						@endphp
						@if(isset($questions) && $questions)
							@foreach($questions as $question)
								<tr>
									<td>
										<input type="checkbox" name="createpapercheck" class="createpapercheck" value="{{$question->id}}">
									</td>
									<td>{{$indx}}</td>
									<td>{{strip_tags($question->question)}}</td>
									<td>
									{{strip_tags($question->optiona)}},{{strip_tags($question->optionb)}}
									{{strip_tags($question->optionc)}},{{strip_tags($question->optiond)}}
									</td>
									<td>{{$question->right_answer}}</td>
									<td>{{$question->subject_id}}</td>
									<td>{{$question->chapter_id}}</td>
								</tr>
								
								@php 
								$indx++
								@endphp	
							@endforeach
						@endif
						
                  </tbody>
                  <tfoot>
                  <tr>
					<th>
						<input type="checkbox" name="createpaperallcheck" class="form-controll createpaperallcheck" value="">
					</th>
                    <th>Index</th>
                    <th>Question</th>
                    <th>Options</th>
                    <th>Answer</th>
                    <th>Subject</th>
                    <th>Chapter</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
			<div class="qtn_containr">
				<div class="btn-group">
					<button class="btn btn-info"><span class="selectedquestion"> 0  </span>QUESTIONS SELECTED</button>
					<button type="button" class="btn btn-info" id="opencreatepaper"> + CREATE PAPER</button>
					<button type="button" class="btn btn-info resetpaper">RESET</button>
                </div>
			</div>
      </div>
    </section>
  </div>
  @endsection

