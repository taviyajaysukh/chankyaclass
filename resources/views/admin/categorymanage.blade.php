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
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addCategoryModal">
		Add Category
       </button>	
		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="getUserTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Category Name</th>
                    <th>Created By</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
					@if($categories)
						@foreach($categories as $category)
							<tr>
								<td>{{$category->id}}</td>
								<td>{{$category->categoryname}}</td>
								<td>{{$category->createdby}}</td>
								<td>
								
									@if($category->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changeStatus" data-id="{{ $category->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changeStatus" data-id="{{ $category->id }}">Deactive</a>
									@endif
								</td>
								<td class="text-right py-0 align-middle">
								  <div class="btn-group btn-group-sm">
									<a href="javascript:void(0)" class="btn btn-info editcategoryid" data-toggle="modal" data-target="#editCategoryModal" id="editcategoryid" data-id="{{ $category->id }}" data-categoryname="{{ $category->categoryname }}"><i class="fas fa-edit"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger delcateid" data-toggle="modal" data-target="#deleteCategoryModal" id="deletecateid" data-id="{{ $category->id }}"><i class="fas fa-trash"></i></a>
								  </div>
								</td>
							</tr>
						@endforeach
					@endif
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Category Name</th>
                    <th>Created By</th>
                    <th>Status</th>
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

