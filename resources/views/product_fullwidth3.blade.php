@extends('layout.master')

@section('page_title','All Product List | Frontier Semiconductor')

@section('custome_static')
<link href="{{ URL::asset('fsm_all_web_file/css/adil_style.css') }}" rel="stylesheet">
@endsection

@section('product_fullwidth3_page')
 



<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>All Product Of FSM</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
	    <li>product</li>
      <li>All Product List</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper blog-wrapper blog-grid">
    <div class="container">
        <h3>VIT(E) SERIES</h3>
        <hr style="width:75%;">
        <br>
    <div class="row">
      
    <div class="col-md-6">
    <div class="blog_box_wrapper">
    <div class="blog_img_wraper"> <img width="430px" height="380px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_VIT_C2C.PNG')}}" alt=""> </div>
      <div class="blog_icon_overlay">
        <ul>
          <li> 19 <span> JUNE</span> </li>
          <li> 02 <span> COM.</span> </li>
          <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
        </ul>
      </div>
    <a href="{{URL::to('/product_details')}}">
        <div class="blog_btm_cntnt">
          <h2>VIT C2C</h2>
          <p class="pad-b-10">Dimensional metrology system for 3D-IC application: Through Silicon Via (TSV) depth, top CD, bottom CD, remaining silicon thickness (RST), copper pillar height, bump height, and many more.</p>
        </div>
      </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="blog_box_wrapper">
      <div class="blog_img_wraper"> <img width="470px" height="380px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_8108_VITE.png')}}" alt=""> </div>
      <div class="blog_icon_overlay">
        <ul>
          <li> 19 <span> JUNE</span> </li>
          <li> 02 <span> COM.</span> </li>
          <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
        </ul>
      </div>
      <a href="{{URL::to('/product_details')}}">
        <div class="blog_btm_cntnt">
          <h2>8108 VITE</h2>
          <p class="pad-b-10">New high speed, high accuracy non-contact characterization of thin wafers, through silicon vias (TSV), bumps, MEMS structures and novel materials. FSM 8108 VITE can be employed</p>
        </div>
      </a>
    </div>
    </div>

    </div>


    </div>
    <br>
    <br>
    <!-- third--------------------------------------------------- Row -->
    <div class="container">
        <h3>RMS  </h3>
        <hr style="width:75%;">
        <br>
    <div class="row">
      
    <div class="col-md-6">
    <div class="blog_box_wrapper">
    <div class="blog_img_wraper"> <img height="380px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_rms.png')}}" alt=""> </div>
      <div class="blog_icon_overlay">
        <ul>
          <li> 19 <span> JUNE</span> </li>
          <li> 02 <span> COM.</span> </li>
          <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
        </ul>
      </div>
      <a href="{{URL::to('/product_details')}}">
        <div class="blog_btm_cntnt">
          <h2>~ RMS ~</h2>
          <p class="pad-b-10">The FSM RMS In-Situ Roughness Monitoring System is a compact, robust, and easy to use system to measure the roughness of very rough surfaces...</p>
        </div>
      </a>
    </div>
    </div>
    </div>


    <br>
    <br>
    </div>

    <!-- this is the 900 series product ----->

<div class="container">
      <h3>500 SERIES</h3>
      <hr style="width:75%;">
      <br>
  <div class="row">
    
      <div class="col-md-7">
          <div class="blog_box_wrapper">
          <div class="blog_img_wraper text-center"> <img height="380px"  src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_500TC.png')}}" alt=""> </div>
            <div class="blog_icon_overlay">
              <ul>
                <li> 19 <span> JUNE</span> </li>
                <li> 02 <span> COM.</span> </li>
                <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
              </ul>
            </div>
            <a href="{{URL::to('/product_details')}}">
              <div class="blog_btm_cntnt">
                <h2>500TC</h2>
                <p class="pad-b-10">Evaluate the thermal properties and stability (film stress) of thin films up to 500 degree C in inert gas. 200mm or 300mm chamber. Manually loading.</p>
              </div>
            </a>
          </div>
      </div>
   
  </div>
</div>

</div>
</div>
<!-- Inner Page Wrapper End -->
<!-- this is the -->
<h2><span>~ FRONTIER SEMICONDUCTOR ~</span> </h2>

<!-- Start Pagination -->
<ul class="pagination">
<li><a href="{{URL::to('/product_fullwidth')}}">&lt;</a></li>
	<li><a  href="{{URL::to('/product_fullwidth')}}">1</a></li>
	<li><a href="{{URL::to('/product_fullwidth2')}}">2</a></li>
    <li><a class="active" href="{{URL::to('/product_fullwidth3')}}">3</a></li>
	<li><a href="#0">4</a></li>
	<li><a href="#0">&gt;</a></li>
</ul>
<!-- this end of pagination -->



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

