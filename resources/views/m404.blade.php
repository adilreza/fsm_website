@extends('layout.master')

@section('page_title','404 Error | Frontier Semiconductor')

@section('m404_page')
 

<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>404</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
	  <li>Pages</li>
      <li>404</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper error-wrapper">
<div class="container">
<div class="row">
<div class="col-lg-6">
    <div class="errorcontent">
      <div class="h1">404 Error!</div>
      <p>Oops! Page Not Found</p>
      <form class="form_search text-center">
	  <input type="text" placeholder="Search again" class="form-control">
	  <button type="submit" class="btn-search btn-search"><i class="fa fa-search"></i></button>
					</form>
      <a href="index.html"><i class="icofont icofont-arrow-left"></i> Go back to home</a> </div>
  </div>
  <div class="col-lg-5 col-md-4 d-none d-lg-block">
    <div class="search-icon"> <img src="images/search404.png" alt=""></div>
  </div>
</div>

</div>
</div>
<!-- Inner Page Wrapper End -->
<!-- Our CTA Wrapper Start -->
<div class="our-cta-wrapper">
<div class="container">
<div class="cta-content">
<h2>Do you Need This Template. Please Download Now!</h2>
<a href="https://themeforest.net/user/sbtechnosoft/portfolio" class="bttn">Buy Now</a>
</div>
</div>
</div>
<!-- Our CTA Wrapper End -->

@endsection
