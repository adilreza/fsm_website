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
        <h1>MELT</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:480px; width:320px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_melt.PNG')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        {{-- <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul> --}}
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About MELT </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            Film adhesion testing of thin films and stacks on substrates for material evaluation.
                            <br>
                            <br>
                            Modified Edge Lift off Test to measure adhesion of thin film and thin film stacks on a wide variety of crystalline and non-crystaline substrates, such as Silicon, III-V compounds, glass, etc. Suitable for mid adhesion samples.
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
                                    <li>Modified Edge Lift Off Test</li>
                                    {{--<img style="height:320px; width:520px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_melt2.PNG')}}" alt="">--}}
                                    <li><strong>Throughput: </strong> 12 to 18 wafers/day</li>
                                    <li><strong>Ease of us: </strong>Relatively simple</li>
                                    <li><strong>Dynamic range: </strong>Limited to mid adhesion samples</li>
                                    <li><strong>Consumable cost: </strong>Relatively high</li>
                                    <li><strong>Testing: </strong>Fixed in low temperature</li>
                                </ul>
                            </div>
                        </div>

                        <div id="application" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Applications</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>The modified edge lift-off test (MELT) has gained enough acceptance in the community for evaluating interfacial adhesion that there is now commercial equipment for automating the test.</li>
                                    <li>Experimental data suggested that for crack lengths greater than 5% of the film thickness the energy release rate was independent of crack length, contradicting the rule of thumb suggesting that the crack length should be greater than 10–20 times the film thickness to obtain a steady-state energy release rate in the edge crack problem.</li>
                                </ul>
                            </div>
                        </div>

                        <div id="feature" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Features</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>Can <strong>quantify</strong> adhesive and cohesive properties</li>
                                    <li>Can test <strong>real BEOL multilayer</strong> structures</li>
                                    <li>Will generate <strong>surfaces for further analysis</strong></li>
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
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" style="height:80px;width:80px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_AQUAFLEX.PNG')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_aquaflex')}}">Aquaflex</a></h5>
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