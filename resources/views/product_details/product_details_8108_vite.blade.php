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
        <h1>8108 VITE</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:450px;width:380px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_8108_VITE.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul>
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About 8108 VITE Product </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            Virtual Interface Technology for 3D-IC Metrology: TSV profile (depth, top & bottom CD) , Remaining Silicon Thickness (RST), Copper Nail Height, Bump Height and Cu pillar Height, Edge trim profile.
                            <br>
                            <br>
                            New high speed, high accuracy non-contact characterization of thin wafers, through silicon vias (TSV), bumps, MEMS structures and novel materials. FSM 8108 VITE can be employed in the front-end and backend. It provides thickness, TTV, and topography of Si and compound materials, edge trim geometry, multilayer thickness and topography of wafers on tape, on sapphie,or on glass. Measurement of warp of highly warped wafers and measurement of  thick films.
                    </div>

                    <div>


                        <h2>8108 VITE</h2>
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
                                    <li>Specification</li>
                                    <li>Specification</li>
                                    <li>Specification</li>
                                    <li>Specification</li>
                                    <li>Specification</li>
                                </ul>
                            </div>
                        </div>

                        <div id="application" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Applications</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>Specification</li>
                                    <li>Specification</li>
                                    <li>Specification</li>
                                    <li>Specification</li>
                                    <li>Specification</li>
                                </ul>
                            </div>
                        </div>

                        <div id="feature" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Features</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>Specification</li>
                                    <li>Specification</li>
                                    <li>Specification</li>
                                    <li>Specification</li>
                                    <li>Specification</li>
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
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_vit_c2c_sm.PNG')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_VITE_C2C')}}">VITE C2C</a></h5>
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