@extends('../layout.master')

@section('page_title','Film Adhesion | Frontier Semiconductor')

@section('film_stress_page')



    <!-- Breadcrumb Wrapper Start -->
        <div class="breadcrumb-wrapper">
            <div class="container">
                <h1> All about Film Adhesion</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Application</li>
                    <li>Film Adhesion</li>
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="false" aria-controls="menuone" style="color:blue;">What is Film Adhesion?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuone" class="collapse">
                                <div class="card-body"> Film adhesion tests are a critical step in film process development and reliability control. Adhesive failures indicate voids, contamination, and/or composition variations in a film. FSM offers systems testing in air as well as in liquid. Testing in liquid reveals the effect of solutions on the material's cohesive strength and interfaces. </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3" style="color:green;">FSM's success in film_adhesion<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu3" class="collapse show">
                                <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo" style="color:green;">Types of Film Adhesion.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menutwo" class="collapse">
                                <div class="card-body"> There are two types of film adhesion testers: MELT, Aquaflex. FSM offers solutions for all these two types in our Melt and Aquaflex tools. </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div id="accordion" class="accordion-new">
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuonee" aria-expanded="false" aria-controls="menuone" style="color:#B53471">Traditional Film Adhesion.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuonee" class="collapse">
                                <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:#0652DD;">What FSM's achievement about film adhesion!<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu31" class="collapse show">
                                <div class="card-body">
                                    <img width="100px" height="100px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/fddefault.PNG')}}" alt="">
                                    <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. 
                                </p>
                                
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>




    <div class="container-fluid">
        <div class="section-title">
            <h2>Our Product for Film Adhesion</h2>
            <div class="separator"></div>
        </div>



        <div class="container">
            <h3>ADHESION TESTERS SERIES</h3>
            <hr style="width:75%;">
            <br>
            <div class="row">
                <a href="{{URL::to('/product_melt')}}">
                    <div class="col-md-6">
                        <div class="blog_box_wrapper">
                            <div class="blog_img_wraper"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_melt.PNG')}}" alt=""> </div>
                            <div class="blog_icon_overlay">
                                <ul>
                                    <li> 19 <span> SOLD</span> </li>
                                </ul>
                            </div>
                            <a href="{{URL::to('/product_melt')}}">
                                <div class="blog_btm_cntnt">
                                    <h2>MELT</h2>
                                    <p class="pad-b-10">Modified Edge Liftoff Test to measure adhesion of thin film and thin film stacks on a wide variety of crystalline and non-crystaline substrates, such as Silicon</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
                <a href="{{URL::to('/product_aquaflex')}}">
                    <div class="col-md-6">
                        <div class="blog_box_wrapper">
                            <div class="blog_img_wraper"> <img width="320px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_AQUAFLEX.PNG')}}" alt=""> </div>
                            <div class="blog_icon_overlay">
                                <ul>
                                    <li> 19 <span> SOLD </span> </li>

                                </ul>
                            </div>
                            <a href="{{URL::to('/product_aquaflex')}}">
                                <div class="blog_btm_cntnt">
                                    <h2>AQUAFLEX</h2>
                                    <p class="pad-b-10">4-Point Bend film adhesion test. Measurement in air or liquid. For low to mid adhesion samples. Multi-chamber option for rapid testing.</p>
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