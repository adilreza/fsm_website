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
            
            <div class="container" style="background:#d2dae2;width:100%;height:1250px;border-radius:10px;border:1px solid black;">
                    <h3 class="text-center" style="padding-top:15px;">Demo Request Form</h3>
                    <hr>
                <div class="container" style="background:#d2dae2;width:98%;border-radius:10px;padding:20px;" >

                    <div class="row">
                        <div class="col-md-12">
                        <form id="drf_form" method="POST" action="{{URL::to('/fsm_client/drf_submit')}}">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6>1. No of Sample:</h6> 
                                </div>
                                <div class="col-sm-7">
                                    <input placeholder="" name="number_of_sample" id="sample_no" type="number">
                                </div>
                            </div>
                            <hr id="custome_hr">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6>2. Sample Size(<span style="color:red;"><i>mm</i></span>)</h6> 
                                </div>
                                <div class="col-sm-7">
                                    <span>
                                        150<input type="checkbox" name="sample_size1" value="150">&nbsp;&nbsp;
                                        200<input type="checkbox" name="sample_size2" value="200">&nbsp;&nbsp;
                                        300<input type="checkbox" name="sample_size3" value="300">&nbsp;&nbsp;|
                                        others <input id="sample_size_custom" name="sample_size_custome" type="number">
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
                                            Si<input type="checkbox" name="substrate_meterial" value="Si">&nbsp;&nbsp;
                                            SiC<input type="checkbox" name="substrate_meterial" value="SiC">&nbsp;&nbsp;
                                            GaN<input type="checkbox" name="substrate_meterial" value="GaN">&nbsp;&nbsp;
                                            GaAs<input type="checkbox" name="substrate_meterial" value="GaAs">&nbsp;&nbsp;
                                            Glass<input type="checkbox" name="substrate_meterial" value="Glass">&nbsp;&nbsp;
                                            Saphire<input type="checkbox" name="substrate_meterial" value="Saphire">&nbsp;&nbsp;
                                            AI<input type="checkbox" name="substrate_meterial" value="AI">&nbsp;&nbsp;
                                            InP<input type="checkbox" name="substrate_meterial" value="InP">&nbsp;&nbsp;
                                            LiNbO3<input type="checkbox" name="substrate_meterial" value="LiNbO3">&nbsp;&nbsp;
                                            Glue<input type="checkbox" name="substrate_meterial" value="Glue">&nbsp;&nbsp;
                                            Au<input type="checkbox" name="substrate_meterial" value="Au">&nbsp;&nbsp;
                                            Cu<input type="checkbox" name="substrate_meterial" value="Cu">&nbsp;&nbsp;
                                            Pi<input type="checkbox" name="substrate_meterial" value="Pi">&nbsp;&nbsp;
                                            DryRegister<input type="checkbox" name="substrate_meterial" value="DryRegister">&nbsp;&nbsp;|
                                            others <input id="sample_size_custom" type="text" name="substrate_meterial_custome">
                                        </span>
                                    </div>
                            </div>
                            <hr >
                            <div class="row" style="">
                                <div clas="col-sm-2" id="list_of_t">
                                    <h6 title="Thickness Range">Thickness Range</h6>
                                   <span class="text-center"> min <input name="thickness_range_min" type="number" id="sample_size_custom"> max<input name="thickness_range_max" type="number" id="sample_size_custom"></span>
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                        <h6 title="Bonded">Bonded</h6>
                                        <span class="text-center"> yes <input name="bonded" value="Yes" type="radio"> No<input name="bonded" value="No" type="radio"></span>
                                    
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                            <h6 title="Taped">Taped</h6>
                                            <span class="text-center"> yes <input name="taped" value="Yes" type="radio"> No<input name="taped" value="No" type="radio"></span>
                                   
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                        <h6 title="Framed">Framed</h6>
                                        <span class="text-center"> yes <input value="Yes" name="framed" type="radio"> No<input value="No" name="framed" type="radio"></span>
                                    
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                        <h6 title="Bumps">Bumps</h6>
                                        <span class="text-center"> yes <input value="Yes" name="bumps" type="radio"> No<input value="No" name="bumps" type="radio"></span>
                                    
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                   
                                        <h6 title="Pattern">Pattern</h6>
                                        <span class="text-center"> yes <input name="pattern" value="Yes" type="radio"> No<input value="No" name="pattern" type="radio"></span>
                                   
                                </div>
                            </div>

                            <hr>

                            <div class="row" style="">
                                    <div clas="col-sm-2" id="list_of_t">
                                        <h6 title="Wrap Range">Wrap Range</h6>
                                       <span class="text-center"> min <input name="wrap_range_min" id="sample_size_custom" type="number"> max<input name="wrap_range_max" id="sample_size_custom" type="number"></span>
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                            <h6 title="Rough Surface">Rough Surface</h6>
                                            <span class="text-center"> yes <input value="Yes" name="rough_surface" type="radio"> No<input value="No" name="rough_surface" type="radio"></span>
                                        
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                                <h6 title="High - Doping">High - Doping</h6>
                                                <span class="text-center"> yes <input value="Yes" name="high_doping" type="radio"> No<input value="No" name="high_doping" type="radio"></span>
                                       
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                            <h6 title="Back Grinding">Back grinding</h6>
                                            <span class="text-center"> yes <input name="back_grinding" value="Yes" type="radio"> No<input name="back_grinding" value="No" type="radio"></span>
                                        
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                            <h6 title="Metal Layers">Metal Layers</h6>
                                            <span class="text-center"> yes <input value="Yes" name="metal_layer" type="radio"> No<input name="metal_layer" value="No" type="radio"></span>
                                        
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                       
                                            <h6 title="Thickness Range">Other(specify)</h6>
                                            <span class="text-center"> <input type="text" name="wrap_range_custome" id="sample_size_custom"></span>
                                       
                                    </div>
                                </div>

                                <hr>
                                <h5 style="border-bottom:1px solid #a4b0be;width:60%;">4. Measurements Types: </h5>
                                <div class="row">
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Total Thickness">Total Thickness</h6>
                                        <input type="checkbox" name="total_thickness">
                                    </div>
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Layer Thickness" name="layer_thickness">Layer Thickness</h6>
                                        <input type="checkbox">
                                    </div>

                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Warp/Box">Wrap/Box</h6>
                                        <input type="checkbox" name="wrap_box">
                                    </div>
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Roughness">Roughness</h6>
                                        <input type="checkbox" name="roughness">
                                    </div>
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Stress" name="stress">Stress</h6>
                                        <input type="checkbox">
                                    </div>
                                    <div class="col-sm-4 text-center mt-2" id="list_of_t">
                                        <h6 title="Thin Film Thickness">Thin Film Thickness(<span style="color:red;">< 15μm</span>)</h6>
                                        <input type="checkbox">
                                    </div>
                                    <div class="col-sm-3 text-center mt-2" id="list_of_t">
                                        <h6 title="Trim Width / Depth">Trim Width / Depth</h6>
                                        <input type="checkbox" name="trim_width">
                                    </div>
                                    <div class="col-sm-2 text-center mt-2" id="list_of_t">
                                        <h6 title="CD">CD</h6>
                                        <input type="checkbox"  name="cd">
                                    </div>
                                        
                                </div>
                                <hr>
                                <h5 style="border-bottom:1px solid #a4b0be;width:60%;padding:5px;">4. Sample Description </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <textarea style="border:none;"  name="sample_description" cols="60" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                       <table >
                                           <tr>
                                               <th><p style="font-size:13px;">Layer</p></th>
                                               <th><p style="font-size:13px;" title="Refractive Index">Ref. Index</p></th>
                                               <th><p style="font-size:13px;" title="Approximate Thickness">App. Thickness</p></th>
                                           </tr>
                                           <tr>
                                                <td><input type="text" name="type1" id="sample_size_custom" style="width:70%"></td>
                                                <td><input type="text" name="refractive_index_1" id="sample_size_custom" style="width:50%"></td>
                                                <td><input type="text" name="approximate_thickness_1" id="sample_size_custom" style="width:80%"></td>
                                           </tr>
                                           <tr>
                                                <td><input type="text" name="type2" id="sample_size_custom" style="width:70%"></td>
                                                <td><input type="text" name="refractive_index_2" id="sample_size_custom" style="width:50%"></td>
                                                <td><input type="text" name="approximate_thickness_1" id="sample_size_custom" style="width:80%"></td>
                                           </tr>
                                           <tr>
                                                <td><input type="text" name="type3" id="sample_size_custom" style="width:70%"></td>
                                                <td><input type="text" name="refractive_index_3" id="sample_size_custom" style="width:50%"></td>
                                                <td><input type="text" name="approximate_thickness_3" id="sample_size_custom" style="width:80%"></td>
                                           </tr>
                                           <tr>
                                                <td><input type="text" name="type4" id="sample_size_custom" style="width:70%"></td>
                                                <td><input type="text" name="refractive_index_4" id="sample_size_custom" style="width:50%"></td>
                                                <td><input type="text" name="approximate_thickness_3" id="sample_size_custom" style="width:80%"></td>
                                           </tr>
                                       </table>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                        <div class="col-sm-5">
                                            <h6>5. Number of measurements sites / wafer</h6> 
                                        </div>
                                        <div class="col-sm-7">
                                            <span>
                                                5<input type="checkbox" name="No_of_m_wafer" value="5">&nbsp;&nbsp;
                                                9<input type="checkbox" name="No_of_m_wafer" value="9">&nbsp;&nbsp;
                                                15<input type="checkbox" name="No_of_m_wafer" value="15">&nbsp;&nbsp;|
                                                25<input type="checkbox" name="No_of_m_wafer" value="25">&nbsp;&nbsp;|
                                                49<input type="checkbox" name="No_of_m_wafer" value="49">&nbsp;&nbsp;|
                                                others <input id="sample_size_custom" name="custome_N_of_m_wafer" type="number">
                                            </span>
                                        </div>
                                    </div>

                                    <hr>

                                    <input type="checkbox" onclick="Submit_Check()" > Terms and Condition (<i style="color:green;cursor:pointer;" data-toggle="modal" data-target="#terms_condition">View</i>)
                                    <br>
                                    <hr>
                                    <input type="submit" style="display:block;" class="btn btn-primary btn btn-block disabled" id="submit" value="Send Your DRF Now">
                                
                                    <br>
                                    <p id="notification"></p>




                                <input type="hidden"  id="drf_token" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>


                    <div class="modal fade" id="terms_condition" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Terms & Conditions</h5>
                            </div>
                            <div class="modal-body">
                              <p>Before submitting please check all of your info carefully. After submitting the form u have to wait at least 30 minute for next
                                  request. thank you 
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                        

                    </div>


                </div>
            </div>
        </div>

    </div>
    
    <script>
        
        function Submit_Check()
        {
            var element= document.getElementById("submit");
            //element.classList.toggle("disabled");
            if($("#submit").hasClass('disabled'))
                $('#submit').removeClass('disabled');
            else
                $('#submit').addClass('disabled');
        }

        function show()
        {
            document.getElementById('notification').innerHTML= "please agree the terms and conditions..";
            document.getElementById('notification').style.color="red";
        }
        function received()
        {
            document.getElementById('notification').innerHTML= "Successfull! Your requirment already queued to the admin..please wait for sample report";
            document.getElementById('notification').style.color="green";
        }
        function exist()
        {
            document.getElementById('notification').innerHTML= "exist! NO change found with previous request";
            document.getElementById('notification').style.color="orange";
        }
        
    </script>

    <script>
        $(document).ready(function(){
            $('#drf_form').on('submit', function(e){
                //alert("Hlllo adil");
                e.preventDefault();
                var datta = $('#drf_form').serialize();
                if($("#submit").hasClass('disabled'))
                {
                    show()
                }
                else{
                $.ajax({
                    type: 'POST',
                    data :{
                        data: datta,
                        _token: $('#drf_token').val()

                    },
                    url: "{{URL::to('/fsm_client/drf_submit')}}",

                    success: function(response){
                        //alert("Hello adil");
                        //console.log(response)
                        if(response=="success")
                        {
                            received();
                        }
                        else if(response=='exist')
                        {
                            exist();
                        }
                    }

                })
            }
            })
        });
    </script>
     
@endsection