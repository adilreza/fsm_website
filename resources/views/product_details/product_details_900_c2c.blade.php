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
        <h1>900 C2C</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center text-center" > <img style="height:450px;width:380px;" style="height:450px; width:300px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_900_C2C.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        {{-- <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul> --}}
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About 900 C2C </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            Stress Hysteresis in vacuum or gas up to 900C for the study of annealing cycles. Thermal Desorption, Film Shrinkage, Reflectivity, and Resistivity options provide additional insight to causes of material changes with temperature. NEW: Optional wafer rotation offers unique 2D/3D mapping to study wafer deformation as a function of temperature.
                            <br>
                            <br>
                            Rapid Thermal Mechanical Characterization of novel materials. Simulataneous extraction of stress hysteresis, thermal desorption, film shrinkage and reflectivity data during thermal cycling in vaccum up to 900 degree C. Fully automated cassette to cassette system for 300mm wafers. SECS/GEM option.
                    </div>

                    <div>


                        <h2 style="padding:20px 0px;font-size:1px;">.</h2>
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
                            <div style="margin-left:5px;" id="listdetails">
                                <ul type="square">
                                    <strong>Film Stress</strong>
                                    <li class="ml-3"><strong>Technique: </strong>Laser Scanning /Cantilever. Dual Lasers</li>
                                    <li class="ml-3"><strong>Range: </strong>1 to 4000 MPa</li>
                                    <li class="ml-3"><strong>Repeatability: </strong>1.25% (1 sigma ) using a 5000A W deposited film, for
                                        a 300mm wafer, repeat 30 Xs</li>
                                    <li class="ml-3"><strong>Temperature :</strong>Ambient to 900 deg C</li>
                                    <li class="ml-3"><strong>Temperature Ramp :</strong> 1 to 35 deg C/min for annealing cycles ( without
                                    metrology ). Typical ramp rate for Stress Hysteresrs is 2 deg C/ min to
                                        8 deg C / Min</li>
                                    <br>
                                    <strong>Wafer Substrate Thickness ( Ambient )</strong>
                                    <li class="ml-3"><strong>Range : </strong>300 to 800 microns</li>
                                    <li class="ml-3"><strong>Precision : </strong>Within 2 microns ( 1 sigma ), repeat 30 xs</li>
                                    <br>
                                    <strong>TDS ( Thermal Desorytion Spectroscopy )</strong>
                                    <li class="ml-3"><strong> Base operating Pressure : </strong>2 x 10<sup>-5</sup> Torr to 5 x 10<sup>-6</sup> Torr
                                        ( Higher vacuum available as option )</li>
                                    <li class="ml-3"><strong> Detection Range: </strong>1 to 200 AMU ( Faraday cup detector ).
                                        PMT option available</li>
                                    <li class="ml-3"><strong> Resolution : </strong>0.5 AMU at 10% height</li>

                                    <li class="ml-3"><strong> Monitoring Channels : </strong>Whole wafer monitoring up to 200 AMUs simul-
                                        taneously over programmed temperature cycle</li>
                                    <br>
                                    <strong>Wafer Sizes </strong>
                                    <li class="ml-3">300mm . 200mm available as option (with FOUP inserts)</li>
                                    <br>
                                    <strong>Vacuum Annealing Chamber</strong>
                                    <li class="ml-3"><strong> Type : </strong>Cold wall with highly reflective chamber walls</li>
                                    <li class="ml-3"><strong> Heating Type : </strong>W halogen lamps</li>
                                    <li class="ml-3"><strong> Vacuum level:</strong> 2 x 10<sup>-5</sup> Torr to 5 x 10<sup>-6</sup> Torr ( Better vacuum available
                                        as option )</li>
                                    <li class="ml-3"><strong> Turbo pump capacity : </strong>2501/s</li>
                                    <li class="ml-3"><strong> Temperature control : </strong>Programmable ramping, cooling, annealing</li>
                                    <li class="ml-3"><strong> Temperature Range : </strong>Ambient to 900 deg C</li>

                                    <li class="ml-3"><strong> Temperature Stability : </strong>Within 2 deg C at set point after 1 min stabiliza
                                        tion</li>

                                    <li class="ml-3"><strong>Temperature Ramp : </strong>1 to 35 deg C/min</li>
                                    <br>
                                    <strong>Wafer Automation</strong>
                                    <li class="ml-3">Robotic Handler with Notch Aligner</li>
                                    <li class="ml-3"><strong> Minienvironment : </strong>ULPA filter. Class 1 or 2</li>
                                    <li class="ml-3"><strong> FOUP : </strong>Single or Dual FOUPs</li>
                                    <li class="ml-3"><strong> Fab Automation : </strong>300 mm SECS/GEM complaint</li>
                                </ul>
                            </div>
                        </div>

                        <div id="application" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Applications</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>The FSM 900TC-vac has been used routinely for thermal
                                        stability evaluation of new materials, by several leading fabs
                                        and R&D centers around the world. With the Automated

                                        FSM 900C2C, the power of Film Stress and Material char-
                                        acterization can now migrate right into the 300mm produc-
                                        tion facilities</li>
                                    <li>Thermal Mechanical Characterization with the FSM 900C2C
                                        is rapid . Whole 300mm or 200mm wafers can be measured
                                        simultaneously for :
                                        Residual Film Stress ( Room Temperature),
                                        High Temperature Stress Hysteresis (ambient to 9000 C),

                                        TDS (Thermal Desorption Spectroscopy) for material out-
                                        gassing analysis.</li>
                                    <li>
                                        The system can also be used to extract information like CIE
                                        ( Coefficient of Thermal Expansion ) of new films</li>
                                </ul>
                            </div>
                        </div>

                        <div id="feature" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Features</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>Fully robotic control, with Factory Automation for 300mm Material
                                        Characterization and Film Stress Measurements
                                        Options<br>
                                        <aside>
                                            <strong>Single Chamber Version </strong> ( Single or Dual FOUP) :

                                            High Temperature Stress Hysteresr.s and TDS for material Characterization ( Up to 900 deg C)
                                        </aside>

                                        <aside>
                                            <strong>Dual Chamber Version : </strong>
                                            <u>First Chamber</u>: Automated Film Sfress, WaferBow Mapper
                                            with Substrate Thickness Measurements,
                                            <u>Second Chamber : </u>High Temperature Stress Hysteresis and
                                            TDS for Material Characterization ( up to
                                            900 deg C)
                                        </aside>
                                    </li>
                                    <li>
                                        <strong>Dual chamber Features: </strong>Capable of Room Temperature Stress, 3 D wafer
                                        Mapping and Substrate Thickness Measurement in one chamber and High
                                        Temperature Material characterization in another chamber simultaneously
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
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_900TC_VAC_sm.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_900TC_VAC')}}">900TC-VAC</a></h5>
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