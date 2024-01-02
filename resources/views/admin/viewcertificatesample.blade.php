@extends('layouts.master')
<style>

</style>
@section('content')
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
		<div class="card">
              <div class="certificate_wrapper">
					<div class="text-center">
						<div class="certificate_logo">
							<img src="{{ asset('uploads') }}/certificate/{{ $certificate->certificatelogo }}">
						</div>
						<h5>{{$certificate->heading}}</h5>
						<h4>{{$certificate->subheading}}</h4>
						<h3>{{$certificate->title}}</h3>
						<h2>student name</h2>
						<p>{{$certificate->description}}</p>
						<div class="certificate_date">
							<h2>04-11-2023</h2>
						</div>
						<div class="certificate_signature">
							<img src="{{ asset('uploads') }}/certificate/{{ $certificate->signature }}">
						</div>
					</div
			  </div>
      </div>
	  </div>
     </section>
  </div>
  @endsection

