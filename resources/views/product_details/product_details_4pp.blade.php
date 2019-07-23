@extends('layout.master')

@section('page_title','Product Details | Frontier Semiconductor')

@section('product_details_page')

@section('custome_static')

    <link href="{{ URL::asset('fsm_all_web_file/assets/customecssjs_adil/tabs.css') }}" id="style_theme" rel="stylesheet">
    <script src="{{ URL::asset('fsm_all_web_file/assets/customecssjs_adil/detailstabs.js') }}"></script>

@endsection



<!-- Breadcrumb Wrapper Startt -->
<div class="breadcrumb-wrapper">
    <div class="container">
        <h1>4PP</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:430px;width:480px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_4PP.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        {{-- <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul> --}}
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About 4PP Product </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            Contact and Non-Contact sheet resistance measurement systems for implantation, diffusion, metallization, and many other applications.
                            <br>
                            <br>
                            4-Point Probe Technique for measuring the sheet resistance of epi, metal films, substrates. Table top and fully automated cassette to cassette systems available.
                    </div>

                    <div>


                        <h2 style="padding:20px 0px;font-size:1px;">.</h2>
                        <p>Below all about the product's feature specification and applications</p>

                        <div class="tab">
                            {{--<button class="tablinks" onclick="openCity(event, 'specific')" id="defaultOpen">Specification</button>--}}
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
                                        <strong>Film types : </strong>Ti, TiN, W, WN, Cu, Al, WSi,
                                    poly-Si, doped-Si, bulk-Si, etc.
                                    </li>
                                    <li>
                                        <strong>Rs range : </strong> 1m&#8486; - 1M&#8486;
                                    </li>
                                    <li>
                                        <strong>Accuracy: </strong><0.5% of NIST standard
                                    </li>
                                    <li>
                                        <strong>Repeatibility : </strong>static < O.2%, 1 sigma

                                    (same point, 20 repeat, on stable film),
                                    dynamic < 0.2%, 1 sigma
                                    (same point, 7 load-unload)
                                    <li>
                                        <strong>Long Term Repeatibility : </strong> < 0.3% lsigma in 7days
                                    </li>
                                    <li>
                                        <strong>Sampling Speed : </strong>< 2 seconds per sample
                                    </li>
                                    <li>
                                        <strong>Edge exclusion : </strong> 1 mm
                                    </li>
                                    <li><strong>Foot print : </strong>
                                        <u>200/30Omm C2C dualFOUP</u> :
                                        1.16m(width)x 2.O1 m (depth),
                                        <u>2O0/300mm manual</u> :
                                        0.35m (width)x 0.75m (depth)x 0.5m (height)</li>

                                </ul>
                            </div>
                        </div>

                        <div id="application" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Applications</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>FSM 4pp tool is available in semiautomatic(manual wafer loading) and cassette lo cassette (c2c) versions
                                        for both 200 ard 300mm wafers with single FOUP. 
                                        Dual FOUP system with SECS/GEM capability
                                        are available as option</li>
                                </ul>
                            </div>
                        </div>

                        <div id="feature" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Features</h3>
                            <hr style="width:70%">
                            <div style="margin-left:5px;" id="listdetails">
                                <ul type="square">
                                    <strong>Hardware Features</strong>
                                    <li class="ml-3">Adjustable pressure WC or Auzmiun tip probe</li>
                                    <li class="ml-3">Standard single probe</li>
                                    <li class="ml-3">Configuration switching</li>
                                    <li class="ml-3">Standard single hand robot</li>
                                    <li class="ml-3">Automatic probe conditioning</li>
                                    <li class="ml-3">Option: Multiple probe configuration</li>
                                    <li class="ml-3">Option: dualhand robot</li>
                                    <li class="ml-3">Option: Non-contact RsL probe for junction wafer</li>
                                    <br>
                                    <strong>Analysis Features</strong>
                                    <li class="ml-3">Recipe driven mapping coordinate</li>
                                    <li class="ml-3">Rs Contour and color map</li>
                                    <li class="ml-3">Line scan and circular scan</li>
                                    <li class="ml-3">Probe qualification and calibration routine</li>
                                    <li class="ml-3">Text raw data and pdf summary export</li>
                                    <li class="ml-3">Complete statistic result summary</li>
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
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" style="height:80px;width:80px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_RSL.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_rsl')}}">RSL</a></h5>
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