@extends('../layout.master')

@section('page_title','Film Stress | Frontier Semiconductor')

@section('film_stress_page')



<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1> All about Film Stress</h1>
    <ul class="page-breadcrumb">
      <li><a href="{{URL::to('/')}}">Home</a></li>
      <li><a href="{{URL::to('application')}}">Application</a></li>
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
              <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone" style="color:rgb(74,200,237);"><b>What is Film Stress?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
            <div id="menuone" class="collapse show">
              <div class="card-body">
                <p style="color:gray;font-size:14px;">When thin films are deposited at high temperature or annealed at high temperature, intrinsic stresses develop in the film due to mismatch of thermal expansion coefficients between the film and substrate material. The wafer will visibly bow or bend to a measurable degree based on the stress developed in the film.
                </p>
              </div>
            </div>
          </div>
          <br>
            <div class="card">
                <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone" style="color:rgb(74,200,237);"><b>Importance of Stress Measurement in Thin Films</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                <div id="menuone" class="collapse show">
                    <div class="card-body">
                        <p style="color:gray;font-size:14px;">
                            Thin film stress measurement is a important factor for the fabricating devices. Because when the stress becomes high, the film may have suffer from delamination and adhesion issues.
                            <br>
                            Some devices have free standing beams or membranes are released, then the stress of the released film or film stack becomes critical.For beams (cantilevers), stress gradients through the thickness of the film will cause the beam to curve. For released membranes, a slightly tensile film stress is desired since compressive stress will cause membranes to buckle.

                        </p>
                    </div>
                </div>
            </div>


          <br>

        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div id="accordion" class="accordion-new">
            <div class="card">
                <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>FSM's success in film stress?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                <div id="menu3" class="collapse show">
                    <div class="card-body">
                        <p style="color:gray;font-size:14px;">Frontier Semiconductor, FSM, was founded in 1988. It currently offers a range of advanced metrology products for semiconductor applications, including Measurement Systems for Film Stress, Material Characterization for new films, Thermal Desorption Spectroscopy, Quantitative Adhesion Testers. Non-contact Electrical Characterization systems for Sheet Resistance and Leakage Current Measurements for USJ and Metal Contamination, diffusion length measurements for patterned wafers.
                        </p>
                        <p style="color:gray;font-size:14px;">FSM is the leading Manufacturer of Stress Measurement Tools capable of operating at room


                            temperature or high temperature for semiconductor, optoelectronic and flat panel applications.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="true" aria-controls="menutwo" style="color:rgb(74,200,237);"><b>Types of Film Stress</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                <div id="menutwo" class="collapse show">
                    <div class="card-body">
                        <p style="color:gray;font-size:14px;">
                            There are three types of film stress: global, local, and lattice level stress. FSM offers solutions for all three types in our 128/500/900 Series, 127 Series, and Raman 360 tools.
                        </p>
                    </div>
                </div>
            </div>
          <div class="card d-none">
            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>What FSM's achievement about film stress!</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
            <div id="menu31" class="collapse show">
              <div class="card-body">
              <img width="300px" height="250px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/fs128.png')}}" alt="">
                  <p style="color:gray;font-size:14px;">
                    Global film stress measurements at room Temperature
                  </p>
                <hr>
                <img width="300px" height="250px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/fs500.png')}}" alt="">
                  <p style="color:gray;font-size:14px;">
                    Stress Hysteresis Measurement up to 500C for thermal property and stability tests of thin films in air.
                  </p>

                  <hr>
                <img width="300px" height="250px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/fs900.jpg')}}" alt="">
                  <p style="color:gray;font-size:14px;">
                    Stress Hysteresis in vacuum or gas up to 900C for the study of annealing cycles. Thermal Desorption, Film Shrinkage, Reflectivity, and Resistivity options provide additional insight to causes of material changes with temperature.

                  </p>

              </div>
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
              <a href="{{URL::to('/product_900_C2C')}}">
                <div class="col-md-4">
                    <div class="blog_box_wrapper">
                    <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_900_C2C.png')}}" alt=""> </div>
                      <div class="blog_icon_overlay">
                        {{-- <ul>
                          <li> 19 <span> SOLD</span> </li>

                        </ul> --}}
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
                          {{-- <ul>
                            <li> 19 <span> SOLD</span> </li>

                          </ul> --}}
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





          <div class="inner-page-wrapper blog-wrapper blog-grid" style="background:white">
                <div id="128series" class="container">
                    <h3>128 Series for Film Stress</h3>
                    <hr style="width:75%;">
                    <br>
                <div class="row">
                <a href="{{URL::to('/product_128L')}}">
                  <div class="col-md-4">
                  <div class="blog_box_wrapper">
                  <div class="blog_img_wraper"> <img width="400px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L.jpg')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                      {{-- <ul>
                        <li> 19 <span> SOLD</span> </li>

                      </ul> --}}
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
                      {{-- <ul>
                        <li> 19 <span> SOLD</span> </li>

                      </ul> --}}
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
                        {{-- <ul>
                          <li> 19 <span> SOLD</span> </li>

                        </ul> --}}
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
                      {{-- <ul>
                        <li> 19 <span> SOLD</span> </li>

                      </ul> --}}
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
                      {{-- <ul>
                        <li> 19 <span> SOLD </span> </li>

                      </ul> --}}
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
        </div>



</div>




<!-- Inner Page Wrapper End -->
<!-- Our CTA Wrapper Start -->
{{-- <div class="our-cta-wrapper">
  <div class="container">
    <div class="cta-content">
      <h2>Your request for Information or proposal</h2>
      <a href="#" class="bttn">RFI / RFP</a> </div>
  </div>
</div> --}}
<!-- Our CTA Wrapper End -->

@endsection
