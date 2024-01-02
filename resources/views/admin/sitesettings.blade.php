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
            <h1 class="m-0">Site Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Site Settings</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
		<div class="card">
              <div class="card-body">
                <form action="updatesitesettings" id="updatesitesettings" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<input type="hidden" name="sitesetingid" value="{{@$sitesettings->id}}">
					<input type="hidden" name="editfeviconicon" value="{{@$sitesettings->feviconicon}}">
					<input type="hidden" name="editsitelogo" value="{{@$sitesettings->sitelogo}}">
					<input type="hidden" name="editsiteminilogo" value="{{@$sitesettings->siteminilogo}}">
					<input type="hidden" name="editsitepreloader" value="{{@$sitesettings->sitepreloader}}">
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Favicon</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="feviconicon" name="feviconicon">
							  <label class="custom-file-label" for="feviconicon">Select your file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Site Logo</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="sitelogo" name="sitelogo">
							  <label class="custom-file-label" for="sitelogo">Select your file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Site Mini Logo</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="siteminilogo" name="siteminilogo">
							  <label class="custom-file-label" for="siteminilogo">Select your file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="Image">Site Preloader</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="sitepreloader" name="sitepreloader">
							  <label class="custom-file-label" for="sitepreloader">Select your file</label>
							</div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Site title</label>
							<input type="text" name="sitetitle" id="sitetitle" class="form-control" value="{{@$sitesettings->sitetitle}}" placeholder="Enter site title">
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="dateofbirth">Site author name</label>
							<input type="text" name="siteauthorname" id="siteauthorname" class="form-control" value="{{@$sitesettings->siteauthorname}}" placeholder="Enter site author name">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Site Keywords</label>
								<textarea name="sitekeywords" id="sitekeywords" class="form-control" value="{{@$sitesettings->sitekeywords}}">{{@$sitesettings->sitekeywords}}
								</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="contactnumber">Site Description</label>
							<textarea name="sitedescription" id="sitedescription" class="form-control" value="{{@$sitesettings->sitedescription}}">{{@$sitesettings->sitedescription}}						</textarea>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batch">Enrollment Word</label>
							<input type="text" name="enrollmentword" id="enrollmentword" class="form-control" value="{{@$sitesettings->enrollmentword}}" placeholder="Enter Enrollment Word">
						  </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="batch">Copyright Text</label>
							<input type="text" name="copyrighttext" id="copyrighttext" class="form-control" value="{{@$sitesettings->copyrighttext}}" placeholder="Enter Copyright Text">
						 </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="name">Time Zone</label>
							<select class="form-control" id="timezone" name="timezone">
							  <option value="">Select timezone</option>
								  @if($timezones)
									@foreach($timezones as $timezone)
								  <option value="{{@$timezone->timezone}}" {{ $timezone->timezone == $sitesettings->timezone ? 'selected' : '' }}>{{@$timezone->timezone}}</option>
								  @endforeach
								@endif
							</select>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="contactnumber">Pravacy Policy</label>
							<textarea name="privacypolicy" id="privacypolicy" class="form-control" value="{{@$sitesettings->privacypolicy}}">{{@$sitesettings->privacypolicy}}						</textarea>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="contactnumber">About App</label>
							<textarea name="aboutapp" id="aboutapp" class="form-control" value="{{@$sitesettings->aboutapp}}">{{@$sitesettings->aboutapp}}
							</textarea>
						  </div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="contactnumber">Open source library</label>
							<textarea name="opensourcelibrary" id="opensourcelibrary" class="form-control" value="{{@$sitesettings->opensourcelibrary}}">{{@$sitesettings->opensourcelibrary}}
							</textarea>
						  </div>
					</div>
					<div class="col-md-2">
						<button type="submit" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
			</form>
            </div>
      </div>
    </section>
  </div>
  @endsection

