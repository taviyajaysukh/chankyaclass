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
            <h1 class="m-0">{{ __('label.users') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ __('label.users') }}</li>
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
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addUserModal">
		{{ __('label.adduser')}}
       </button>	
		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="getUserTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
					@if($users)
						@foreach($users as $user)
							<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->name}}</td>
								<td>
								<img src="{{ asset('uploads') }}/{{ $user->image }}" alt="imagename" style="width:50px;height:50px;">
								</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								<td class="text-right py-0 align-middle">
								  <div class="btn-group btn-group-sm">
									<a href="javascript:void(0)" class="btn btn-info editid" data-toggle="modal" data-target="#editUserModal" id="editid" data-id="{{ $user->id }}" data-username="{{ $user->name }}" data-useremail="{{ $user->email }}" data-usermobile="{{ $user->mobile }}" data-userimage="{{ $user->image }}" data-userrole="{{ $user->role }}"><i class="fas fa-edit"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger delid" data-toggle="modal" data-target="#deleteUserModal" id="delid" data-id="{{ $user->id }}"><i class="fas fa-trash"></i></a>
								  </div>
								</td>
							</tr>
						@endforeach
					@endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Email</th>
                    <th>Role</th>
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

