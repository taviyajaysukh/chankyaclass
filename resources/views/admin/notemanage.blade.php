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
            <h1 class="m-0">Notes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Note</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addNoteModal">
		Add note
       </button>
		<div class="card">
              <div class="card-body">
                <table id="noteTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Batch</th>
                    <th>Subject</th>
                    <th>Chapter</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($notes) && $notes)
							@foreach($notes as $note)
								<tr>
									<td>{{$note->id}}</td>
									<td>{{$note->title}}</td>
									<td>{{$note->batch}}</td>
									<td>{{$note->subject}}</td>
									<td>{{$note->chapter}}</td>
									<td>{{$note->createdby}}</td>
									<td>
									@if($note->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeNoteStatus" data-id="{{ $note->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeNoteStatus" data-id="{{ $note->id }}">Deactive</a>
									@endif
									</td>
									<td class="text-right py-0 align-middle">
										<div class="btn-group btn-group-sm">
											<a href="javascript:void(0)" class="btn btn-info editclicnote" data-toggle="modal" data-target="#editNoteModal" data-id="{{ $note->id }}" data-title="{{ $note->title }}" data-batch="{{ $note->batch }}"  data-subject="{{ $note->subject }}" data-chapter="{{ $note->chapter }}" data-notefile="{{ $note->notefile }}"><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="btn btn-danger deletenoteclick" data-toggle="modal" data-target="#deleteNoteModal" id="deleteNoteclick" data-id="{{ $note->id }}"><i class="fas fa-trash"></i></a>
										  </div>
									</td>
								</tr>
							@endforeach
						@endif
							
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Batch</th>
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

