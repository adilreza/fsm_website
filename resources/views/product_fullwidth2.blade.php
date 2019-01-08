@extends('layout.master')

@section('page_title','All Product List | Frontier Semiconductor')

@section('custome_static')
<link href="{{ URL::asset('fsm_all_web_file/css/adil_style.css') }}" rel="stylesheet">
@endsection

@section('product_fullwidth2_page')
 



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
        <h3>RAMAN 360 AND FSM127</h3>
        <hr style="width:75%;">
        <br>
    <div class="row">
      
    <div class="col-md-6">
    <div class="blog_box_wrapper">
    <div class="blog_img_wraper"> <img width="460px" height="380px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_raman_360.png')}}" alt=""> </div>
      <div class="blog_icon_overlay">
        <ul>
          <li> 19 <span> JUNE</span> </li>
          <li> 02 <span> COM.</span> </li>
          <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
        </ul>
      </div>
    <a href="{{URL::to('/product_details')}}">
        <div class="blog_btm_cntnt">
          <h2>Raman-360</h2>
          <p class="pad-b-10">Micro Raman system  for lattice level strain and material composition measurement. High spectral resolution (0.02 cm-1) and sub micron lateral resolution. </p>
        </div>
      </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="blog_box_wrapper">
      <div class="blog_img_wraper"> <img width="470px" height="380px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_127_C2C.png')}}" alt=""> </div>
      <div class="blog_icon_overlay">
        <ul>
          <li> 19 <span> JUNE</span> </li>
          <li> 02 <span> COM.</span> </li>
          <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
        </ul>
      </div>
      <a href="{{URL::to('/product_details')}}">
        <div class="blog_btm_cntnt">
          <h2>127 C2C</h2>
          <p class="pad-b-10">Nano Topography and Stress of dies: 1nm vertical resolution in single images sized up to 30mm x 40mm. Fully automated cassette to cassette system.</p>
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
        <h3>ADHESION TESTERS SERIES</h3>
        <hr style="width:75%;">
        <br>
    <div class="row">
      
    <div class="col-md-6">
    <div class="blog_box_wrapper">
    <div class="blog_img_wraper"> <img height="380px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_melt.PNG')}}" alt=""> </div>
      <div class="blog_icon_overlay">
        <ul>
          <li> 19 <span> JUNE</span> </li>
          <li> 02 <span> COM.</span> </li>
          <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
        </ul>
      </div>
      <a href="{{URL::to('/product_details')}}">
        <div class="blog_btm_cntnt">
          <h2>MELT</h2>
          <p class="pad-b-10">Modified Edge Liftoff Test to measure adhesion of thin film and thin film stacks on a wide variety of crystalline and non-crystaline substrates, such as Silicon</p>
        </div>
      </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="blog_box_wrapper">
      <div class="blog_img_wraper"> <img width="430px" height="380px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_AQUAFLEX.PNG')}}" alt=""> </div>
      <div class="blog_icon_overlay">
        <ul>
          <li> 19 <span> JUNE</span> </li>
          <li> 02 <span> COM.</span> </li>
          <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
        </ul>
      </div>
      <a href="{{URL::to('/product_details')}}">
        <div class="blog_btm_cntnt">
          <h2>AQUAFLEX</h2>
          <p class="pad-b-10">4-Point Bend film adhesion test. Measurement in air or liquid. For low to mid adhesion samples. Multi-chamber option for rapid testing.</p>
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
      <h3>ELECTRICAL CHARACTERIZATION</h3>
      <hr style="width:75%;">
      <br>
  <div class="row">
    
      <div class="col-md-6">
          <div class="blog_box_wrapper">
          <div class="blog_img_wraper"> <img height="380px"  src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_4PP.png')}}" alt=""> </div>
            <div class="blog_icon_overlay">
              <ul>
                <li> 19 <span> JUNE</span> </li>
                <li> 02 <span> COM.</span> </li>
                <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
              </ul>
            </div>
            <a href="{{URL::to('/product_details')}}">
              <div class="blog_btm_cntnt">
                <h2>4PP</h2>
                <p class="pad-b-10">4-Point Probe Technique for measuring the sheet resistance of epi, metal films, substrates. Table top and fully automated cassette to cassette systems available.</p>
              </div>
            </a>
          </div>
      </div>
      <div class="col-md-6">
            <div class="blog_box_wrapper">
              <div class="blog_img_wraper"> <img width="400px" height="380px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_RSL.png')}}" alt=""> </div>
              <div class="blog_icon_overlay">
                <ul>
                  <li> 19 <span> JUNE</span> </li>
                  <li> 02 <span> COM.</span> </li>
                  <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt=""> </li>
                </ul>
              </div>
              <a href="{{URL::to('/product_details')}}">
                <div class="blog_btm_cntnt">
                  <h2>RSL </h2>
                  <p class="pad-b-10">Non-contact sheet resistance and leakage measurement of ultra shallow junctions (UJS). Measurement on production wafers. Semi-automated and fully automated...</p>
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
	<li><a class="active" href="{{URL::to('/product_fullwidth2')}}">2</a></li>
<li><a href="{{URL::to('/product_fullwidth3')}}">3</a></li>
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

