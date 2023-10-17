@extends('layouts.master')
<style>

</style>
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Certificate</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Certificate</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<div class="card">
		  <div class="card-body">
				<form action="updatecertificatesettings" id="updatecertificatesettings" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<input type="hidden" name="certificateid" value="{{@$certificates->id}}">
					<input type="hidden" name="editcertificatelogo" value="{{@$certificates->certificatelogo}}">
					<input type="hidden" name="editsignature" value="{{@$certificates->signature}}">
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Certificate Logo</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="certificatelogo" name="certificatelogo">
							  <label class="custom-file-label" for="certificatelogo">Select your file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="signature">Signature</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="signature" name="signature">
							  <label class="custom-file-label" for="signature">Select your file</label>
							</div>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Heading</label>
							<input type="text" name="heading" id="heading" class="form-control" placeholder="Enter heading" value="{{@$certificates->heading}}">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Sub Heading</label>
							<input type="text" name="subheading" id="subheading" class="form-control" value="{{@$certificates->subheading}}" placeholder="Enter sub heading">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Certificate Template</label>
							<select class="form-control" id="certificatetemplate" name="certificatetemplate">
							  <option value="">Select template</option>
							  <option value="defaulttemplate">Default Template</option>
							  <option value="templateone">Template One</option>
							  <option value="templatetwo">Template Two</option>
							</select>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" name="title" id="title" class="form-control" value="{{@$certificates->title}}" placeholder="title">
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="description ">Description </label>
							<textarea name="description" id="description" class="form-control" value="{{@$certificates->description}}" placeholder="Please enter description">{{@$certificates->heading}}</textarea>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
		  </div>
		<div>		
      </div>
    </section>
  </div>
  @endsection

