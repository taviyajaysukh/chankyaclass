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
            <h1 class="m-0">Book</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Book</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addBookModal">
		Add book
       </button>
		<div class="card">
              <div class="card-body">
                <table id="bookTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Title</th>
                    <th>Batch</th>
                    <th>Subject</th>
					<th>Added By</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($books) && $books)
							@foreach($books as $book)
								<tr>
									<td>{{$book->id}}</td>
									<td>{{$book->title}}</td>
									<td>{{$book->batch}}</td>
									<td>{{$book->subject}}</td>
									<td>{{$book->createdby}}</td>
									<td>
									@if($book->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeBookStatus" data-id="{{ $book->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeBookStatus" data-id="{{ $book->id }}">Deactive</a>
									@endif
									</td>
									<td class="text-right py-0 align-middle">
										<div class="btn-group btn-group-sm">
											<a href="javascript:void(0)" class="btn btn-info editclicbook" data-toggle="modal" data-target="#editBookModal" data-id="{{ $book->id }}" data-title="{{ $book->title }}" data-batch="{{ $book->batch }}"  data-subject="{{ $book->subject }}" data-bookfile="{{ $book->bookfile }}"><i class="fas fa-edit"></i></a>
											<a href="javascript:void(0)" class="btn btn-danger deletebookclick" data-toggle="modal" data-target="#deleteBookModal" id="deletebookclick" data-id="{{ $book->id }}"><i class="fas fa-trash"></i></a>
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

