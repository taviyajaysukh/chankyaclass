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
            <h1 class="m-0">Subject</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subject</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addSubjectModal">
		Add Subject
       </button>	
		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="subjectTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Subject Name</th>
                    <th>Chapter Name</th>
                    <th>CretatedBy</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
					@if(isset($subjects) && $subjects)
						@foreach($subjects as $subject)
							<tr>
								<td>{{$subject['subjectid']}}</td>
								<td>{{$subject['subjectname']}}</td>
								<td>
							  @if(isset($subject['chapter']))	
								@foreach ($subject['chapter'] as $chapter)	
								<p class="chapter_wrap">
										<span>{{$chapter['chaptername']}}
											<a class="charaViewPopupModel" data-title="Chapter name" data-word="Chapter two - Functions" href="javascript:;">...</a>
										</span>
										<span class="ChapterEditDltWrap" data-word="Chapter two - Functions">
											<span class="editChapterName" data-id="{{$chapter['chapterid']}}" data-sid="{{$chapter['subject_id']}}" data-chaptername="{{$chapter['chaptername']}}"><i class="fa fa-edit"></i></span>
											<span class="deleteChapterName" data-id="{{$chapter['chapterid']}}" data-sid="{{$chapter['subject_id']}}"><i class="fa fa-times"></i></span>
										</span>
									</p>
								@endforeach
								@endif	
								</td>
								<td>{{$subject['createdby']}}</td>
								<td>
									@if($subject['subjectstatus'] == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeSubjectStatus" data-id="{{$subject['subjectid']}}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeSubjectStatus" data-id="{{ $subject['subjectid'] }}">Deactive</a>
									@endif
								</td>
								<td class="text-right py-0 align-middle">
								  <div class="btn-group btn-group-sm">
									<a href="javascript:void(0)" class="btn btn-info editsubjectid" data-toggle="modal" data-target="#editSubjectModal" data-id="{{ $subject['subjectid'] }}" data-subjectname="{{ $subject['subjectname'] }}"><i class="fas fa-edit"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger delsubjectid" data-toggle="modal" data-target="#deleteSubjectModal" id="deletesubjectid" data-id="{{ $subject['subjectid'] }}"><i class="fas fa-trash"></i></a>
									<a href="javascript:void(0)" class="btn btn-success addchapterids" data-toggle="modal" data-target="#addChapterModal" data-id="{{ $subject['subjectid'] }}"><i class="fas fa-plus"></i></a>
								  </div>
								</td>
							</tr>
						@endforeach
					@endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Subject Name</th>
                    <th>Subject Name</th>
                    <th>Status</th>
                    <th>CretatedBy</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection

