@extends('layout.master')

@section('page_title','All Product List | Frontier Semiconductor')

@section('custome_static')
<link href="{{ URL::asset('fsm_all_web_file/css/adil_style.css') }}" rel="stylesheet">
@endsection

@section('product_list2_page')
 

<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>All Product Of Frontier Semiconductor (FSM)</h1>
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
                <h3>500 SERIES</h3>
                <hr style="width:75%;">
                <br>
            <div class="row">
              <a href="{{URL::to('/product_500TC')}}">
                <div class="col-md-7">
                    <div class="blog_box_wrapper">
                    <div class="blog_img_wraper text-center"> <img height="380px"  src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_500TC.png')}}" alt=""> </div>
                      <div class="blog_icon_overlay">
                        <ul>
                          <li> 19 <span> SOLD </span> </li>
                         
                        </ul>
                      </div>
                      <a href="{{URL::to('/product_500TC')}}">
                        <div class="blog_btm_cntnt">
                          <h2>500TC</h2>
                          <p class="pad-b-10">Evaluate the thermal properties and stability (film stress) of thin films up to 500 degree C in inert gas. 200mm or 300mm chamber. Manually loading...</p>
                        </div>
                      </a>
                    </div>
                </div>
              </a>
             
            </div>
    </div>

    <br>
    <br>
    <!-- third--------------------------------------------------- Row -->

    <div class="container">
            <h3>RAMAN 360 AND FSM127</h3>
            <hr style="width:75%;">
            <br>
        <div class="row">
      <a href="{{URL::to('/product_raman360')}}">
        <div class="col-md-6">
        <div class="blog_box_wrapper">
        <div class="blog_img_wraper text-center"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_raman_360.png')}}" alt=""> </div>
          <div class="blog_icon_overlay">
            <ul>
              <li> 19 <span> SOLD </span> </li>
             
            </ul>
          </div>
        <a href="{{URL::to('/product_raman360')}}">
            <div class="blog_btm_cntnt">
              <h2>Raman-360</h2>
              <p class="pad-b-10">Micro Raman system  for lattice level strain and material composition measurement. High spectral resolution (0.02 cm-1) and sub micron lateral resolution. </p>
            </div>
          </a>
        </div>
        </div>
      </a>
    <a href="{{URL::to('/product_127_C2C')}}">
        <div class="col-md-6">
        <div class="blog_box_wrapper">
          <div class="blog_img_wraper text-center"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_127_C2C.png')}}" alt=""> </div>
          <div class="blog_icon_overlay">
            <ul>
              <li> 19 <span> SOLD </span> </li>
              
            </ul>
          </div>
          <a href="{{URL::to('/product_127_C2C')}}">
            <div class="blog_btm_cntnt">
              <h2>127 C2C</h2>
              <p class="pad-b-10">Nano Topography and Stress of dies: 1nm vertical resolution in single images sized up to 30mm x 40mm. Fully automated cassette to cassette system.</p>
            </div>
          </a>
        </div>
        </div>
    </a>
    
        </div>
    
    
    </div>




    <div class="container">
        <h3>RMS  </h3>
        <hr style="width:75%;">
        <br>
    <div class="row">
    <a href="{{URL::to('/product_rms')}}">
        <div class="col-md-6">
        <div class="blog_box_wrapper">
        <div class="blog_img_wraper"> <img height="380px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_rms.png')}}" alt=""> </div>
          <div class="blog_icon_overlay">
            <ul>
              <li> 19 <span> SOLD</span> </li>
             
            </ul>
          </div>
          <a href="{{URL::to('/product_rms')}}">
            <div class="blog_btm_cntnt">
              <h2>~ RMS ~</h2>
              <p class="pad-b-10">The FSM RMS In-Situ Roughness Monitoring System is a compact, robust, and easy to use system to measure the roughness of very rough surfaces...</p>
            </div>
          </a>
        </div>
        </div>
    </a>
    </div>


    <br>
    <br>
</div>

<div class="container">
        <h3>ADHESION TESTERS SERIES</h3>
        <hr style="width:75%;">
        <br>
    <div class="row">
    <a href="{{URL::to('/product_melt')}}">
      <div class="col-md-6">
      <div class="blog_box_wrapper">
      <div class="blog_img_wraper"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_melt.PNG')}}" alt=""> </div>
        <div class="blog_icon_overlay">
          <ul>
            <li> 19 <span> SOLD</span> </li>
          </ul>
        </div>
        <a href="{{URL::to('/product_melt')}}">
          <div class="blog_btm_cntnt">
            <h2>MELT</h2>
            <p class="pad-b-10">Modified Edge Liftoff Test to measure adhesion of thin film and thin film stacks on a wide variety of crystalline and non-crystaline substrates, such as Silicon</p>
          </div>
        </a>
      </div>
      </div>
    </a>
    <a href="{{URL::to('/product_aquaflex')}}">
      <div class="col-md-6">
      <div class="blog_box_wrapper">
        <div class="blog_img_wraper"> <img width="320px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_AQUAFLEX.PNG')}}" alt=""> </div>
        <div class="blog_icon_overlay">
          <ul>
            <li> 19 <span> SOLD </span> </li>
          
          </ul>
        </div>
        <a href="{{URL::to('/product_aquaflex')}}">
          <div class="blog_btm_cntnt">
            <h2>AQUAFLEX</h2>
            <p class="pad-b-10">4-Point Bend film adhesion test. Measurement in air or liquid. For low to mid adhesion samples. Multi-chamber option for rapid testing.</p>
          </div>
        </a>
      </div>
      </div>
    </a>
    </div>


    <br>
    <br>
</div>

<div class="container">
        <h3>ELECTRICAL CHARACTERIZATION</h3>
        <hr style="width:75%;">
        <br>
    <div class="row">
    <a href="{{URL::to('/product_4pp')}}">
        <div class="col-md-6">
            <div class="blog_box_wrapper">
            <div class="blog_img_wraper"> <img height="300px"  src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_4PP.png')}}" alt=""> </div>
              <div class="blog_icon_overlay">
                <ul>
                  <li> 19 <span> SOLD</span> </li>
                  
                </ul>
              </div>
              <a href="{{URL::to('/product_4pp')}}">
                <div class="blog_btm_cntnt">
                  <h2>4PP</h2>
                  <p class="pad-b-10">4-Point Probe Technique for measuring the sheet resistance of epi, metal films, substrates. Table top and fully automated cassette to cassette systems available.</p>
                </div>
              </a>
            </div>
        </div>
      </a>
      <a href="{{URL::to('/product_rsl')}}">
        <div class="col-md-6">
              <div class="blog_box_wrapper">
                <div class="blog_img_wraper"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_RSL.png')}}" alt=""> </div>
                <div class="blog_icon_overlay">
                  <ul>
                    <li> 19 <span> SOLD</span> </li>
                    
                  </ul>
                </div>
                <a href="{{URL::to('/product_rsl')}}">
                  <div class="blog_btm_cntnt">
                    <h2>RSL </h2>
                    <p class="pad-b-10">Non-contact sheet resistance and leakage measurement of ultra shallow junctions (UJS). Measurement on production wafers. Semi-automated and fully automated...</p>
                  </div>
                </a>
              </div>
        </div>
      </a>
    </div>
  </div>






</div>
</div>
<!-- Inner Page Wrapper End -->
<!-- this is the -->
<h2><span>~ FRONTIER SEMICONDUCTOR ~</span> </h2>

<!-- Start Pagination -->
<ul class="pagination">
<li><a href="{{URL::to('/product_list')}}">&lt;</a></li>
	<li><a  href="{{URL::to('/product_list')}}">1</a></li>
	<li><a class="active" href="{{URL::to('/product_list2')}}">2</a></li>
	<li><a href="{{URL::to('/product_list2')}}">&gt;</a></li>
</ul>
<!-- this end of pagination -->



<!-- Our CTA Wrapper Start -->
<div class="our-cta-wrapper">
<div class="container">
<div class="cta-content">
<h2>Request for More Informations</h2>
<a href="{{URL::to('/contact_us')}}" class="bttn">More Informations</a>
</div>
</div>
</div>
<!-- Our CTA Wrapper End -->

@endsection

