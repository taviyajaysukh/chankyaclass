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
            <h1 class="m-0">Sub Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sub Category</li>
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
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#addSubCategoryModal">
		Add Sub Category
       </button>	
		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="subCategoryTable" class="table table-bordered table-striped">
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
					@if($subcategories)
						@foreach($subcategories as $subcategory)
							<tr>
								<td>{{$subcategory->id}}</td>
								<td>{{$subcategory->subcategoryname}}</td>
								<td>{{$subcategory->createdby}}</td>
								<td>
								
									@if($subcategory->status == 'active')
										<a href="javascript:void(0)" class="btn btn-success active changesubcateStatus" data-id="{{ $subcategory->id }}">Active</a>
									@else
										<a href="javascript:void(0)" class="btn btn-danger active changesubcateStatus" data-id="{{ $subcategory->id }}">Deactive</a>
									@endif
								</td>
								<td class="text-right py-0 align-middle">
								  <div class="btn-group btn-group-sm">
									<a href="javascript:void(0)" class="btn btn-info editsubcategoryid" data-toggle="modal" data-target="#editSubCategoryModal" id="editsubcategoryid" data-id="{{ $subcategory->id }}" data-subcategoryname="{{ $subcategory->subcategoryname }}" data-categoryid="{{ $subcategory->categoryid }}"><i class="fas fa-edit"></i></a>
									<a href="javascript:void(0)" class="btn btn-danger delsubcateid" data-toggle="modal" data-target="#deleteSubCategoryModal" id="deletesubcateid" data-id="{{ $subcategory->id }}"><i class="fas fa-trash"></i></a>
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

