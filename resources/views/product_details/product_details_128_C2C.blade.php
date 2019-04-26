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
        <h1>128 C2C</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:450px; width:350px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128_C2C.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul>
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About 128 C2C Product </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            The FSM 128 Series systems are room temperature,  full-wafer 2D/3D stress mapping systems. 128 systems use FSM's patented non-contact Opti-Lever dual-laser auto-switching technology featuring a micropositioning detector to measure the laser beam deflection with high precision over a large dynamic range of small to large bow or stress. FSM's stress gauges have the ability to scan 1000 points per inch in seconds for high resolution, high precision stress mapping on blanked and patterned wafers.
                            <br>
                            <br>
                            Dedicated Film Stress mapping system with high resolution for high throughput process control for wafers up to 200mm diameter. Fully automated cassette to cassette, SECS/GEM Film Stress and Bow Measurement tool. Dual or single load port configurations available. Integrated wafer substrate thickness measurement available.
                    </div>

                    <div>


                        <h2>128 C2C</h2>
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
                                    <li>FSM 128 C2C (300MM) – SINGLE FOUP AUTOMATED FILM STRESS
                                        AND WAFER BOW MEASUREMENT SYSTEM WITH INTEGRATED
                                        WAFER SUBSTRATE THICKNESS MEASUREMENT</li>
                                    <li>The system is a Fully Automated room temperature stress measurements tool
                                        complete with Automatic Wafer Substrate Thickness Measurement (Micro
                                        Balance). Thin film stress is determined by measuring the wafer curvature
                                        before and after film deposition on 300mm diameter silicon wafers.</li>

                                    <li>Integrated with Wafer Substrate Thickness Measurement (Micro Balance).</li>
                                    <li><strong>Stress range</strong> : 1 x 10 7 to 4 x 10 10 dynes/cm<sup>2</sup></li>
                                    <li><strong>Wafer sizes</strong> : 200mm (via insert) and 300mm</li>
                                    <li><strong>Scan Range</strong> : Up to 294mm with 3mm edge exclusion</li>
                                    <li><strong>Laser type</strong> : Dual wavelength, 650nm and 780nm laser
                                        diodes</li>
                                    <li><strong>Capacity</strong> : 350g</li>
                                    <li><strong>Tare range</strong> : 0-350g</li>
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
                                        1X107 dynes/cm2 to 4X1010 dynes/cm2

                                        , (provided the wafer curvature change
                                        before and after processing is greater than 1micron (bow height) for a 294 mm
                                        scan line.) System is capable of performing single scan line or multi scan lines
                                        for stress or wafer bow mapping.</li>
                                    <li>Film stress measurement data and wafer bow results can be displayed and
                                        printed in tabular formats. Stress and wafer bow maps can be exported as
                                        bitmap files.</li>
                                    <li>System is capable of measuring the average wafer substrate thickness with
                                        Precision better than 3 microns (1sigma) for a 20 x measurement on a 300 mm
                                        blank Si wafer.</li>
                                    <li>The pre and post stress wafers can be tracked by slot number or wafer ID.</li>
                                    <li>Stress repeatability: 1.0% (1 sigma) using a 5000Å W deposited film, ambient,
                                        repeat 20 X’s.</li>
                                    <li>Wafers are contacted, held, and handled on the backside only, using vacuum
                                        during transfer. No metal contact with the wafer. For stress measurements,
                                        the wafers are supported by a 3 pin ceramic support.</li>
                                </ul>
                            </div>
                        </div>

                        <div id="feature" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Features</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>Programmable system recipes for stress and wafer bow measurement.</li>
                                    <li>Automated loading of wafers from FOUP, which includes finding and
                                        orienting the wafer center and notch.</li>
                                    <li>The system conforms to S2-0200 guidelines.</li>
                                    <li>Specification</li>
                                    <li>An emergency shut off (EMO) circuit is provided to totally de-energize the
                                        equipment in the event of an emergency situation – EMO circuits are

                                        supplemented by a control circuit which must be manually activated to re-
                                        energize the equipment. EMO buttons are of mushroom style, one inch in

                                        diameter, red in color, and with a protective collar to prevent accidental
                                        activation.</li>
                                    <li>A control module with Intel Core i7 or later, 1TB or greater storage capacity,
                                        and 2GB or greater of RAM, 4 USB ports min., 2RJ-45 ethernet connections.</li>
                                    <li>The system is designed to avoid breakage of wafers in the event of a system
                                        power loss. The system will not automatically perform operations that may
                                        result in wafer breakage when power is restored. Software will be available to
                                        interactively recover wafers after a power loss.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-12 col-lg-12 col-xl-4">


                <div class="sidebar_widget">
                    <h4> <i>Related <span> Product </span></i> </h4>
                    <hr style="width:80%;background:darkblue;">
                    <div class="latest_post_wrapper">
                        <div class="blog_wrapper1">
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L_C2C_sm.PNG')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_128L_C2C')}}">128L C2C</a></h5>
                                <div class="sc_blog_date">June 28, 2018</div>
                            </div>
                        </div>
                        <div class="blog_wrapper2">
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128G-450_sm.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_128G_450')}}">128G-450</a></h5>
                                <div class="sc_blog_date">June 28, 2018</div>
                            </div>
                        </div>
                        <div class="blog_wrapper3">
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L_sm.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_128L')}}">128L</a></h5>
                                <div class="sc_blog_date">June 28, 2018</div>
                            </div>
                        </div>
                        <div class="blog_wrapper3">
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128NT_sm.PNG')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_128NT')}}">128NT</a></h5>
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