@extends('layout.master')

@section('page_title','FSM | About Us')

@section('about_us_page')
 

<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>About Us</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
	  <li>Pages</li>
      <li>About Us</li>
    </ul>
  </div>
</div>

<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper about-wrapper">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="video-image-box mb-30">
  <div class="image"> <img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fortest/videotest.jpg')}}" alt=""> <a href="https://www.youtube.com/watch?v=UvluuAIiA50" class="overlay-link play-now video-btn"><span class="fa fa-play"></span> </a> <span class="ripple"></span> </div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="about-sec">
  <div class="big-title">About</div>
  <h2>25 Year’s <br>
    of Experience</h2>
</div>
<div class="tab-box mb-30">
  <ul class="tab-list">
    <li><a href="#tab-one" class="tab-btn active-btn">Our Mision</a></li>
    <li><a href="#tab-two" class="tab-btn">Our Vision</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-item active-tab" id="tab-one">
      <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
    </div>
    <div class="tab-item" id="tab-two">
      <div class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</div>
    </div>
  </div>
</div>
<!-- end tab -->
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
<!-- News Letter Wrapper End -->

@endsection