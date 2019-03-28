@extends('layout.master')

@section('page_title','All Product List | Frontier Semiconductor')

@section('custome_static')
<link href="{{ URL::asset('fsm_all_web_file/css/adil_style.css') }}" rel="stylesheet">
@endsection

@section('product_list_page')
 



<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div id="listnav" class="container">
    <h1>All Product Of FSM</h1>
    <ul class="page-breadcrumb">
      <li><a href="#128series">128</a></li>
      <li><a href="#413series">413</a></li>
      <li><a href="#VIT(E)series">VIT(E)</a></li>
      <li><a href="#900series">900</a></li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper blog-wrapper blog-grid">
    <div id="128series" class="container">
        <h3>128 series All product</h3>
        <hr style="width:75%;">
        <br>
    <div class="row">
    <a href="{{URL::to('/product_128L')}}">
      <div class="col-md-4">
      <div class="blog_box_wrapper">
      <div class="blog_img_wraper"> <img width="400px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L.jpg')}}" alt=""> </div>
        <div class="blog_icon_overlay">
          <ul>
            <li> 19 <span> SOLD</span> </li>
            
          </ul>
        </div>
      <a href="{{URL::to('/product_128L')}}">
          <div class="blog_btm_cntnt">
            <h2>128L</h2>
            <p class="pad-b-10">Film stress and wafer bow measurement for wafers up to 300mm wafer. 2D/3D stress..</p>
          </div>
        </a>
      </div>
      </div>
    </a>

    <div class="col-md-4">
    <a href="{{URL::to('/product_128G_450')}}">
      <div class="blog_box_wrapper">
        <div class="blog_img_wraper"> <img width="400px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128G-450.png')}}" alt=""> </div>
        <div class="blog_icon_overlay">
          <ul>
            <li> 19 <span> SOLD</span> </li>
            
          </ul>
        </div>
        <a href="{{URL::to('/product_128G_450')}}">
          <div class="blog_btm_cntnt">
            <h2>128G-450</h2>
            <p class="pad-b-10">Film stress and wafer bow measurement for wafers up to 450mm wafer or flat....</p>
          </div>
        </a>
      </div>
    </a>

    </div>
    <a href="{{URL::to('/product_128NT')}}">
        <div class="col-md-4">
        <div class="blog_box_wrapper">
          <div class="blog_img_wraper"> <img width="400" height="300px" src="fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128NT.PNG" alt=""> </div>
          <div class="blog_icon_overlay">
            <ul>
              <li> 19 <span> SOLD</span> </li>
            
            </ul>
          </div>
          <a href="{{URL::to('/product_128NT')}}">
            <div class="blog_btm_cntnt">
              <h2>128NT</h2>
              <p class="pad-b-10">Film stress and wafer bow measurement for wafers up to 200mm wafer...</p>
            </div>
          </a>
        </div>
        </div>
      </a>
    </div>


    <br>
    <!-- second row------------------------------------------ -->
    <div class="row">
    <a href="{{URL::to('/product_128_C2C')}}">
      <div class="col-md-4">
      <div class="blog_box_wrapper">
      <div class="blog_img_wraper"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128_C2C.png')}}" alt=""> </div>
        <div class="blog_icon_overlay">
          <ul>
            <li> 19 <span> SOLD</span> </li>
            
          </ul>
        </div>
        <a href="{{URL::to('/product_128_C2C')}}">
          <div class="blog_btm_cntnt">
            <h2>128 C2C</h2>
            <p class="pad-b-10">Dedicated Film Stress mapping system with high resolution for high throughput...</p>
          </div>
        </a>
      </div>
      </div>
    </a>

    <a href="{{URL::to('/product_128L_C2C')}}">
      <div class="col-md-4">
      <div class="blog_box_wrapper">
        <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L_C2C.PNG')}}" alt=""> </div>
        <div class="blog_icon_overlay">
          <ul>
            <li> 19 <span> SOLD </span> </li>
            
          </ul>
        </div>
        <a href="{{URL::to('/product_128L_C2C')}}">
          <div class="blog_btm_cntnt">
            <h2>128L C2C</h2>
            <p class="pad-b-10">Dedicated Film Stress mapping system with high resolution for high throughput process..</p>
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
    <div id="413series" class="container">
        <h3>413 SERIES  All product</h3>
        <hr style="width:75%;">
        <br>
    <div class="row">
    <a href="{{URL::to('/product_413_C2C')}}">
        <div class="col-md-4">
        <div class="blog_box_wrapper">
        <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_C2C.png')}}" alt=""> </div>
          <div class="blog_icon_overlay">
            <ul>
              <li> 19 <span> SOLD</span> </li>
              
            </ul>
          </div>
          <a href="{{URL::to('/product_413_C2C')}}">
            <div class="blog_btm_cntnt">
              <h2>413 C2C</h2>
              <p class="pad-b-10">Thickness and total thickness variation (TTV) mapping system. TTV and Thickness of wafer..</p>
            </div>
          </a>
        </div>
        </div>
    </a>
    <a href="{{URL::to('/product_413_PR')}}">
      <div class="col-md-4">
      <div class="blog_box_wrapper">
        <div class="blog_img_wraper"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_PR.png')}}" alt=""> </div>
        <div class="blog_icon_overlay">
          <ul>
            <li> 19 <span> SOLD</span> </li>
          
          </ul>
        </div>
        <a href="{{URL::to('/product_413_PR')}}">
          <div class="blog_btm_cntnt">
            <h2>413 PR</h2>
            <p class="pad-b-10">413PR is specially designed for automatic substrate thickness measurement on wafers...</p>
          </div>
        </a>
      </div>
      </div>
    </a>

  <a href="{{URL::to('/product_413_SA')}}">
    <div class="col-md-4">
    <div class="blog_box_wrapper">
      <div class="blog_img_wraper"> <img height="300px" src="fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_SA.png" alt=""> </div>
      <div class="blog_icon_overlay">
        <ul>
          <li> 19 <span> SOLD</span> </li>
         
        </ul>
      </div>
      <a href="{{URL::to('/product_413_SA')}}">
        <div class="blog_btm_cntnt">
          <h2>413 SA</h2>
          <p class="pad-b-10">Thickness and total thickness variation (TTV) mapping system. TTV and Thickness...</p>
        </div>
      </a>
    </div>
    </div>
  </a>
    </div>


    <br>
    <!-- second row------------------------------------------ -->
    <div class="row">
    <a href="{{URL::to('/product_413_MOT')}}">
      <div class="col-md-4">
      <div class="blog_box_wrapper">
      <div class="blog_img_wraper"> <img width="400px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413MOT.png')}}" alt=""> </div>
        <div class="blog_icon_overlay">
          <ul>
            <li> 19 <span> SOLD</span> </li>
          
          </ul>
        </div>
        <a href="{{URL::to('/product_413_MOT')}}">
          <div class="blog_btm_cntnt">
            <h2>413MOT</h2>
            <p class="pad-b-10">Thickness and total thickness variation (TTV) mapping system. TTV and Thickness...</p>
          </div>
        </a>
      </div>
      </div>
    </a>

      
    </div>
    <br>
    <br>
    </div>

    <!-- this is the 900 series product ----->

    <!--vite series -->

    <div id="VIT(E)series" class="container">
        <h3>VIT(E) SERIES</h3>
        <hr style="width:75%;">
        <br>
    <div class="row">
    <a href="{{URL::to('/product_VIT_C2C')}}">
      <div class="col-md-4">
      <div class="blog_box_wrapper">
      <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_VIT_C2C.PNG')}}" alt=""> </div>
        <div class="blog_icon_overlay">
          <ul>
            <li> 19 <span> SOLD</span> </li>
            
          </ul>
        </div>
      <a href="{{URL::to('/product_VITE_C2C')}}">
          <div class="blog_btm_cntnt">
            <h2>VIT C2C</h2>
            <p class="pad-b-10">Dimensional metrology system for 3D-IC application: Through Silicon Via (TSV) ..</p>
          </div>
        </a>
      </div>
      </div>
    </a>

  <a href="{{URL::to('/product_8108_VITE')}}">
    <div class="col-md-4">
    <div class="blog_box_wrapper">
      <div class="blog_img_wraper"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_8108_VITE.png')}}" alt=""> </div>
      <div class="blog_icon_overlay">
        <ul>
          <li> 19 <span> SOLD</span> </li>
          
        </ul>
      </div>
      <a href="{{URL::to('/product_8108_VITE')}}">
        <div class="blog_btm_cntnt">
          <h2>8108 VITE</h2>
          <p class="pad-b-10">New high speed, high accuracy non-contact characterization of thin wafers...</p>
        </div>
      </a>
    </div>
    </div>
  </a>

    </div>


    </div>




    <!--end vite series -->



<div id="900series" class="container">
      <h3>900 SERIES  All product</h3>
      <hr style="width:75%;">
      <br>
  <div class="row">
    <a href="{{URL::to('/product_900_C2C')}}">
      <div class="col-md-4">
          <div class="blog_box_wrapper">
          <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_900_C2C.png')}}" alt=""> </div>
            <div class="blog_icon_overlay">
              <ul>
                <li> 19 <span> SOLD</span> </li>
               
              </ul>
            </div>
            <a href="{{URL::to('/product_900_C2C')}}">
              <div class="blog_btm_cntnt">
                <h2>900 C2C</h2>
                <p class="pad-b-10">Rapid Thermal Mechanical Characterization of novel materials. Simulataneous..</p>
              </div>
            </a>
          </div>
      </div>
    </a>
    <a href="{{URL::to('/product_900TC_VAC')}}">
      <div class="col-md-4">
            <div class="blog_box_wrapper">
              <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_900TC_VAC.png')}}" alt=""> </div>
              <div class="blog_icon_overlay">
                <ul>
                  <li> 19 <span> SOLD</span> </li>
                  
                </ul>
              </div>
              <a href="{{URL::to('/product_900TC_VAC')}}">
                <div class="blog_btm_cntnt">
                  <h2>900TC-VAC </h2>
                  <p class="pad-b-10">Rapid Thermal Mechanical Characterization of novel materials. Simulataneous...</p>
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
	<li><a class="active" href="{{URL::to('/product_list')}}">1</a></li>
	<li><a href="{{URL::to('/product_list2')}}">2</a></li>
	<li><a href="{{URL::to('/product_list2')}}">&gt;</a></li>
</ul>
<!-- this end of pagination -->



<!-- Our CTA Wrapper Start -->
<div class="our-cta-wrapper">
<div class="container">
<div class="cta-content">
<h2>Your request for Information or proposal</h2>
<a href="{{URL::to('/contact_us')}}" class="bttn">RFP / RFI</a>
</div>
</div>
</div>
<!-- Our CTA Wrapper End -->

@endsection

@section('custome_js_file')

<script src="{{ URL::asset('fsm_all_web_file/js/custome_js_adil.js') }}"></script>

@endsection

