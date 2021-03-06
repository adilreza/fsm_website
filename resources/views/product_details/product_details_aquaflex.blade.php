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
        <h1>AQUAFLEX</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:450px; width:500px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_AQUAFLEX.PNG')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        {{-- <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul> --}}
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About Aquaflex </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            Film adhesion testing of thin films and stacks on substrates for material evaluation.
                            <br>
                            <br>
                            4-Point Bend film adhesion test. Measurement in air or liquid. For low to mid adhesion samples. Multi-chamber option for rapid testing.
                    </div>

                    <div>


                        <h2 style="padding:20px 0px;font-size:1px;"></h2>
                        <p class="d-none">Below all about the product's feature specification and applications</p>

                        <div class="tab d-none">
                            <button class="tablinks" onclick="openCity(event, 'specific')" id="defaultOpen">Specification</button>
                            <button class="tablinks" onclick="openCity(event, 'application')">Application</button>
                            <button class="tablinks" onclick="openCity(event, 'feature')">Features</button>
                        </div>

                        <div id="specific" class="tabcontent d-none">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Specification</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>
                                    <strong>Test Method : </strong>4 Point Bend Technique
                                    </li>
                                    <li>
                                        <strong>Test Failures : </strong>Related to Adhesive or
                                    Cohesive Strengths
                                    </li>
                                    <li>
                                        <strong>Load Cell Capacity : </strong>120 N ( standard)
                                    </li>
                                    <li>
                                        <strong>Load Displacement Velocity : </strong>0.12μ to 2 mm/s
                                    </li>
                                    <li>
                                        <strong>Sample size : </strong> <u>Length</u> : 1.4 to 3 " , <u>Width</u> : up to 0.4 " ,<u>Thickness</u> : up to 0.25"
                                    </li>
                                    <li>
                                        <strong>Chamber internal dimensions : </strong>
                                    5" (W) x 3"(H) x 2" (D)
                                    </li>
                                    <li>
                                        <strong> Number of Test Chambers: </strong>Up to 6
                                    Test Solution Reservoir: Qty 1 per Chamber
                                    (Optional)
                                    </li>
                                    <li>
                                        <strong>Rinse Solution Reservoir: </strong>Qty: 1 per chamber
                                    (Optional)

                                    Manual Fill and Drain Valve
                                    </li>
                                    <li>
                                        <strong>Controller : </strong> Pentium Based PC with 17" SVGA
                                    Monitor Adhesion Software
                                    </li>
                                    <li>
                                        <strong>Power : </strong> 110 V, 13 A.
                                    </li>

                                    <li>
                                        <strong>Footprint : </strong> 26"(W) x 16"(D) x 20"(H) - Single
                                    chamber
                                    </li>
                                    <li>
                                        <strong>Facilities Requirements : </strong>
                                    Fume cupboard or equivalent fixtures- if the
                                    testing solutions are corrosive.
                                    All applicable safety regulations should be
                                    complied with.
                                    Sample Preparation Equipment Required:
                                    Convection Oven ,Wafer Dicing Saw
                                    Wafer Polisher
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div id="application" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Applications</h3>
                            <hr style="width:70%">
                            <div style="margin-left:5px;" id="listdetails">
                                <ul type="square">
                                    <strong>Evaluating the Effects of CMP  </strong>
                                    <li class="ml-3">
                                    New porous low k materials in a Cu damascene
                                    structure must be compatible with CMP
                                    processes and their consumables. Cap punch
                                    through during CMP can be a major problem,
                                    and the chemical effects on the cohesive or
                                    adhesive interfacial adhesion strength should
                                    be studied.The results of such studies are
                                    useful to determine the effects of exposure of
                                    the underlying stacked structure to low
                                    selectivity or high selectivity slurry solutions
                                    during polishing.
                                    </li>
                                    <br>

                                    <strong>Evaluating the Effects of Plating Solutions </strong>
                                    <li class="ml-3"> Microdiscontinuities, like pinholes or
                                    subcritical crack growth in barrier materials,
                                    are normally detected only at the end of the
                                    integration cycle. In general, 4 Point Bend
                                    testing of these materials in an ambient
                                    environment are not sensitive enough to
                                    uncover such micro defects. With the FSM
                                    AquaFlex however, Cu barrier materials can
                                    now be measured in both an ambient
                                    environment and plating solutions to detect
                                    potential degradation of adhesion energies. The
                                    FSM AquaFlex provides a convenient method
                                    to evaluate the effectiveness of the barrier
                                    material's pore coverage in the next generation
                                    ULK (ultra low k) materials.
                                    </li>
                                    <br>
                                    <strong>Evaluating the Impact of Pretreatment </strong>
                                    <li class="ml-3">
                                    Compatibility to Plasma, Thermal Processes
                                    and Wet cleans on adhesion of hardmasks,
                                    etch-stops and diffusion barriers can also be
                                    easily quantified with the FSM Aqua Flex
                                    system.
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
                                    <strong>Simulate Real Enviromental Conditions</strong>
                                    <li class="ml-3">Evaluate effects of CMP Slurry solutions on low k/ Cu/ Cap/ Etch stop interfaces</li>
                                    <li class="ml-3">Plating solutions on Barrier materials</li>
                                    <li class="ml-3">Cleaning a solutions on materials on cohesive strength and interfaces</li>
                                    <strong>Fast and Simultaneous Testing</strong>
                                    <li class="ml-3">Multi-chambers for rapid testing.Up to 6 chambers can be controlled for
                                        simultaneous sample testing</li>
                                    <li class="ml-3">Compare adhesion energies of interfaces in ambient and in aqueous solutions.</li>
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
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" style="height:80px;width:80px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_melt.PNG')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_melt')}}">MELT</a></h5>
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