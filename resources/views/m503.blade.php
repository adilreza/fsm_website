@extends('layout.master')

@section('page_title','503 Error | Frontier Semiconductor')

@section('m503_page')
 

<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Error! 503</h1>
    <ul class="page-breadcrumb">
    <li><a href="{{URL::to('/')}}">Home</a></li>
	  
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper error-wrapper service-error">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
    <div class="errorcontent">
	 <p>Service Unavailable. The server is currently unable to handle the request due to a temporary overloading or maintenance of the server</p>
      <div class="h1">503</div>
    <a href="{{URL::to('/')}}"><i class="icofont icofont-arrow-left"></i> Go back to home</a> </div>
  </div>
</div>
</div>
</div>
<!-- Inner Page Wrapper End -->
<!-- Our CTA Wrapper Start -->
<div class="our-cta-wrapper">
<div class="container">
<div class="cta-content">
<h2>Your suggestion for improving the services</h2>
<a href="{{URL::to('contact_us')}}" class="bttn">Contact Us</a>
</div>
</div>
</div>
<!-- Our CTA Wrapper End -->

@endsection

