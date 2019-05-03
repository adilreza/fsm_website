@extends('../layout.master')

@section('page_title','3DIC TSV PROCESS CONTROL | Frontier Semiconductor')

@section('film_stress_page')



    <!-- Breadcrumb Wrapper Start -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1> All about 3DIC TSV PROCESS CONTROL</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{URL::to('/')}}">Home</a></li>
                <li>Application</li>
                <li>3DIC TSV PROCESS CONTROL</li>
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="false" aria-controls="menuone" style="color:rgb(74,200,237);"><b>What is 3DIC TSV PROCESS CONTROL?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuone" class="collapse">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        3DIC manufacturing is facing enormous process control issues. FSM developed an innovative technology to meet the process control needs of TSV creation, copper reveal, and bump height measurement.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>FSM's success in 3DIC TSV PROCESS CONTROL</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu3" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        Quantification of three-dimensional integrated circuit (3DIC) benefits over corresponding 2DIC implementation for arbitrary designs remains a critical open problem, largely due to nonexistence of any "golden" 3DIC flow. Actual design and implementation parameters and constraints affect 2DIC and 3DIC final metrics (power, slack, etc.) in highly non-monotonic ways that are difficult for engineers to comprehend and predict. We propose a novel machine learning-based methodology to estimate 3DIC power benefit (i.e., percentage power reduction) based on corresponding golden 2DIC implementation parameters. The resulting 3D Power Estimation (3DPE) models achieve small prediction errors that are bounded by construction. We are the first to perform a novel stress test of our predictive models across a wide range of implementation and design-space parameters. Further, we explore model-guided implementation of designs in 3D to achieve minimum power: that is, our models recommend a most-promising set of implementation parameters and constraints, and also provide a priori estimates of 3D power benefits, based on a given design's post-synthesis and 2D implementation parameters. We achieve ≤10% error in power benefit prediction across various 3DIC designs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo" style="color:rgb(74,200,237);"><b>Types of 3DIC</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menutwo" class="collapse">
                                <div class="card-body">  <p style="color:gray;font-size:14px;"> FSM offers solutions for 3DIC in our 413 series (413 C2C, 413 PR, 413SA, 413MOT). </p></div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div id="accordion" class="accordion-new">
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuonee" aria-expanded="false" aria-controls="menuone" style="color:rgb(74,200,237);"><b>Traditional 3DIC TSV PROCESS CONTROL</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuonee" class="collapse">
                                <div class="card-body">
                                    <img width="450px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/3DIC.jpg')}}" alt="">
                                    <p style="color:gray;font-size:14px;">
                                         There are a number of key stacking approaches being implemented and explored on traditional technology. These include die-to-die, die-to-wafer, and wafer-to-wafer.<br>

                                        <br><strong>Die-to-Die: </strong>
                                        Electronic components are built on multiple die, which are then aligned and bonded. Thinning and TSV creation may be done before or after bonding. One advantage of die-to-die is that each component die can be tested first, so that one bad die does not ruin an entire stack.Moreover, each die in the 3DIC can be binned beforehand, so that they can be mixed and matched to optimize power consumption and performance (e.g. matching multiple dice from the low power process corner for a mobile application).
                                        <br><strong>Die-to-Wafer: </strong>
                                        Electronic components are built on two semiconductor wafers. One wafer is diced; the singulated dice are aligned and bonded onto die sites of the second wafer. As in the wafer-on-wafer method, thinning and TSV creation are performed either before or after bonding. Additional die may be added to the stacks before dicing.
                                        <br><strong>Wafer-to-Wafer: </strong>
                                        Electronic components are built on two or more semiconductor wafers, which are then aligned, bonded, and diced into 3D ICs. Each wafer may be thinned before or after bonding. Vertical connections are either built into the wafers before bonding or else created in the stack after bonding. These "through-silicon vias" (TSVs) pass through the silicon substrate(s) between active layers and/or between an active layer and an external bond pad. Wafer-to-wafer bonding can reduce yields, since if any 1 of N chips in a 3D IC are defective, the entire 3D IC will be defective. Moreover, the wafers must be the same size, but many exotic materials (e.g. III-Vs) are manufactured on much smaller wafers than CMOS logic or DRAM (typically 300 mm), complicating heterogeneous integration.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>What FSM's achievement about 3DIC?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu31" class="collapse show">
                                <div class="card-body">
                                    <img width="270px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/tsv413.png')}}" alt="">
                                    <p style="color:gray;font-size:14px;">
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


            <br>
            <br>

        <div class="container-fluid">
            <div class="section-title">
                <h2>Our Product for 3DIC TSV PROCESS CONTROL</h2>
                <div class="separator"></div>
            </div>



            <div id="413series" class="container">
                <h3>413 SERIES  All product</h3>
                <hr style="width:75%;">
                <br>
                <div class="row">
                    <a href="{{URL::to('/product_413_C2C')}}">
                        <div class="col-md-4">
                            <div class="blog_box_wrapper">
                                <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_C2C.png')}}" alt=""> </div>
                                <div class="blog_icon_overlay">
                                    {{-- <ul>
                                        <li> 19 <span> SOLD</span> </li>

                                    </ul> --}}
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
                                    {{-- <ul>
                                        <li> 19 <span> SOLD</span> </li>

                                    </ul> --}}
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
                                    {{-- <ul>
                                        <li> 19 <span> SOLD</span> </li>

                                    </ul> --}}
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
                                    {{-- <ul>
                                        <li> 19 <span> SOLD</span> </li>

                                    </ul> --}}
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