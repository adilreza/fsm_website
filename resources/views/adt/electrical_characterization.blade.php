@extends('../layout.master')

@section('page_title','Electrical Characterization | Frontier Semiconductor')

@section('film_stress_page')



    <!-- Breadcrumb Wrapper Start -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1> All about Electrical Characterization</h1>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Application</li>
                <li>Electrical Characterization</li>
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="false" aria-controls="menuone" style="color:blue;">What is Electrical Characterization?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuone" class="collapse">
                                <div class="card-body"> FSM offers contact and non-contact electrical characterization metrology used in FEOL device making. </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3" style="color:green;">Fsm's success about electrical characterization.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu3" class="collapse show">
                                <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo" style="color:green;">Types of Electrical Characterization.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menutwo" class="collapse">
                                <div class="card-body"> FSM offers solutions for Electrical Characterization in our 4pp , RsL tools. </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div id="accordion" class="accordion-new">
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuonee" aria-expanded="false" aria-controls="menuone" style="color:#B53471">Traditional Electrical Characterization.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuonee" class="collapse">
                                <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:#0652DD;">What FSM's achievement about Electrical Characterization!<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu31" class="collapse show">
                                <div class="card-body">
                                    <img width="190px" height="160px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/ecdefault.png')}}" alt="">
                                    <p>FSM offers contact and non-contact electrical characterization metrology used in FEOL device making.</p>
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
            <h2>Our Product for Electrical Characterization</h2>
            <div class="separator"></div>
        </div>


        <div id="900series" class="container">
            <h3>4pp product for Electrical Characterization</h3>
            <hr style="width:75%;">
            <br>
            <div class="row">
                <a href="{{URL::to('/product_4pp')}}">
                    <div class="col-md-4">
                        <div class="blog_box_wrapper">
                            <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_4PP.png')}}" alt=""> </div>
                            <div class="blog_icon_overlay">
                                <ul>
                                    <li> 19 <span> SOLD</span> </li>

                                </ul>
                            </div>
                            <a href="{{URL::to('/product_4pp')}}">
                                <div class="blog_btm_cntnt">
                                    <h2>4PP</h2>
                                    <p class="pad-b-10">4-Point Probe Technique for measuring the sheet resistance of epi, metal films, substrates...</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>

            </div>
        </div>


<br>
        <br>


        <div class="inner-page-wrapper blog-wrapper blog-grid">
            <div id="128series" class="container">
                <h3>RsL for Electrical Characterization </h3>
                <hr style="width:75%;">
                <br>
                <div class="row">
                    <a href="{{URL::to('/product_rsl')}}">
                        <div class="col-md-4">
                            <div class="blog_box_wrapper">
                                <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_RSL.png')}}" alt=""> </div>
                                <div class="blog_icon_overlay">
                                    <ul>
                                        <li> 19 <span> SOLD</span> </li>

                                    </ul>
                                </div>
                                <a href="{{URL::to('/product_rsl')}}">
                                    <div class="blog_btm_cntnt">
                                        <h2>RsL </h2>
                                        <p class="pad-b-10">Non-contact sheet resistance and leakage measurement of ultra shallow junctions (UJS)...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </a>


                </div>


                <br>
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