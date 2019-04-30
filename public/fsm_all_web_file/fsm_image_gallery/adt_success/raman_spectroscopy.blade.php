@extends('../layout.master')

@section('page_title','Raman Spectroscopy | Frontier Semiconductor')

@section('film_stress_page')



    <!-- Breadcrumb Wrapper Start -->
    <div class="breadcrumb-wrapper" xmlns:margin-right="http://www.w3.org/1999/xhtml">
        <div class="container">
            <h1> All about Raman Spectroscopy</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{URL::to('/')}}">Home</a></li>
                <li>Application</li>
                <li>Raman Spectroscopy</li>
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="false" aria-controls="menuone" style="color:blue;">What is Raman Spectroscopy?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuone" class="collapse">
                                <div class="card-body">
                                    <p style="font-size:12px; font-family: 'Josefin Sans';">
                                    The Raman effect is the inelastic scattering of photons. The shift in energy gives information about the vibrational modes in the system. The vibrational modes are a sensitive measure of stress and composition.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3" style="color:blue;">FSM's success in raman spectroscopy<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu3" class="collapse show">
                                <div class="card-body">
                                    <p style="font-size:12px; font-family: 'Josefin Sans'; ">

                                        Frontier Semiconductor, FSM, was founded in 1988. It currently offers a range of advanced metrology products for semiconductor applications, including Measurement Systems for Film Stress, Material Characterization for new films, Thermal Desorption Spectroscopy, Quantitative Adhesion Testers. Non-contact Electrical Characterization systems for Sheet Resistance and Leakage Current Measurements for USJ and Metal Contamination, diffusion length measurements for patterned wafers.
                                        We offer tools to monitor Fab based process. Now, FSM is the leading manufacturer of raman spectroscopy tools.
                                    </p>
                                    <p style="font-size:12px; font-family: 'Josefin Sans'; ">
                                        FSM Raman offers you -

                                    <p style="font-size:12px; font-family: 'Josefin Sans'; ">
                                        <strong>Stress and Wafer Process Strain zones :</strong>
                                        Hair Treatment,Electrical Mobility, Trench, Gates, Walls etc.
                                    </p>

                                    <p style="font-size:12px; font-family: 'Josefin Sans'; ">
                                        <strong>Composition or concentration :</strong>
                                        Contaminents, III-V and Si-compounds.
                                    </p>

                                    <p style="font-size:12px; font-family: 'Josefin Sans'; ">
                                        <strong>Crystal geometry and phase :</strong>
                                        Deposition conditions and roughness.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo" style="color:blue;">Types of Raman Spectroscopy.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menutwo" class="collapse">
                                <div class="card-body">
                                    <p style="font-size:12px; font-family: 'Josefin Sans'; ">
                                    FSM offers solutions for Raman Spectroscopy in our Raman 360 Series and FSM127 Series tools.
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
                            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuonee" aria-expanded="false" aria-controls="menuone" style="color:blue">Traditional Raman Spectroscopy.<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menuonee" class="collapse">
                                <div class="card-body">

                                    <p style="font-size:12px; font-family: 'Josefin Sans'; ">
                                    Semiconductors have well defined crystal lattice structures.Atoms are connected through bonds. These
                                    atoms are vibrate at certain frequency called modes. Lattice vibrational modes are also known as Phonons.
                                    To perform Raman spectroscopy, a laser beam is directed onto the sample. This laser will be aprtially absobed
                                    in sample. Input laser couples some light energy to these vibrational modes. This is the Stokes Raman Effect.
                                    Amount of energy lost by the incident photon is characteristics of each material like fingerprints.
                                    Output laser signal has lower energy, lower frequency and higher wavelength (inelastic scattering). Output signal is
                                    called Raman signal.
                                        <img style="margin-right:20px;" width="500px" height="300px"  src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/raman.png')}}" alt="">


                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3" style="color:blue;">What FSM's achievement about Raman Spectroscopy!<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
                            <div id="menu31" class="collapse show">
                                <div class="card-body">
                                    <img width="300px" height="200px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/adt_success/rsdefault.png')}}" alt="">
                                    <p style="font-size:12px; font-family: 'Josefin Sans'; ">
                                    The Raman effect is the inelastic scattering of photons. The shift in energy gives information about the vibrational modes in the system. The vibrational modes are a sensitive measure of stress and composition.
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
            <h2>Our Product for Raman Spectroscopy</h2>
            <div class="separator"></div>
        </div>


        <div class="container">
            <h3>RAMAN 360 AND FSM127 for Raman Spectroscopy</h3>
            <hr style="width:75%;">
            <br>
            <div class="row">
                <a href="{{URL::to('/product_raman360')}}">
                    <div class="col-md-6">
                        <div class="blog_box_wrapper">
                            <div class="blog_img_wraper text-center"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_raman_360.png')}}" alt=""> </div>
                            <div class="blog_icon_overlay">
                                <ul>
                                    <li> 19 <span> SOLD </span> </li>

                                </ul>
                            </div>
                            <a href="{{URL::to('/product_raman360')}}">
                                <div class="blog_btm_cntnt">
                                    <h2>Raman-360</h2>
                                    <p class="pad-b-10">Micro Raman system  for lattice level strain and material composition measurement. High spectral resolution (0.02 cm-1) and sub micron lateral resolution. </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </a>
                <a href="{{URL::to('/product_127_C2C')}}">
                    <div class="col-md-6">
                        <div class="blog_box_wrapper">
                            <div class="blog_img_wraper text-center"> <img  height="300px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_127_C2C.png')}}" alt=""> </div>
                            <div class="blog_icon_overlay">
                                <ul>
                                    <li> 19 <span> SOLD </span> </li>

                                </ul>
                            </div>
                            <a href="{{URL::to('/product_127_C2C')}}">
                                <div class="blog_btm_cntnt">
                                    <h2>127 C2C</h2>
                                    <p class="pad-b-10">Nano Topography and Stress of dies: 1nm vertical resolution in single images sized up to 30mm x 40mm. Fully automated cassette to cassette system.</p>
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
    <div class="our-cta-wrapper">
        <div class="container">
            <div class="cta-content">
                <h2>Your request for Information or proposal</h2>
                <a href="#" class="bttn">RFI / RFP</a> </div>
        </div>
    </div>
    <!-- Our CTA Wrapper End -->

@endsection