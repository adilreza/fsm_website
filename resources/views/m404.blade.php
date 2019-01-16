@extends('layout.master')

@section('page_title','404 Error | Frontier Semiconductor')

@section('m404_page')
 

<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Error!  404</h1>
    <ul class="page-breadcrumb">
    <li><a href="{{URL::to('/')}}">Home</a></li>
	 
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div style="background:#f1f2f6;" class="inner-page-wrapper error-wrapper">
<div class="container" >
<div class="row">
<div class="col-lg-6">
    <div class="errorcontent">
      <div class="h1">404 Error!</div>
      <p > <em>Oops! Page Not Found</em></p>
      <p>The link you clicked may be broken or the page may have been removed. Please try another.</p>
      <form class="form_search text-center">
	  <input type="text" placeholder="Search again" class="form-control">
	  <button type="submit" class="btn-search btn-search"><i class="fa fa-search"></i></button>
					</form>
        <a href="{{URL::to('/')}}"><i class="icofont icofont-arrow-left"></i> Go back to home</a> </div>
  </div>
  <div class="col-lg-5 col-md-4 d-none d-lg-block">
  <div class="search-icon"> <img src="{{URL::asset('fsm_all_web_file/images/search404.png')}}" alt=""></div>
  </div>
</div>

</div>
</div>
<!-- Inner Page Wrapper End -->


@endsection
