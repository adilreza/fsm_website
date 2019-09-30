@extends('../layout.master')

@section('page_title','Electrical Characterization | Frontier Semiconductor')

@section('film_stress_page')



    <!-- Breadcrumb Wrapper Start -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <h1> All about Electrical Characterization</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="{{URL::to('application')}}">Application</a></li>
                <li>Electrical Characterization</li>
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone" style="color:rgb(74,200,237);"><b>What is Electrical Characterization?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuone" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        FSM offers contact and non-contact electrical characterization metrology used in FEOL device making.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>FSM's success about electrical characterization</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a>

                            </div>

                            <div id="menu3" class="collapse show">
                                <div class="card-body">
                                    <img width="360px" height="250px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/rsl.png')}}" alt="">
                                    <p style="color:gray;font-size:14px;">
                                        Production controls for USJ (ultra-shallow junctions) requires in-line
                                        methods for measurements of sheet resistance (Rs) in the range
                                        from 100 to 900 Ohm/square for junction depths (X<sub>j</sub>), in the range of
                                        30 to less than 10 nm (according to tte ITRS03 requirements).
                                        Direct contact probes are limited by probe punch through, healing
                                        from prcbe currents and interference from surface oxide and
                                        leakage current. Optical probes give structural information on
                                        junction depth and damage levels but not electrical activation. Ihe
                                        FSM RsL tool is designed to provide direct non-contact mapping of
                                        sheet resistance and leakage current independent of junction depth.
                                        Ihese features also help fill the current metrology gaps in the
                                        evaluation of new implant and annealing tools for USJ ih the 65
                                        and 45 nm technology nodes.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="true" aria-controls="menutwo" style="color:rgb(74,200,237);"><b>Types of Electrical Characterization.</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menutwo" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        FSM offers solutions for Electrical Characterization in our 4pp , RsL tools.
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuonee" aria-expanded="true" aria-controls="menuone" style="color:rgb(74,200,237);"><b>Traditional Electrical Characterization</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuonee" class="collapse show">
                                <div class="card-body">
                                    <p style="color:gray;font-size:14px;">
                                        Develop and maintain capabilities for electrical characterization with traditional technologies, including process monitoring and control, compact device modeling, RF characterization, ESD testing, technology qualification, mixed signal prototype testing, radiation hardness testing. Comprehensive on wafer characterization of devices and circuits for development and qualification of innovative technologies.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:rgb(74,200,237);"><b>What FSM's achievement about Electrical Characterization?</b><span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu31" class="collapse show">
                                <div class="card-body">
                                    <img width="280px" height="240px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/ecdefault.png')}}" alt="">
                                    <p style="color:gray;font-size:14px;">FSM offers contact and non-contact electrical characterization metrology used in FEOL device making.</p>
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
            <h2>Our Product for Electrical Characterization</h2>
            <div class="separator"></div>
        </div>


        <div id="900series" class="container">
            <h3>4pp product for Electrical Characterization</h3>
            <hr style="width:75%;">
            <br>
            <div class="row">
                <a href="{{URL::to('/product_4pp')}}">
                    <div class="col-md-4">
                        <div class="blog_box_wrapper">
                            <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_4PP.png')}}" alt=""> </div>
                            <div class="blog_icon_overlay">
                                {{-- <ul>
                                    <li> 19 <span> SOLD</span> </li>

                                </ul> --}}
                            </div>
                            <a href="{{URL::to('/product_4pp')}}">
                                <div class="blog_btm_cntnt">
                                    <h2>4PP</h2>
                                    <p class="pad-b-10">4-Point Probe Technique for measuring the sheet resistance of epi, metal films, substrates...</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>

            </div>
        </div>


<br>
        <br>


        <div class="inner-page-wrapper blog-wrapper blog-grid" style="background:white;">
            <div id="128series" class="container">
                <h3>RsL for Electrical Characterization </h3>
                <hr style="width:75%;">
                <br>
                <div class="row">
                    <a href="{{URL::to('/product_rsl')}}">
                        <div class="col-md-4">
                            <div class="blog_box_wrapper">
                                <div class="blog_img_wraper"> <img height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_RSL.png')}}" alt=""> </div>
                                <div class="blog_icon_overlay">
                                    {{-- <ul>
                                        <li> 19 <span> SOLD</span> </li>

                                    </ul> --}}
                                </div>
                                <a href="{{URL::to('/product_rsl')}}">
                                    <div class="blog_btm_cntnt">
                                        <h2>RsL </h2>
                                        <p class="pad-b-10">Non-contact sheet resistance and leakage measurement of ultra shallow junctions (UJS)...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </a>


                </div>


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
