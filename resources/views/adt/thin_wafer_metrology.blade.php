@extends('../layout.master')

@section('page_title','Thin Wafer Metrology | Frontier Semiconductor')

@section('film_stress_page')



    <!-- Breadcrumb Wrapper Start -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1> All about Thin Wafer Metrology</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Application</li>
                <li>Thin Wafer Metrology</li>
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="false" aria-controls="menuone" style="color:blue;">What is Thin Wafer Metrology?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuone" class="collapse">
                                <div class="card-body">Thinning and backgrinding of wafers requires precise control of thickness, total thickness variation (TTV) and warp. FSM offers solutions for measurement of wafers and wafers on tape. </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3" style="color:green;">FSM's success about thin wafer metrology.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu3" class="collapse show">
                                <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo" style="color:green;">Types of Thin Wafer Metrology.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menutwo" class="collapse">
                                <div class="card-body">FSM offers solutions for thin wafer metrology in our 413 Series. </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div id="accordion" class="accordion-new">
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuonee" aria-expanded="false" aria-controls="menuone" style="color:#B53471">Traditional Thin Wafer Metrology.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuonee" class="collapse">
                                <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:#0652DD;">What FSM's achievement about Thin Wafer Metrology!<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu31" class="collapse show">
                                <div class="card-body">
                                    <img width="100px" height="100px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/twm413.png')}}" alt="">
                                     <p>
                                         Substrate Thickness, Warp, and TTV Measurement with or without Tape for Wafer Backgrind and Etch Thinning processes. Non-contact Echoprobe Technology. Thin film and surface roughness options.

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
            <h2>Our Product for Thin Wafer Metrology</h2>
            <div class="separator"></div>
        </div>


        <div id="413series" class="container">
            <h3>413 SERIES for thin wafer metrology</h3>
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