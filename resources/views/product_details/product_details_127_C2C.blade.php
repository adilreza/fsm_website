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
        <h1>127 C2C</h1>
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
                    <div class="blog_img_wraper blog_img_wraper_2 text-center" > <img style="height:450px;width:380px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_127_C2C.png')}}" alt=""> </div>
                    <div class="blog_icon_overlay">
                        {{-- <ul>
                            <li> 10 <span> SOLD</span> </li>
                        </ul> --}}
                    </div>
                    <div class="btc_blog_cate_cont_wrapper">
                        <h5>About 127 C2C Product </h5>
                        <hr style="background:#071E33;width:70%;">
                        <br>
                        <p>
                            Local and Lattice Stress Measurement, Die level Topography. For in-die and in-device stress and composition control.

                            <br>
                            <br>
                            Nano Topography and Stress of dies: 1nm vertical resolution in single images sized up to 30mm x 40mm. Fully automated cassette to cassette system.Semi-automated systems available as well.
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
                            <div style="margin-left:5px;" id="listdetails">
                                <ul type="square">
                                    <strong>Topography (Litho) specifications</strong>
                                    <li class="ml-4">Edge exclusion below 100 μm (ITRS 2005: starting materials edge
                                        exclusion 1.5 mm in 2007 (down from 2 mm in 2003))
                                    </li>
                                    <li class="ml-4">Flatness reproducibility for non-patterned wafers 2 nm (ITRS
                                        2005: 20 nm)</li>
                                    <li class="ml-4">
                                        Capability to measure patterned and non-patterned wafers
                                    </li>
                                    <strong>Stress measurements</strong>
                                    <li class="ml-4">Input parameters specifications(Site topography - above, wafer thickness reproducibility
                                        better than 0.1 &#181m, thin film reproducibility as in standard Fabry-Perot or 4PP tools.)</li>
                                    <li class="ml-4">All four lateral stress tensor components measured</li>
                                    <li class="ml-4">Technology can be extended to 450 mm wafers, Flat Panel
                                        Displays, Solar Cells</li>
                                </ul>
                            </div>
                        </div>

                        <div id="application" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Applications</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>Stress metrology in film stacks and micro-features</li>
                                    <li>Management process uniformity  and stress during deposition on patterned production wafers.</li>
                                    <li>Diagnostics for preventing via plug pull-out, voiding in Cu, low-k dielectric de-lamination, other defects)</li>
                                    <li>Patterned production wafer topography for packaging
                                        and back-end manufacturing</li>
                                </ul>
                            </div>
                        </div>

                        <div id="feature" class="tabcontent">
                            <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                            <h3>Features</h3>
                            <hr style="width:70%">
                            <div style="margin-left:20px;" id="listdetails">
                                <ul type="square">
                                    <li>Finite Elements Analysis software for
                                        non-uniform and anisotropic layers</li>
                                    <li>Multilayer analysis</li>
                                    <li>Combined total stress tool with Raman
                                        spectroscopy (compatibility)</li>
                                    <li>Increase of speed in progress</li>
                                    <li>Increase of accuracy</li>
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
                            <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" style="height:80px;width:80px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_raman_360.png')}}"> </div>
                            <div class="sc_blog_text">
                                <h5><a href="{{URL::to('/product_raman360')}}">Raman 360</a></h5>
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