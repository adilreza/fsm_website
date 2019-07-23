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
        <h1>413MOT</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:450px;width:400px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413MOT.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        {{-- <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul> --}}
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About 413MOT Product </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            Substrate and tape total and individual thicknesses, warpage, and TTV Measurement. Able to measure with or without backing tape. For wafer back-grind and etch thinning processes control. Non-contact Echoprobe or VITE Technology. Thin film and surface roughness options.
                            <br>
                            <br>
                            Thickness and total thickness variation (TTV) mapping system. TTV and Thickness of wafer substrate, thick layers, wafers on tape, bonded wafers, etc. Manual loading, auto-mapping. Warp, Roughness, and Thin Film Thickness measurement options. Systems up to 300mm diameter wafers with or without frame.
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
                                    <li>FFSM 413-EC MOT (DP) –300mm WAFER SUBSTRATE THICKNESS

                                        MEAUREMENT SYSTEM2</li>
                                    <li>The Wafer Thickness Measurement System measures Substrate thickness using
                                        a non contact optical system with improved Dual Echoprobe sensors4</li>
                                    <li>Manual loading for 200mm and 300mm wafers with frame onto measurement
                                        stage. Manual loading of wafers is done through a manual loading port in the
                                        tool.</li>
                                    <li>The system is able to measure Wafer Substrate Thickness after backgrind or
                                        etching, when at least one surface is smooth not patterned and other surface is
                                        smooth, not patterned, or patterned</li>
                                    <li>Improved range of Si wafer thickness is from 20 microns6

                                        to 780 microns, when

                                        warp is below 3 mm for 200 mm wafer in fully automated mode.</li>
                                    <li><strong>Quantity Measured</strong> : Thickness of the transparent portion of the

                                        substrate (for single probe operation)<br>
                                        Total thickness of stack of materials (for dual probe operation)
                                    </li>
                                    <li><strong>Range</strong>: 20-780 um for Si (in semi-auto mode)<br>
                                        0 - 3 mm(for dual probe operation)
                                    </li>
                                    <li><strong>Materials Measured</strong> : Si, GaAs, other isotropic materials when
                                        user provides refractive index at 1.3 um (for single probe operation)<br>
                                        Transparent and one nontransparent
                                        materials sandwich in between(for dual probe operation)
                                    </li>
                                    <li><strong>Spot Size</strong> : 60um</li>
                                    <li><strong>Accuracy</strong> : 10um for warp <200um</li>
                                </ul>
                            </div>
                        </div>

                        <div id="application" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Applications</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>Measuring the Wafer substrates with grinding tape5

                                        (with probe facing the backside of

                                        the wafer)</li>
                                    <li>You can measure Bare Si wafer substrate, Untaped Si wafer substrate</li>
                                    <li>You can measure Via depth using microscope and CCD camera</li>
                                    <li>Robotic Handling System (vacuum end effector) to handle 200mm unmounted
                                        wafers with full automated thickness measurement with Notch Aligner
                                        operational (upgradeable to FOUP for 300mm wafers).</li>
                                    <li>The system is able to measure Wafer Substrate Thickness after backgrind or
                                        etching, when at least one surface is smooth not patterned and other surface is
                                        smooth, not patterned, or patterned</li>
                                </ul>
                            </div>
                        </div>

                        <div id="feature" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Features</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>Programmable data points available for 2D color mapping. Results in Minimum,
                                        Maximum, Average.</li>
                                    <li>All system software (32 bit) Windows XP Pro based, will be the most current
                                        version offered by FSM</li>
                                    <li><strong>Requirements</strong> : <b>Power:</b> 110 or 220VAC, 50/60 Hz, Single Phase, 3 wires
                                        <b> Vacuum</b>: > 25" Hg(600mm) @ 50 sec/cc,
                                        <b> Air</b>: 70psi compressed air,
                                        Vibration of the floor on which system is installed has to meet FSM
                                        specifications.</li>
                                    <li><strong>Warranty</strong> : The parts and labor warranty period will be one year against manufacturing
                                        defects upon acceptance or 14 months upon ex-factory date, whichever occurs
                                        first. In no case shall acceptance of the tool exceed 2 months from the date of
                                        ex-factory.</li>
                                    <li><strong>Note</strong> : Warranty does not include consumables.<br>
                                        All items in this standard are subject to change pending submission of buyer’s
                                        purchase order, specifications (if applicable) and agreement by FSM and buyer to
                                        the term and conditions of purchase.<br>

                                        All representative wafers and all wafer- tape combination have to be tested and pre-
                                        qualified for wafer handling by FSM engineers at FSM facilities.: </li>
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
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_C2C_sm.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_413_C2C')}}">413 C2C</a></h5>
                                <div class="sc_blog_date r_date">June 28, 2018</div>
                            </div>
                        </div>
                        <div class="blog_wrapper2">
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_SA_sm.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_413_SA')}}">413 SA</a></h5>
                                <div class="sc_blog_date r_date">June 28, 2018</div>
                            </div>
                        </div>
                        <div class="blog_wrapper3">
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_PR_sm.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_413_PR')}}">413 PR</a></h5>
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