@extends('../layout.master')

@section('page_title','Film Stress | Frontier Semiconductor')

@section('film_stress_page')
 


<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1> All about Film Stress</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Application</li>
      <li>Film stress</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End --> 
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper accordion-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div id="accordion">
          <div class="card">
            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="false" aria-controls="menuone" style="color:blue;">What is Film Stress?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
            <div id="menuone" class="collapse">
              <div class="card-body"> Film stress and and wafer bow measurements are an integral part in the process of reliability monitoring of deposited thin films during the chip making process.
                Stress monitoring has become increasingly critical with the advent of 3D integrated circuits. </div>
            </div>
          </div>
          <br>
          <div class="card">
                <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3">Which services you will get?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                <div id="menu3" class="collapse show">
                  <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
                </div>
              </div>
            <br> 
          <div class="card">
            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo" style="color:green;">Types of Film Stress.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
            <div id="menutwo" class="collapse">
              <div class="card-body"> There are three types of film stress: global, local, and lattice level stress. FSM offers solutions for all three types in our 128/500/900 Series, 127 Series, and Raman 360 tools. </div>
            </div>
          </div>
          <br>
         
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div id="accordion" class="accordion-new">
          <div class="card">
            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuonee" aria-expanded="false" aria-controls="menuone" style="color:#B53471">Traditional Film Stress.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
            <div id="menuonee" class="collapse">
              <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
            </div>
          </div>
		  <br>
          <div class="card">
            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:#0652DD;">What FSM's achievement about film stress!<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
            <div id="menu31" class="collapse show">
              <div class="card-body"> 
              <img width="100px" height="100px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/short_image/fim_stress.jpeg')}}" alt="">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
            </div>
          </div>
          <br>
       
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container-fluid">
        <div class="section-title">
            <h2>Our Product for Film Stress</h2>
            <div class="separator"></div>
        </div>

    
        <div id="900series" class="container">
                <h3>900 Series for Film Stress</h3>
                <hr style="width:75%;">
                <br>
            <div class="row">
              <a href="{{URL::to('/product_details')}}">
                <div class="col-md-4">
                    <div class="blog_box_wrapper">
                    <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_900_C2C.png')}}" alt=""> </div>
                      <div class="blog_icon_overlay">
                        <ul>
                          <li> 19 <span> SOLD</span> </li>
                         
                        </ul>
                      </div>
                      <a href="{{URL::to('/product_details')}}">
                        <div class="blog_btm_cntnt">
                          <h2>900 C2C</h2>
                          <p class="pad-b-10">Rapid Thermal Mechanical Characterization of novel materials. Simulataneous..</p>
                        </div>
                      </a>
                    </div>
                </div>
              </a>
              <a href="{{URL::to('/product_details')}}">
                <div class="col-md-4">
                      <div class="blog_box_wrapper">
                        <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_900TC_VAC.png')}}" alt=""> </div>
                        <div class="blog_icon_overlay">
                          <ul>
                            <li> 19 <span> SOLD</span> </li>
                            
                          </ul>
                        </div>
                        <a href="{{URL::to('/product_details')}}">
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





          <div class="inner-page-wrapper blog-wrapper blog-grid">
                <div id="128series" class="container">
                    <h3>128 Series for Film Stress</h3>
                    <hr style="width:75%;">
                    <br>
                <div class="row">
                <a href="{{URL::to('/product_details')}}">
                  <div class="col-md-4">
                  <div class="blog_box_wrapper">
                  <div class="blog_img_wraper"> <img width="400px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L.jpg')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                      <ul>
                        <li> 19 <span> SOLD</span> </li>
                        
                      </ul>
                    </div>
                  <a href="{{URL::to('/product_details')}}">
                      <div class="blog_btm_cntnt">
                        <h2>128L</h2>
                        <p class="pad-b-10">Film stress and wafer bow measurement for wafers up to 300mm wafer. 2D/3D stress..</p>
                      </div>
                    </a>
                  </div>
                  </div>
                </a>
            
                <div class="col-md-4">
                <a href="{{URL::to('/product_details')}}">
                  <div class="blog_box_wrapper">
                    <div class="blog_img_wraper"> <img width="400px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128G-450.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                      <ul>
                        <li> 19 <span> SOLD</span> </li>
                        
                      </ul>
                    </div>
                    <a href="{{URL::to('/product_details')}}">
                      <div class="blog_btm_cntnt">
                        <h2>128G-450</h2>
                        <p class="pad-b-10">Film stress and wafer bow measurement for wafers up to 450mm wafer or flat....</p>
                      </div>
                    </a>
                  </div>
                </a>
            
                </div>
                <a href="{{URL::to('/product_details')}}">
                    <div class="col-md-4">
                    <div class="blog_box_wrapper">
                      <div class="blog_img_wraper"> <img width="400" height="300px" src="fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128NT.PNG" alt=""> </div>
                      <div class="blog_icon_overlay">
                        <ul>
                          <li> 19 <span> SOLD</span> </li>
                        
                        </ul>
                      </div>
                      <a href="{{URL::to('/product_details')}}">
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
                <a href="{{URL::to('/product_details')}}">  
                  <div class="col-md-4">
                  <div class="blog_box_wrapper">
                  <div class="blog_img_wraper"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128_C2C.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                      <ul>
                        <li> 19 <span> SOLD</span> </li>
                        
                      </ul>
                    </div>
                    <a href="{{URL::to('/product_details')}}">
                      <div class="blog_btm_cntnt">
                        <h2>128 C2C</h2>
                        <p class="pad-b-10">Dedicated Film Stress mapping system with high resolution for high throughput...</p>
                      </div>
                    </a>
                  </div>
                  </div>
                </a>
            
                <a href="{{URL::to('/product_details')}}">
                  <div class="col-md-4">
                  <div class="blog_box_wrapper">
                    <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L_C2C.PNg')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                      <ul>
                        <li> 19 <span> SOLD </span> </li>
                        
                      </ul>
                    </div>
                    <a href="{{URL::to('/product_details')}}">
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
        </div>
                


</div>




<!-- Inner Page Wrapper End --> 
<!-- Our CTA Wrapper Start -->
<div class="our-cta-wrapper">
  <div class="container">
    <div class="cta-content">
      <h2>Your request for Information or proposal</h2>
      <a href="#" class="bttn">RFI / RFP</a> </div>
  </div>
</div>
<!-- Our CTA Wrapper End --> 

@endsection