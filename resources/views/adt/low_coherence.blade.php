@extends('../layout.master')

@section('page_title','Low Coherence Interferometry | Frontier Semiconductor')

@section('film_stress_page')



    <!-- Breadcrumb Wrapper Start -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1> All about Low Coherence Interferometry</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="{{URL::to('application')}}">Application</a></li>
                <li>Low Coherence Interferometry</li>
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone" style="color:rgb(74,200,237);"><b>What is Low Coherence Interferometry?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuone" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        Substrate Thickness, Warp, and TTV Measurement - with or without Tape - for Wafer Backgrind and Etch Thinning processes. Non-contact Echoprobe Technology. Thin film and surface roughness options.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card d-none">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>Which services you will get?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu3" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        Based on low-coherence interferometry (LCI) technology, FSM tools can measure a wide range of materials and parts:

                                        <br><strong>-objects:</strong> industrial components and materials, films and coatings, biological tissues

                                    <br><strong>-industrial materials:</strong> plastics, polymers, glass, metals, silicone, adhesives, specular or non-specular, reflective, non reflective, turbid, semi-transparent or transparent
                                    <br><strong>-material transparency:</strong> For thickness or cross-sectional measurements, the maximum depth of light penetration depends on the material index of refraction. Most materials are somewhat transparent. Thickness of completely non-transparent films can be addressed by combining low-coherence interferometry.
                                    <br><strong>-sample sizes: </strong>objects from several microns wide.  No upper limit.
                                    <br><strong>-range of surface shapes:</strong> rough, smooth, interiors of bores and small-diameter tubes, exteriors of cylinders, concave or convex spherical shapes, filaments, thin tubing
                                    <br><strong>-static or moving surfaces:</strong> rotating or spinning objects, web inspection, in-tray inspection
                                    <br><strong>-material states:</strong> solid, liquid
                                    <br><strong>-sample temperature:</strong> from cryogenic to very hot

                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="true" aria-controls="menutwo" style="color:rgb(74,200,237);"><b>Types of Low Coherence Interferometry</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menutwo" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        FSM offers solutions for all three types in our 413 series.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>What FSM's achievement about Low Coherence Interferometry?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu31" class="collapse show">
                                <div class="card-body">
                                    {{--<img width="100px" height="100px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/lci413.png')}}" alt="">--}}
                                    <p style="color:gray;font-size:14px;">
                                        The low coherence interferometry of FSM is accurate,
                                        fast and reproducible tool for measurements for
                                        MEMs structures.
                                        It provides nondestructive alternative to
                                        complicated and time consuming methods based
                                        on electron microscope or x-ray scattering
                                        techniques
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div id="accordion" class="accordion-new">
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuonee" aria-expanded="true" aria-controls="menuone" style="color:rgb(74,200,237);"><b>Traditional Low Coherence Interferometry</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuonee" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        There are remains some limitations with traditional technologies:
                                        <img width="200px" height="200px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/lci.png')}}" alt="">
                                        <br><strong>Capacitive probes:</strong></p>
                                    <p style="color:gray;font-size:14px;"> padding-left: 10px;">
                                        -Useful for insulating or
                                        rough materials
                                        <br>-Not suitable for structured, multi-layered materials
                                    </p>

                                    <p style="color:gray;font-size:14px;">
                                        <img width="200px" height="200px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/lic2.png')}}" alt="">
                                    <br><strong>Air Pressure probes:</strong>
                                    </p>
                                    <p style="color:gray;font-size:14px;"> padding-left: 10px;">
                                        -Very reliable and fast for
                                        thick uniform wafer
                                        <br>-Delivers one value
                                        related to pressure drop
                                    </p>
                                    <p style="color:gray;font-size:14px;">
                                    <br><strong>Capacitive probes:</strong>
                                    </p>
                                    <p style="color:gray;font-size:14px;"> padding-left: 10px;">
                                        -Microscope based
                                        (DOF limited probes)
                                        <br>-Triangulation probes
                                    </p>
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
            <h2>Our Product for Low Coherence Interferometry</h2>
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
