@extends('layout.master')

@section('page_title','Product Details | Frontier Semiconductor')

@section('product_details_page')

@section('custome_static')

    <link href="{{ URL::asset('fsm_all_web_file/assets/customecssjs_adil/tabs.css') }}" id="style_theme" rel="stylesheet">
    <script src="{{ URL::asset('fsm_all_web_file/assets/customecssjs_adil/detailstabs.js') }}"></script>

@endsection



<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1>500 TC</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{route('index')}}">Home</a></li>
            <li>Product</li>
            <li>Product Details</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper blog-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-8">
                <div class="blog_box_wrapper blog_box_padding posts">
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:480px;width:380px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_500TC.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        {{-- <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul> --}}
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About 500TC Product </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            Stress Hysteresis Measurement up to 500C for thermal property and stability tests of thin films in inert gas. Non-Contact Laser Scanning Technology.
                            <br>
                            <br>
                            Evaluate the thermal properties and stability (film stress) of thin films up to 500 degree C in inert gas. 200mm or 300mm chamber. Manually loading.
                    </div>

                    <div>


                        <h2 style="padding:20px 0px;font-size:1px;"></h2>
                        <p class="d-none">Below all about the product's feature specification and applications</p>

                        <div class="tab d-none">
                            <button class="tablinks" onclick="openCity(event, 'specific')" id="defaultOpen">Specification</button>
                            <button class="tablinks" onclick="openCity(event, 'application')">Application</button>
                            <button class="tablinks" onclick="openCity(event, 'feature')">Features</button>
                        </div>

                        <div id="specific" class="tabcontent d-none">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Specification</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>FSM 500TC-R (ROTATION) HIGH TEMPERATURE FILM STRESS
                                        MEASURMENT SYSTEM</li>
                                    <li>The system is a manual wafer loading with heating capability stress
                                        measurements tool. Wafer stress is determined by measuring the wafer
                                        curvature before and after film deposition on silicon wafers</li>

                                    <li><strong>Stress Range</strong> : 1 x 10<sup>7</sup>

                                        to 4 x 10<sup>10</sup> dynes/cm<sup>2</sup></li>
                                    <li><strong>Wafer Sizes</strong> : 50 to 200mm</li>
                                    <li><strong>Scan range</strong> : Up to 190mm</li>
                                    <li><strong>Repeatability</strong>1.0% (1 sigma) of average value using 5000Å W
                                        wafer, measured 30X. (ambient temperature).</li>
                                    <li><strong>Scan Line</strong> : Single scan line at any wafer orientation</li>
                                    <li><strong>Mapping</strong> : Multi scan line mapping by manually rotating
                                        wafers. Maximum of 12 line mapping with 15 deg
                                        between each line.</li>
                                    <li><strong>Laser Type</strong> : Dual wavelength, 780nm and 650nm laser diodes</li>
                                </ul>
                            </div>
                        </div>

                        <div id="application" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Applications</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>The system is able to determine film stress (either compressive or tensile) from
                                        1X10<sup>7</sup> dynes/cm<sup>2</sup> to 4X10<sup>10</sup> dynes/cm<sup>2</sup></li>
                                    <li>System is capable of performing up to 180 line scans, user programmable</li>
                                    <li>The system is capable of Stress vs. Temperature and Stress vs. Time Profiles</li>
                                    <li>Capable of monitoring wafer/film stress while cycling from room temperature
                                        through 500 ̊C</li>
                                    <li>The dual wavelength lasers based system is optimized for materials and substrates
                                        listed in the material list. The laser power is capable of accurately measuring stress
                                        on low reflectivity surfaces</li>
                                    <li>The dual wavelength lasers based system is optimized for materials and substrates
                                        listed in the material list. The laser power is capable of accurately measuring stress
                                        on low reflectivity surfaces as bitmp files.</li>
                                    <li>TThe system is capable of Stress vs. Temperature and Stress vs. Time profiles.
                                        Temperature range shall be from ambient to 500̊C</li>
                                    <li>The pre and post stress wafers can be tracked by slot number or wafer ID</li>
                                </ul>
                            </div>
                        </div>

                        <div id="feature" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Features</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>One FEM unit equipped with robotic handler and pre-aligner</li>
                                    <li>FSM control module with Intel Core i5/i7 or later processor, greater than or
                                        equial to 1TB of data storage capacity, 2GB of RAM, 4 USB ports min., 2RJ-45
                                        Ethernet connections, and DVD R/W drive</li>
                                    <li>The system includes a 19” Flat Screen color monitor, 104 keyboard and mouse</li>
                                    <li>One fully automated vacuum pumping system complete with turbo-molecular
                                        pump</li>
                                    <li>Programmable recipes for stress, wafer bow and hysteresis measurement</li>
                                    <li>Can operate in automated non-heating mode for room temperature stress
                                        and wafer bow measurement</li>
                                    <li>The system conforms to S2 and S8 guidelines. (3rd party certification.</li>
                                    <li>An emergency shut off (EMO) circuit is provided to totally de-energize the
                                        equipment in the event of an emergency situation – EMO circuits are

                                        supplemented by a control circuit which must be manually activated to re-
                                        energize the equipment. EMO buttons are of mushroom style, one inch in

                                        diameter, red in color, and with a protective collar to prevent accidental
                                        activation.</li>
                                    <li>The chamber employs a resistive heating element that can reach 500oC.
                                        Continuous inert gas purging during heating process.</li>
                                    <li>All System software is the most current version offered by FSM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-12 col-lg-12 col-xl-4">


                <div class="sidebar_widget">
                    <h4> <i>Others <span> Product </span></i> </h4>
                    <hr style="width:80%;background:darkblue;">
                    <div class="latest_post_wrapper">
                        <div class="blog_wrapper1">
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_VIT_C2C_sm.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_VITE_C2C')}}">VITE C2C</a></h5>
                                <div class="sc_blog_date r_date">June 28, 2018</div>
                            </div>
                        </div>
                        <div class="blog_wrapper2">
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128_C2C_sm.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_128_C2C')}}">128 C2C</a></h5>
                                <div class="sc_blog_date r_date">June 28, 2018</div>
                            </div>
                        </div>
                        <div class="blog_wrapper3">
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_MOT_sm.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_413_MOT')}}">413MOT</a></h5>
                                <div class="sc_blog_date r_date">June 28, 2018</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="sidebar_widget">
                    <p class="para">Frontier Semiconductor's new location: 165 Topaz St., Milpitas, CA 95035, USA. May 01, 2018
                    </p>
                    <div class="archives_wrapper">
                        <ul>
                            <li> <i aria-hidden="true" class="fa fa-phone"></i> +1 408 432 8838</li>
                            <li class="icon_ebsite"> <i aria-hidden="true" class="fa fa-envelope"></i> <a href="#">fsm100@frontiersemi.com </a> </li>
                            <li> <i class="fa fa-location-arrow"></i> <a href="#">165 Topaz st., Milpitas, CA 95035</a> </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Inner Page Wrapper End -->

<script type="text/javascript">
    document.getElementById("defaultOpen").click();
</script>





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