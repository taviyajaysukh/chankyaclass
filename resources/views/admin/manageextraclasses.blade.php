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
            <h1 class="m-0">Exatra classes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Extra classes</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addExatraClassesModal">
		Add Exatra Classes
       </button>
		<div class="card">
              <div class="card-body">
                <table id="extraClassesTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Teacher</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Description</th>
					<th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
						@if(isset($extraclass) && $extraclass)
							@foreach($extraclass as $extclass)
								<tr>
									<td>{{$extclass->id}}</td>
									<td>{{$extclass->teacher}}</td>
									<td>{{$extclass->date}}</td>
									<td>{{$extclass->starttime}}</td>
									<td>{{$extclass->description}}</td>
									<td>
									@if($extclass->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeExtraClassStatus" data-id="{{ $extclass->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeExtraClassStatus" data-id="{{ $extclass->id }}">Deactive</a>
									@endif
									</td>
									<td class="text-right py-0 align-middle">
								  <div class="btn-group btn-group-sm">
									<a href="javascript:void(0)" class="btn btn-info editclickextclass" data-toggle="modal" data-target="#editExatraClassesModal" data-id="{{ $extclass->id }}" data-teacher="{{ $extclass->teacher }}" data-batch="{{ $extclass->batch }}" data-date="{{ $extclass->date }}" data-starttime="{{ $extclass->starttime }}" data-endtime="{{ $extclass->endtime }}" data-description="{{ $extclass->description }}"><i class="fas fa-edit"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger deleteextraclassclick" data-toggle="modal" data-target="#deleteExtraClassModal" id="deleteextraclassclick" data-id="{{ $extclass->id }}"><i class="fas fa-trash"></i></a>
								  </div>
								</td>
								</tr>
							@endforeach
						@endif
							
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Teacher</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Description</th>
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

