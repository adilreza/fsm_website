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
        <h1>128G-450</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:400px; width:380px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128G-450.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        {{-- <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul> --}}
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About 128G-450 Product </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            The FSM 128 Series systems are room temperature,  full-wafer 2D/3D stress mapping systems. 128 systems use FSM's patented non-contact Opti-Lever dual-laser auto-switching technology featuring a micropositioning detector to measure the laser beam deflection with high precision over a large dynamic range of small to large bow or stress. FSM's stress gauges have the ability to scan 1000 points per inch in seconds for high resolution, high precision stress mapping on blanked and patterned wafers.
                            <br>
                            <br>
                            Film stress and wafer bow measurement for wafers up to 450mm wafer or flat panel displays. 2D/3D stress mapping standard. Semi-automated system with convenient wafer loading and retrieval.
                        </p>

                    </div>

                    <div>


                        <h2 style="padding-bottom:60px;font-size:1px;">.</h2>
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
                                    <li>FSM 128-G (400MM) MANUAL FILM STRESS AND WAFER BOW
                                        MAPPING SYSTEM</li>
                                    <li>The system is a semi automated room temperature stress measurement tool.Wafer stress is determined by measuring the wafer curvature before and after
                                        film deposition on silicon wafers.</li>

                                    <li>FSM control module with Intel Core i3/i5 or later of greater than or equal to 1.0
                                        TB of data storage capacity, 2 GB of RAM, 4 USB ports min., 2RJ-45 ethernet
                                        connections, and DVD R/W drive.</li>
                                    <li><strong>Stress range</strong> : 1 x 10<sup>7</sup>

                                        to 4 x 10<sup>10</sup> dynes/cm<sup>2</sup> (Provided the wafer curvature change before and after
                                        processing is greater than 1micron (bow height) for a 447 mm
                                        scan line.)</li>
                                    <li><strong>Wafer bow sensitivity</strong> : 1 micron bow height change. P doped Si<100> </li>
                                    <li><strong>Wafer sizes </strong>: 50mm, 100mm, 150mm, 200mm and 300mm</li>
                                    <li><strong>Scan range</strong> : Up to 194mm with 3mm edge exclusion</li>
                                    <li><strong>Scan line</strong> : Single scan line at any wafer orientation</li>
                                    <li><strong>Mapping</strong> : Multiple scan lines for wafer maps up to 32
                                        line scans, 6 lines recommended.</li>
                                    <li><strong>Data Acqusition</strong> : 40 points/mm along line scan</li>
                                    <li><strong>Static Stress
                                            Repeatability R/2%</strong>0.5% using a 5000Å W deposited film,
                                        ambient, repeat 10 X’s.</li>
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
                                        1X107 dynes/cm2 to 4X1010 dynes/cm2</li>
                                    <li>System is capable of performing single scan line or multi scan lines for stress or
                                        wafer bow mapping.</li>
                                    <li>Film stress measurement data and wafer bow results can be displayed and
                                        printed in tabular formats.</li>
                                    <li>Stress and wafer bow maps can be exported as bitmap files.</li>
                                    <li>The pre and post stress wafers can be tracked by wafer number or wafer ID.</li>
                                </ul>
                            </div>
                        </div>

                        <div id="feature" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Features</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>Manual loading of wafers on to sample.</li>
                                    <li>Capable of accepting 300mm or smaller wafer.</li>
                                    <li>Motorized wafer stage to enable easy wafer loading and retrieval.</li>

                                            <li>The system conforms to S2-0200 guidelines.</li>
                                            <li>An emergency shut off (EMO) circuit is provided to totally de-energize the
                                                equipment in the event of an emergency situation – EMO circuits are

                                                supplemented by a control circuit which must be manually activated to re-
                                                energize the equipment. EMO buttons are of mushroom style, one inch in

                                                diameter, red in color, and with a protective collar to prevent accidental
                                                activation.</li>

                                    <li>The system includes a 17” Flat Screen color monitor and 104 keyboard and
                                        mouse</li>
                                    <li>One stress measurement unit.</li>
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
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128NT_sm.PNG')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_128NT')}}">128NT</a></h5>
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
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128_C2C_sm.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_128_C2C')}}">128 C2C</a></h5>
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