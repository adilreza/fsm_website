@extends('layout.master')

@section('page_title', "Application | Frontier Semiconductor")

@section('application_page')

<div class="breadcrumb-wrapper">
        <div class="container">
          <h1>Application</h1>
          <ul class="page-breadcrumb">
          <li><a href="{{URL::to('/')}}">Home</a></li>
            <li>Application</li>
          </ul>
        </div>
</div>


<div class="inner-page-wrapper pricing-wrapper text-center" style="background:#f1f2f6;">
    <div class="container" style="width:96%;">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="pricing_table">
                    <div class="top_border_1"></div>
                    <div class="price_table_icon"> <img src="{{URL::asset('fsm_all_web_file/adt_image/fs900_stress.jpg')}}" style="height:100px; width:120px;"> </div>
                    <div class="price_table_title">
                        <h5>Film Stress</h5>
                    </div>
                    <div class="price_table_list" style="width:90%;margin:0 auto;">
                        <p>Film stress and and wafer bow measurements are an integral part in the process of reliability monitoring of deposited thin films during the chip making ...</p>
                    </div>
                   
                <div class="price_table_btn"> <a href="{{URL::to('/film_stress')}}">Details</a> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="pricing_table">
                <div class="top_border_1"></div>
                <div class="price_table_icon"> <img src="{{URL::asset('fsm_all_web_file/adt_image/filmadhesion.png')}}" style="height:100px; width:120px;"> </div>
                <div class="price_table_title">
                    <h5>Film Adhesion</h5>
                </div>
                <div class="price_table_list" style="width:90%;margin:0 auto;">
                    <p>Film adhesion tests are a critical step in film process development and reliability control. Adhesive failures indicate voids, contamination, and/or composition variations..</p>
                </div>
                
                <div class="price_table_btn"> <a href="{{URL::to('/film_adhesion')}}">Details</a> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="pricing_table">
                    <div class="top_border_1"></div>
                    <div class="price_table_icon"> <img src="{{URL::asset('fsm_all_web_file/adt_image/lase scanningw.png')}}" style="height:100px; width:120px;"> </div>
                    <div class="price_table_title">
                        <h5>Laser Scanning</h5>
                    </div>
                    <div class="price_table_list" style="width:90%;margin: auto;">
                        <p>FSM uses patented Laser Scanning technology to measure the radius of curvature and bow of wafers. A laser beam is directed to the wafer. The beam is reflected ...</p>
                    </div>
                    <div class="price_table_btn"> <a href="{{URL::to('/laser_scanning')}}">Details</a> </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="pricing_table">
                        <div class="top_border_1"></div>
                        <div class="price_table_icon"> <img src="{{URL::asset('fsm_all_web_file/adt_image/thin_wafer.gif')}}" style="height:100px; width:120px;"> </div>
                        <div class="price_table_title">
                            <h5>Thin wafer metrology</h5>
                        </div>
                        <div class="price_table_list" style="width:90%;margin:0 auto;">
                            <p>Thinning and backgrinding of wafers requires precise control of thickness, total thickness variation (TTV) and warp. FSM offers solutions for measurement of wafers...</p>
                        </div>
                       
                        <div class="price_table_btn"> <a href="{{URL::to('/thin_wafer_metrology')}}">Details</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="pricing_table">
                    <div class="top_border_1"></div>
                    <div class="price_table_icon"> <img src="{{URL::asset('fsm_all_web_file/adt_image/ecdefault.png')}}" style="height:100px; width:120px;"> </div>
                    <div class="price_table_title">
                        <h5>Electrical Characterization</h5>
                    </div>
                    <div class="price_table_list" style="width:90%;margin:0 auto;" >
                        <p>In IC device manufacturing electrical characteristics of layers and films must be well controlled. Conventional contact test methods on monitor wafers, like...</p>
                    </div>
                    
                    <div class="price_table_btn"> <a href="{{URL::to('/electrical_characterization')}}">Details</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="pricing_table">
                        <div class="top_border_1"></div>
                        <div class="price_table_icon"> <img src="{{URL::asset('fsm_all_web_file/adt_image/rsdefault.png')}}" style="height:100px; width:120px;"> </div>
                        <div class="price_table_title">
                            <h5>Raman Spectroscopy</h5>
                        </div>
                        <div class="price_table_list" style="width:90%;margin:0 auto;" >
                            <p>The Raman effect is the inelastic scattering of photons. The shift in energy gives information about the vibrational modes in the system. The vibrational modes ...</p>
                        </div>
                        <div class="price_table_btn"> <a href="{{URL::to('/raman_spectroscopy')}}">Details</a> </div>
                    </div>
                </div>
            </div>
        </div>



    <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="pricing_table">
                        <div class="top_border_1"></div>
                        <div class="price_table_icon"> <img src="{{URL::asset('fsm_all_web_file/adt_image/3DIC_TSV.png')}}" style="height:100px; width:120px;"></div>
                        <div class="price_table_title">
                            <h5>3DIC TSV Process Control </h5>
                        </div>
                        <div class="price_table_list" style="width:90%;margin:0 auto;">
                            <p>3DIC manufacturing is facing enormous process control issues. FSM developed an innovative technology to meet the process control needs of TSV creation...</p>
                        </div>
                       
                        <div class="price_table_btn"> <a href="{{URL::to('/tsv_process_control')}}">Details</a> </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="pricing_table">
                    <div class="top_border_1"></div>
                    <div class="price_table_icon"> <img src="{{URL::asset('fsm_all_web_file/adt_image/coherencyw.png')}}" style="height:100px; width:120px;"> </div>
                    <div class="price_table_title" >
                        <h5>Low Coherence Interferometry</h5>
                    </div>
                    <div class="price_table_list" style="width:90%;margin:0 auto;">
                        <p>A Michelson Interferometer with a low coherence light source is used to determine distances: L2 is the beam path length from the light source LS to a surface or interface ...</p>
                    </div>
                    
                    <div class="price_table_btn"> <a href="{{URL::to('/low_coherence')}}">Details</a> </div>
                    </div>
                </div>
            </div>
        </div>




</div>
        




@endsection