@extends('/user/user_panel/user_master')
@section('page_title', 'DRF | Frontier Semiconductor')
@section('static_css_file')
<style type="text/css">
    #sample_no,#sample_size_custom{
        width:50px;
        height: 25px;
        padding:5px;
        border:none;
        border-radius: 4px;

    }
    input{
        border:none;
    }
    #list_of_t{
        padding:10px; 
        border:0.5px solid black;
        margin-right:15px;

    }
    #list_of_t span{
        font-size: 14px;
    }
   
    #list_of_t h6{
        font-size: 16px;
    }
   
</style>
    
@endsection
@section('drf_form')


    <div id="content-wrapper">

        <div class="container-fluid">
            
            <div class="container" style="background:#d2dae2;width:100%;height:1050px;border-radius:10px;border:1px solid black;">
                    <h3 class="text-center" style="padding-top:15px;">Sample Measurement Request Form</h3>
                    <hr>
                <div class="container" style="background:#d2dae2;width:98%;border-radius:10px;padding:20px;" >

                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6>1. No of Sample:</h6> 
                                </div>
                                <div class="col-sm-7">
                                    <input placeholder="" id="sample_no" type="number">
                                </div>
                            </div>
                            <hr id="custome_hr">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6>2. Sample Size(<span style="color:red;"><i>mm</i></span>)</h6> 
                                </div>
                                <div class="col-sm-7">
                                    <span>
                                        150<input type="checkbox" name="vehicle1" value="150">&nbsp;&nbsp;
                                        200<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                        300<input type="checkbox" name="vehicle2" value="300">&nbsp;&nbsp;|
                                        others <input id="sample_size_custom" type="number">
                                    </span>
                                </div>
                            </div>
                            <hr id="custome_hr">
                            <div class="row">
                                    <div class="col-sm-5">
                                        <h6>3. Substrate Material</h6> 
                                    </div>
                                    <div class="col-sm-7" style="">
                                        <span>
                                            Si<input type="checkbox" name="vehicle1" value="150">&nbsp;&nbsp;
                                            SiC<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            GaN<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            GaAs<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            Glass<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            Saphire<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            AI<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            InP<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            LiNbO3<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            Glue<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            Au<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            Cu<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            Pi<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                            DryRegister<input type="checkbox" name="vehicle2" value="300">&nbsp;&nbsp;|
                                            others <input id="sample_size_custom" type="number">
                                        </span>
                                    </div>
                            </div>
                            <hr >
                            <div class="row" style="">
                                <div clas="col-sm-2" id="list_of_t">
                                    <h6 title="Thickness Range">T. Range</h6>
                                   <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                        <h6 title="Bonded">Bonded</h6>
                                        <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                    
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                            <h6 title="Taped">Taped</h6>
                                            <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                   
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                        <h6 title="Framed">Framed</h6>
                                        <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                    
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                        <h6 title="Bumps">Bumps</h6>
                                        <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                    
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                   
                                        <h6 title="Pattern">Pattern</h6>
                                        <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                   
                                </div>
                            </div>

                            <hr>

                            <div class="row" style="">
                                    <div clas="col-sm-2" id="list_of_t">
                                        <h6 title="Wrap Range">Wrap Range</h6>
                                       <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                            <h6 title="Rough Surface">Rough Surface</h6>
                                            <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                        
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                                <h6 title="High - Doping">High - Doping</h6>
                                                <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                       
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                            <h6 title="Back Grinding">Back grinding</h6>
                                            <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                        
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                            <h6 title="Metal Layers">Metal Layers</h6>
                                            <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                        
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                       
                                            <h6 title="Thickness Range">Other(specify)</h6>
                                            <span class="text-center"> yes <input type="checkbox"> No<input type="checkbox"></span>
                                       
                                    </div>
                                </div>

                                <hr>
                                <h5 style="border-bottom:1px solid #a4b0be;width:60%;">4. Measurements Types: </h5>
                                <div class="row">
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Total Thickness">Total Thickness</h6>
                                        <input type="checkbox">
                                    </div>
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Layer Thickness">Layer Thickness</h6>
                                        <input type="checkbox">
                                    </div>

                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Warp/Box">Warp/Box</h6>
                                        <input type="checkbox">
                                    </div>
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Roughness">Roughness</h6>
                                        <input type="checkbox">
                                    </div>
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Stress">Stress</h6>
                                        <input type="checkbox">
                                    </div>
                                    <div class="col-sm-4 text-center mt-2" id="list_of_t">
                                        <h6 title="Thin Film Thickness">Thin Film Thickness(<span style="color:red;">< 15μm</span>)</h6>
                                        <input type="checkbox">
                                    </div>
                                    <div class="col-sm-3 text-center mt-2" id="list_of_t">
                                        <h6 title="Trim Width / Depth">Trim Width / Depth</h6>
                                        <input type="checkbox">
                                    </div>
                                    <div class="col-sm-2 text-center mt-2" id="list_of_t">
                                        <h6 title="CD">CD</h6>
                                        <input type="checkbox">
                                    </div>
                                        
                                </div>
                                <hr>
                                <h5 style="border-bottom:1px solid #a4b0be;width:60%;">4. Sample Description </h5>
                                <div class="row">
                                        <textarea style="border:none;"  cols="75" rows="4"></textarea>
                                </div>
                                <hr>

                                <div class="row">
                                        <div class="col-sm-5">
                                            <h6>Number of measurements sites / wafer</h6> 
                                        </div>
                                        <div class="col-sm-7">
                                            <span>
                                                5<input type="checkbox" name="vehicle1" value="150">&nbsp;&nbsp;
                                                9<input type="checkbox" name="vehicle2" value="200">&nbsp;&nbsp;
                                                15<input type="checkbox" name="vehicle2" value="300">&nbsp;&nbsp;|
                                                25<input type="checkbox" name="vehicle2" value="300">&nbsp;&nbsp;|
                                                49<input type="checkbox" name="vehicle2" value="300">&nbsp;&nbsp;|
                                                others <input id="sample_size_custom" type="number">
                                            </span>
                                        </div>
                                    </div>

                                    <hr>
                                







                    </div>
                        

                    </div>


                </div>
            </div>
        </div>

    </div>
     
@endsection