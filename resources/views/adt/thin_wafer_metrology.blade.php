@extends('../layout.master')

@section('page_title','Thin Wafer Metrology | Frontier Semiconductor')

@section('film_stress_page')



    <!-- Breadcrumb Wrapper Start -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1> All about Thin Wafer Metrology</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{URL::to('/')}}">Home</a></li>
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="false" aria-controls="menuone" style="color:rgb(74,200,237);"><b>What is Thin Wafer Metrology?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuone" class="collapse">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        Thinning and backgrinding of wafers requires precise control of thickness, total thickness variation (TTV) and warp. FSM offers solutions for measurement of wafers and wafers on tape.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>FSM's success about Thin wafer metrology</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu3" class="collapse show">
                                <div class="card-body">
                                    <img width="200px" height="200px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/fsm413.png')}}" alt="">
                                    <p style="color:gray;font-size:14px;">
                                        The FSM 413 EchoprobeTM sensor uses a patented infrared (IR) interferometry
                                        technique that provides a direct and accurate substrate thickness and thickness
                                        variation (TTV) measurement of thick to ultra-thin wafers. Configured as a Single
                                        Probe system, several materials transparent to the IR beam, such as Si, GaAs,
                                        InP, SiC, Glass, Quartz and many polymers, are readily measured. Substrate
                                        thickness of conventional wafers with patterns, tapes, bumps or bonded wafers
                                        mounted on carriers can be determined with high precision and accuracy. When
                                        configured as a Dual Probe system, the FSM 413 also provides measurements of
                                        the total thickness of the wafer, including substrate thickness and the patterned
                                        height thickness in cases the beam cannot penetrate through the material. The
                                        FSM 413PR system is specially designed to measure in addition depth of through
                                        silicon vias (TSV) as well as bump height automatically. By means of an integrated
                                        microscope and pattern recognition, the system effectively locates the bumps or

                                        TSV automatically without operator intervention. This leads to high, operator inde-
                                        pendent, reproducibility.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo" style="color:rgb(74,200,237);"><b>Types of Thin Wafer Metrology</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menutwo" class="collapse">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        FSM offers solutions for thin wafer metrology in our 413 Series.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div id="accordion" class="accordion-new">
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuonee" aria-expanded="false" aria-controls="menuone" style="color:rgb(74,200,237);"><b>Traditional Thin Wafer Metrology</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuonee" class="collapse">
                                <div class="card-body">
                                    <img width="450px" height="200px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/traditional_413.png')}}" alt="">
                                    <p style="color:gray;font-size:14px;">
                                        Metrology generally means a method of measuring numbers and volumes, mainly by using metrology equipment.
                                        Thin Wafer Metrology, though often considered synonymous with measurement, is a more comprehensive concept that refers not only to an act of measurement of thin wafer but to measurement performed by factoring in errors and accuracy, as well as the performance and mechanisms of metrology equipment.
                                        Metrology is undertaken according to the following sampling method:<br>
                                        -10 to 100 points for one die
                                        <br>- 5 to 20 dies taken from one wafer
                                        <br>- 1 to 2 wafers taken from one lot (25 wafers).

                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>What FSM's achievement about Thin Wafer Metrology?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu31" class="collapse show">
                                <div class="card-body">
                                    <img width="300px" height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/twm413.png')}}" alt="">
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