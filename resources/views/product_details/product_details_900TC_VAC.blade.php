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
        <h1>900TC-VAC</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:450px; width:350px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_900TC_VAC.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul>
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About 900TC-VAC </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            Stress Hysteresis in vacuum or gas up to 900C for the study of annealing cycles. Thermal Desorption, Film Shrinkage, Reflectivity, and Resistivity options provide additional insight to causes of material changes with temperature. NEW: Optional wafer rotation offers unique 2D/3D mapping to study wafer deformation as a function of temperature.
                            <br>
                            <br>
                            Rapid Thermal Mechanical Characterization of novel materials. Simulataneous extraction of stress hysteresis, thermal desorption, film shrinkage and reflectivity data during thermal cycling in vacuum up to 900 degree C. Manually loading system.
                    </div>

                    <div>


                        <h2>900TC-VAC</h2>
                        <p>Below all about the product's feature specification and applications</p>

                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'specific')" id="defaultOpen">Specification</button>
                            <button class="tablinks" onclick="openCity(event, 'application')">Application</button>
                            <button class="tablinks" onclick="openCity(event, 'feature')">Features</button>
                        </div>

                        <div id="specific" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Specification</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>FSM 900TC-VAC (300MM) STRESS MEASUREMENT SYSTEM WITH
                                        HIGH TEMPERATURE VACUUM CHAMBER AND INTEGRATED
                                        METROLOGY FOR LOW K, CU AND NOVEL FILMS
                                        CHARACTERIZATION</li>
                                    <li>The system is a fully automated stress measurements tool with heating
                                        capability. Wafer stress is determined by measuring the wafer curvature before
                                        and after film deposition on silicon wafers</li>
                                    <li>FSM control module with Intel Core i5/i7 or later processor, greater than or
                                        equial to 1TB of data storage capacity, 2GB of RAM, 4 USB ports min., 2RJ-45
                                        Ethernet connections, and DVD R/W drive</li>
                                    <li><strong>Stress Range</strong> : 1 x 10<sup>7</sup>

                                        to 4 x 10<sup>10</sup> dynes/cm<sup>2</sup></li>
                                    <li><strong>Scan range</strong> : Up to 447mm</li>
                                    <li><strong>General
                                            Capabilities</strong> : Capable of 300/450mm wafer
                                        w/ or w/o notch (P1)</li>
                                    <li><strong>Wafer Position Accuracy</strong> : Translation: <0.1mm
                                        Rotation:<1 degree (P1)
                                    </li>
                                    <li><strong>Tool up time</strong> : >95% (P1)</li>
                                    <li><strong>Safety Specs</strong> : <br>(1) SEMI S2, S8 (P1)<br>
                                        &nbsp;(2) CE and Oregon State
                                        approved 3rd party electrical
                                        inspection (P1)</li>
                                    <li><strong>Temperature range:
                                            Vacuum mode</strong>Ambient to 900 C.</li>
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
                                        1X10<sup>7</sup> dynes/cm<sup>2</sup> to 4X10<sup>10</sup> dynes/cm2</li>
                                    <li>System is capable of performing up to 180 line scans, user programmable</li>
                                    <li>The system is capable of Stress vs. Temperature and Stress vs. Time Profiles</li>
                                    <li>Film stress measurement data and wafer bow results can be displayed and printed
                                        in tabular formats</li>
                                    <li>Temperature range from ambient to 900oC; cryo cooling to -50 ̊C</li>
                                    <li>The system is capable of determining temperature expansion coefficients and
                                        thermal stability of thin films after multiple thermal cycles</li>
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
                                    <li>All System software is the most current version offered by FSM</li>
                                </ul>
                            </div>
                        </div>                    </div>
                </div>


            </div>
            <div class="col-md-12 col-lg-12 col-xl-4">


                <div class="sidebar_widget">
                    <h4> <i>Related <span> Product </span></i> </h4>
                    <hr style="width:80%;background:darkblue;">
                    <div class="latest_post_wrapper">
                        <div class="blog_wrapper1">
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_900_C2C_sm.PNG')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_900_C2C')}}">900 C2C</a></h5>
                                <div class="sc_blog_date">June 28, 2018</div>
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






<!-- Our CTA Wrapper Start -->
<div class="our-cta-wrapper">
    <div class="container">
        <div class="cta-content">
            <h2>Your request for Information or proposal</h2>
            <a href="https://themeforest.net/user/sbtechnosoft/portfolio" class="bttn">RFP / RFI</a>
        </div>
    </div>
</div>
<!-- Our CTA Wrapper End -->
@endsection