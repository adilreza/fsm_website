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
        <h1>RSL</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:450px;width:380px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_RSL.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        {{-- <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul> --}}
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About RSL Product </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            Contact and Non-Contact sheet resistance measurement systems for implantation, diffusion, metallization, and many other applications.
                            <br>
                            <br>
                            Non-contact sheet resistance and leakage measurement of ultra shallow junctions (UJS). Measurement on production wafers. Semi-automated and fully automated cassette to cassette systems available.
                    </div>

                    <div>


                        <h2 style="padding:20px 0px;font-size:1px;">.</h2>
                        <p>Below all about the product's feature specification and applications</p>

                        <div class="tab">
                            {{--<button class="tablinks" onclick="openCity(event, 'specific')" id="defaultOpen">Specification</button>--}}
                            <button class="tablinks" onclick="openCity(event, 'application')">Application</button>
                            <button class="tablinks" onclick="openCity(event, 'feature')">Features</button>
                        </div>

                        <div id="specific" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Specification</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li><strong>Rs Range : </strong>10 to >100k Ohm/square</li>
                                    <li><strong>Junction Depth </strong>10 nm to >2 &micro;m</li>
                                    <li><strong>Dose Range : </strong>
                                        ~ 10<sup>11</sup> to >10<sup>15</sup> ions/cm<sup>2</sup>
                                    </li>
                                    <li><strong>Repeatability : </strong>
                                        <0.1 %
                                    </li>
                                    <li><strong>Edge Exclusion : </strong>
                                        3 mm</li>
                                    <li><strong>Leakage Current : </strong>
                                        10<sup>-7</sup> to 10<sup>-2</sup> A/cm<sup>2</sup>
                                    </li>
                                    <li><strong>Mapping Time : </strong>
                                        120 pts: <1.3 min,

                                        973 pts: <2.5 min
                                    </li>
                                    <li>
                                        <strong>Configurations : </strong>
                                        200/300 mm (C2C)
                                        1.1x
                                        2.0 m footprint,

                                        200/300 mm R&D (manual)
                                        0.67 x 0.92
                                        m footprint</li>
                                </ul>
                            </div>
                        </div>

                        <div id="application" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Applications</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li><strong>RsL : </strong>

                                    JPV, carrier spreading , carrier recombination
                                    </li>
                                    <li>
                                        <strong>Rs mapping : </strong>

                                        Dose uniformity, channeling, strain relaxation

                                    </li>
                                    <li>
                                        <strong>Dose tracking : </strong>

                                    Implanter-implanter, RsL repeatability
                                    </li>
                                    <li>
                                        <strong>Anneal tracking : </strong>

                                    RTP temperature, RTP uniformity, ms-annealers
                                    </li>
                                    <li>
                                        <strong>Leakage current : </strong>

                                    Dose & damage effects in transistors, damage accumulation in implanters
                                    </li>

                                    <li>
                                        <strong>RsL calibration with 4PP databases : </strong>

                                    4PP variations, USJ effects
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="feature" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Features</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li><strong>Non-contact : </strong>

                                        No probe penetration or punch through for shallow junctions.

                                        No probe wear out or conditioning.

                                        Fast mapping using continuous wafer motion.
                                    </li>
                                    <li>
                                        <strong>Independent measurements of Rs and leakage : </strong>
                                        No Rs errors from leakage current effects.
                                    </li>
                                    <li>
                                        <strong>Wide process range (all CMOS doping steps covered) : </strong>

                                        <u> Dose range:</u> ~10<sup>11</sup> to >10<sup>16</sup> ions/cm<sup>2</sup>; Xj <10 nm to >2&micro;m.

                                        <u>Leakage:</u> 10<sup>-7</sup> to >10<sup>-3</sup> A/cm2.
                                    </li>
                                    <li>
                                        <strong>No pre-measurement chemistry steps needed : </strong>
                                        No HF cleans or screen oxidations prior to measurement. Low cost.
                                        No dopant loss for shallow junctions.
                                    </li>
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
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" style="height:80px;width:80px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_4PP.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_4pp')}}">4PP</a></h5>
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