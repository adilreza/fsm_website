@extends('../layout.master')

@section('page_title','Laser Scanning | Frontier Semiconductor')

@section('film_stress_page')



    <!-- Breadcrumb Wrapper Start -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1> All about Laser Scanning</h1>
            <ul class="page-breadcrumb">
            <li><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="{{URL::to('application')}}">Application</a></li>
                <li>Laser Scanning</li>
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone" style="color:rgb(74,200,237);"><b>What is Laser Scanning?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuone" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        FSM uses patented Laser Scanning technology to measure the radius of curvature and bow of wafers. A laser beam is directed to the wafer. The beam is reflected at an angle that corresponds to the radius of curvature of the wafer.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="true" aria-controls="menutwo" style="color:rgb(74,200,237);"><b>Types of Laser Scanning.</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menutwo" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        FSM offers solutions for laser scanning in our 128/500/900 Series.
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
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>Which services you will get?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu3" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        Within the field of 3D object scanning, laser scanning combines controlled steering of laser beams with a laser rangefinder. Within patented Laser Scanning technology of FSM
                                        you will get several types of services in real life application.

                                    <p style="color:gray;font-size:14px;">
                                        <strong>3D object scanning :</strong> 3D object scanning allows enhancing the design process, speeds up and reduces data collection errors, saves time and money, and thus makes it an attractive alternative to traditional data collection techniques.
                                    </p>

                                    <p style="color:gray;font-size:14px;">
                                        <strong>Material processing :</strong> Depending on the power of the laser, its influence on a working piece differs: lower power values are used for laser engraving and laser ablation, where material is partially removed by the laser.
                                    </p>

                                    <p style="color:gray;font-size:14px;">
                                        <strong>Barcode readers :</strong>Many barcode readers, especially those with the ability to read bar codes at a distance of a few meters, use scanned laser beams. In these devices, a semiconductor laser beam is usually scanned with the help of a resonant mirror scanner.
                                    </p>

                                    <p style="color:gray;font-size:14px;">
                                        <strong>Space flight :</strong>When a space transporter has to dock to the space station, it must carefully maneuver to the correct position. In order to determine its relative position to the space station, laser scanners built into the front of the space transporter scan the shape of the space station and then determine, through a computer, the maneuvering commands.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card d-none">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>What FSM's achievement about Laser Scanning?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu31" class="collapse show">
                                <div class="card-body">

                                    <img width="400px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/500 series.PNG')}}" alt="">
                                    <p style="color:gray;font-size:14px;">
                                            We use FSM900 for laser scanning and FSM900 products can reach upto 900 degree celsius, while othe customers product can reach on 500 degree celsius.
                                    </p>
                                  <hr>
                                  <img width="400px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/128.PNG')}}" alt="">
                                    <p style="color:gray;font-size:14px;">
                                      FSM128 series products takes 12,000 data per scan in less than 20 sec, many more data points to reduce the standard deviation.

                                    </p>

                                    <hr>
                                  <img width="400px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/wafer.PNG')}}" alt="">
                                    <p style="color:gray;font-size:14px;">
                                      FSM laser scanning products can handle upto 300mm wafers.

                                    </p>

                            </div>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>


    <div class="container-fluid">
        <div class="section-title">
            <h2>Our Product for Laser Scanning</h2>
            <div class="separator"></div>
        </div>

        <div class="inner-page-wrapper blog-wrapper blog-grid" style="background:white;">
            <div id="128series" class="container">
                <h3>128 Series for laser scanning</h3>
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

            <div class="container">
                <h3>500 SERIES for laser scanning</h3>
                <hr style="width:75%;">
                <br>
                <div class="row">
                    <a href="{{URL::to('/product_500TC')}}">
                        <div class="col-md-7">
                            <div class="blog_box_wrapper">
                                <div class="blog_img_wraper text-center"> <img height="380px"  src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_500TC.png')}}" alt=""> </div>
                                <div class="blog_icon_overlay">
                                    {{-- <ul>
                                        <li> 19 <span> SOLD </span> </li>

                                    </ul> --}}
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

            <div id="900series" class="container">
                <h3>900 SERIES for laser scanning</h3>
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
