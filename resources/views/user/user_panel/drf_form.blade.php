@extends('/user/user_panel/user_master')
@section('page_title', 'DRF | Frontier Semiconductor')
@section('static_css_file')
<style type="text/css">
    #sample_no,#sample_size_custom{
        width:60px;
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
        @if(!empty($data['number_of_sample'])){{$data['number_of_sample']}}@endif

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
                                    <input placeholder="" name="number_of_sample" id="sample_no" type="number"  @if(!empty($data['number_of_sample'])) value="{{$data['number_of_sample']}}" @endif >
                                </div>
                            </div>
                            <hr id="custome_hr">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6>2. Sample Size(<span style="color:red;"><i>mm</i></span>)</h6> 
                                </div>
                                <div class="col-sm-7">
                                    <span>
                                        150<input type="checkbox" name="sample_size1" @if(!empty($data['sample_size1'])) {{$data['sample_size1']}} @endif value="checked">&nbsp;&nbsp;
                                        200<input type="checkbox" name="sample_size2" @if(!empty($data['sample_size2'])) {{$data['sample_size2']}} @endif value="checked">&nbsp;&nbsp;
                                        300<input type="checkbox" name="sample_size3" @if(!empty($data['sample_size3'])) {{$data['sample_size3']}} @endif value="checked">&nbsp;&nbsp;|
                                        others <input id="sample_size_custom"  name="sample_size_custome"  @if(!empty($data['sample_size_custome'])) value="{{$data['sample_size_custome']}}" @endif type="number">
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
                                            Si<input type="checkbox" name="substrate_meterial1"  @if(!empty($data['substrate_meterial1'])) {{$data['substrate_meterial1']}} @endif value="checked" >&nbsp;&nbsp;
                                            SiC<input type="checkbox" name="substrate_meterial2"  @if(!empty($data['substrate_meterial2'])) {{$data['substrate_meterial2']}} @endif value="checked" >&nbsp;&nbsp;
                                            GaN<input type="checkbox" name="substrate_meterial3"  @if(!empty($data['substrate_meterial3'])) {{$data['substrate_meterial3']}} @endif value="checked" >&nbsp;&nbsp;
                                            GaAs<input type="checkbox" name="substrate_meterial4"  @if(!empty($data['substrate_meterial4'])) {{$data['substrate_meterial4']}} @endif value="checked">&nbsp;&nbsp;
                                            Glass<input type="checkbox" name="substrate_meterial5"  @if(!empty($data['substrate_meterial5'])) {{$data['substrate_meterial5']}} @endif value="checked">&nbsp;&nbsp;
                                            Saphire<input type="checkbox" name="substrate_meterial6"  @if(!empty($data['substrate_meterial6'])) {{$data['substrate_meterial6']}} @endif value="checked">&nbsp;&nbsp;
                                            AI<input type="checkbox" name="substrate_meterial7"  @if(!empty($data['substrate_meterial7'])) {{$data['substrate_meterial7']}} @endif value="checked">&nbsp;&nbsp;
                                            InP<input type="checkbox" name="substrate_meterial8"  @if(!empty($data['substrate_meterial8'])) {{$data['substrate_meterial8']}} @endif value="checked">&nbsp;&nbsp;
                                            LiNbO3<input type="checkbox" name="substrate_meterial9"  @if(!empty($data['substrate_meterial9'])) {{$data['substrate_meterial9']}} @endif value="checked">&nbsp;&nbsp;
                                            Glue<input type="checkbox" name="substrate_meterial10"  @if(!empty($data['substrate_meterial10'])) {{$data['substrate_meterial10']}} @endif value="checked">&nbsp;&nbsp;
                                            Au<input type="checkbox" name="substrate_meterial11"  @if(!empty($data['substrate_meterial11'])) {{$data['substrate_meterial11']}} @endif value="checked">&nbsp;&nbsp;
                                            Cu<input type="checkbox" name="substrate_meterial12"  @if(!empty($data['substrate_meterial12'])) {{$data['substrate_meterial12']}} @endif value="checked">&nbsp;&nbsp;
                                            Pi<input type="checkbox" name="substrate_meterial13"  @if(!empty($data['substrate_meterial13'])) {{$data['substrate_meterial13']}} @endif value="checked">&nbsp;&nbsp;
                                            DryRegister<input type="checkbox" name="substrate_meterial14" @if(!empty($data['substrate_meterial14'])) {{$data['substrate_meterial14']}} @endif value="checked">&nbsp;&nbsp;|
                                            others <input id="sample_size_custom" type="text" @if(!empty($data['substrate_meterial_custome'])) value="{{$data['substrate_meterial_custome']}}" @endif name="substrate_meterial_custome" >
                                        </span>
                                    </div>
                            </div>
                            <hr >
                            <div class="row" style="">
                                <div clas="col-sm-2" id="list_of_t">
                                    <h6 title="Thickness Range">Thickness Range</h6>
                                   <span class="text-center"> min <input name="thickness_range_min" @if(!empty($data['thickness_range_min'])) value="{{$data['thickness_range_min']}}" @endif type="number" id="sample_size_custom"> max<input name="thickness_range_max" @if(!empty($data['thickness_range_max'])) value="{{$data['thickness_range_max']}}" @endif type="number" id="sample_size_custom"></span>
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                        <h6 title="Bonded">Bonded</h6>
                                        <span class="text-center"> yes <input @if(!empty($data['bonded'])) @if($data['bonded']=="Yes") {{"checked"}} @endif @endif name="bonded" value="Yes" type="radio"> No<input name="bonded" @if(!empty($data['bonded'])) @if($data['bonded']=="No") {{"checked"}} @endif @endif value="No" type="radio"></span>
                                    
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                            <h6 title="Taped">Taped</h6>
                                            <span class="text-center"> yes <input @if(!empty($data['taped'])) @if($data['taped']=="Yes") {{"checked"}} @endif @endif name="taped" value="Yes" type="radio"> No<input @if(!empty($data['taped'])) @if($data['taped']=="No") {{"checked"}} @endif @endif name="taped" value="No" type="radio"></span>
                                   
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                        <h6 title="Framed">Framed</h6>
                                        <span class="text-center"> yes <input @if(!empty($data['framed'])) @if($data['framed']=="Yes") {{"checked"}} @endif @endif value="Yes" name="framed" type="radio"> No<input @if(!empty($data['framed'])) @if($data['framed']=="No") {{"checked"}} @endif @endif value="No" name="framed" type="radio"></span>
                                    
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                    
                                        <h6 title="Bumps">Bumps</h6>
                                        <span class="text-center"> yes <input @if(!empty($data['bumps'])) @if($data['bumps']=="Yes") {{"checked"}} @endif @endif value="Yes" name="bumps" type="radio"> No<input @if(!empty($data['bumps'])) @if($data['bumps']=="No") {{"checked"}} @endif @endif value="No" name="bumps" type="radio"></span>
                                    
                                </div>
                                <div clas="col-sm-2" id="list_of_t">
                                   
                                        <h6 title="Pattern">Pattern</h6>
                                        <span class="text-center"> yes <input @if(!empty($data['pattern'])) @if($data['pattern']=="Yes") {{"checked"}} @endif @endif name="pattern" value="Yes" type="radio"> No<input @if(!empty($data['pattern'])) @if($data['pattern']=="No") {{"checked"}} @endif @endif value="No" name="pattern" type="radio"></span>
                                   
                                </div>
                            </div>

                            <hr>

                            <div class="row" style="">
                                    <div clas="col-sm-2" id="list_of_t">
                                        <h6 title="Wrap Range">Wrap Range</h6>
                                       <span class="text-center"> min <input name="wrap_range_min" @if(!empty($data['wrap_range_min'])) value="{{$data['wrap_range_min']}}" @endif id="sample_size_custom" type="number"> max<input @if(!empty($data['wrap_range_max'])) value="{{$data['wrap_range_max']}}" @endif name="wrap_range_max" id="sample_size_custom" type="number"></span>
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                            <h6 title="Rough Surface">Rough Surface</h6>
                                            <span class="text-center"> yes <input @if(!empty($data['rough_surface'])) @if($data['rough_surface']=="Yes") {{"checked"}} @endif @endif value="Yes" name="rough_surface" type="radio"> No<input @if(!empty($data['rough_surface'])) @if($data['rough_surface']=="No") {{"checked"}} @endif @endif value="No" name="rough_surface" type="radio"></span>
                                        
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                                <h6 title="High - Doping">High - Doping</h6>
                                                <span class="text-center"> yes <input @if(!empty($data['high_doping'])) @if($data['high_doping']=="Yes") {{"checked"}} @endif @endif value="Yes" name="high_doping" type="radio"> No<input @if(!empty($data['high_doping'])) @if($data['high_doping']=="No") {{"checked"}} @endif @endif value="No" name="high_doping" type="radio"></span>
                                       
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                            <h6 title="Back Grinding">Back grinding</h6>
                                            <span class="text-center"> yes <input @if(!empty($data['back_grinding'])) @if($data['back_grinding']=="Yes") {{"checked"}} @endif @endif name="back_grinding" value="Yes" type="radio"> No<input @if(!empty($data['back_grinding'])) @if($data['back_grinding']=="No") {{"checked"}} @endif @endif name="back_grinding" value="No" type="radio"></span>
                                        
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                        
                                            <h6 title="Metal Layers">Metal Layers</h6>
                                            <span class="text-center"> yes <input @if(!empty($data['metal_layer'])) @if($data['metal_layer']=="Yes") {{"checked"}} @endif @endif value="Yes" name="metal_layer" type="radio"> No<input @if(!empty($data['metal_layer'])) @if($data['metal_layer']=="No") {{"checked"}} @endif @endif name="metal_layer" value="No" type="radio"></span>
                                        
                                    </div>
                                    <div clas="col-sm-2" id="list_of_t">
                                       
                                            <h6 title="Thickness Range">Other(specify)</h6>
                                            <span class="text-center"> <input type="text" @if(!empty($data['wrap_range_custome'])) value="{{$data['wrap_range_custome']}}" @endif name="wrap_range_custome" id="sample_size_custom"></span>
                                       
                                    </div>
                                </div>

                                <hr>
                                <h5 style="border-bottom:1px solid #a4b0be;width:60%;">4. Measurements Types: </h5>
                                <div class="row">
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Total Thickness">Total Thickness</h6>
                                        <input type="checkbox" name="total_thickness"  value="checked" @if(!empty($data['total_thickness'])) {{$data['total_thickness']}} @endif  >
                                    </div>
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Layer Thickness" name="layer_thickness"  >Layer Thickness</h6>
                                        <input type="checkbox" value="checked" name="layer_thickness"  @if(!empty($data['layer_thickness'])) {{$data['layer_thickness']}} @endif >
                                    </div>

                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Warp/Box">Wrap/Box</h6>
                                        <input type="checkbox" name="wrap_box" value="checked"  @if(!empty($data['wrap_box'])) {{$data['wrap_box']}} @endif >
                                    </div>
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Roughness">Roughness</h6>
                                        <input type="checkbox" name="roughness" value="checked"  @if(!empty($data['roughness'])) {{$data['roughness']}} @endif >
                                    </div>
                                    <div class="col-sm-2 text-center" id="list_of_t">
                                        <h6 title="Stress" name="stress">Stress</h6>
                                        <input type="checkbox" value="checked" name="stress"  @if(!empty($data['stress'])) {{$data['stress']}} @endif >
                                    </div>
                                    <div class="col-sm-4 text-center mt-2" id="list_of_t">
                                        <h6 title="Thin Film Thickness">Thin Film Thickness(<span style="color:red;">< 15μm</span>)</h6>
                                        <input type="checkbox" value="checked" name="thin_film_thickness"  @if(!empty($data['thin_film_thickness'])) {{$data['thin_film_thickness']}} @endif >
                                    </div>
                                    <div class="col-sm-3 text-center mt-2" id="list_of_t">
                                        <h6 title="Trim Width / Depth">Trim Width / Depth</h6>
                                        <input type="checkbox" name="trim_width" value="checked"  @if(!empty($data['trim_width'])) {{$data['trim_width']}} @endif >
                                    </div>
                                    <div class="col-sm-2 text-center mt-2" id="list_of_t">
                                        <h6 title="CD">CD</h6>
                                        <input type="checkbox"  name="cd"  value="checked"  @if(!empty($data['cd'])) {{$data['cd']}} @endif >
                                    </div>
                                        
                                </div>
                                <hr>
                                <h5 style="border-bottom:1px solid #a4b0be;width:60%;padding:5px;">4. Sample Description </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        @if(empty($data['sample_description']))
                                            <textarea style="border:none;"  name="sample_description"  cols="60" rows="6"></textarea>
                                            
                                        @endif
                                        @if(!empty($data['sample_description']))
                                                <div style="width:450px;overflow:scroll;height:180px;">{!! str_replace('%20',' ', $data['sample_description']) !!}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                       <table >
                                           <tr>
                                               <th><p style="font-size:13px;">Layer</p></th>
                                               <th><p style="font-size:13px;" title="Refractive Index">Ref. Index</p></th>
                                               <th><p style="font-size:13px;" title="Approximate Thickness">App. Thickness</p></th>
                                           </tr>
                                           <tr>
                                                <td><input @if(!empty($data['type1'])) value="{{$data['type1']}}" @endif type="text" name="type1" id="sample_size_custom" style="width:70%"></td>
                                                <td><input @if(!empty($data['refractive_index_1'])) value="{{$data['refractive_index_1']}}" @endif type="text" name="refractive_index_1" id="sample_size_custom" style="width:50%"></td>
                                                <td><input @if(!empty($data['approximate_thickness_1'])) value="{{$data['approximate_thickness_1']}}" @endif type="text" name="approximate_thickness_1" id="sample_size_custom" style="width:80%"></td>
                                           </tr>
                                           <tr>
                                                <td><input @if(!empty($data['type2'])) value="{{$data['type2']}}" @endif type="text" name="type2" id="sample_size_custom" style="width:70%"></td>
                                                <td><input @if(!empty($data['refractive_index_2'])) value="{{$data['refractive_index_2']}}" @endif type="text" name="refractive_index_2" id="sample_size_custom" style="width:50%"></td>
                                                <td><input @if(!empty($data['approximate_thickness_2'])) value="{{$data['approximate_thickness_2']}}" @endif type="text" name="approximate_thickness_2" id="sample_size_custom" style="width:80%"></td>
                                           </tr>
                                           <tr>
                                                <td><input @if(!empty($data['type3'])) value="{{$data['type3']}}" @endif type="text" name="type3" id="sample_size_custom" style="width:70%"></td>
                                                <td><input @if(!empty($data['refractive_index_3'])) value="{{$data['refractive_index_3']}}" @endif type="text" name="refractive_index_3" id="sample_size_custom" style="width:50%"></td>
                                                <td><input @if(!empty($data['approximate_thickness_3'])) value="{{$data['approximate_thickness_3']}}" @endif type="text" name="approximate_thickness_3" id="sample_size_custom" style="width:80%"></td>
                                           </tr>
                                           <tr>
                                                <td><input @if(!empty($data['type4'])) value="{{$data['type4']}}" @endif type="text" name="type4" id="sample_size_custom" style="width:70%"></td>
                                                <td><input @if(!empty($data['refractive_index_4'])) value="{{$data['refractive_index_4']}}" @endif type="text" name="refractive_index_4" id="sample_size_custom" style="width:50%"></td>
                                                <td><input @if(!empty($data['approximate_thickness_4'])) value="{{$data['approximate_thickness_4']}}" @endif type="text" name="approximate_thickness_4" id="sample_size_custom" style="width:80%"></td>
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
                                                5<input type="checkbox" name="No_of_m_wafer1" value="checked" @if(!empty($data['No_of_m_wafer1'])) {{$data['No_of_m_wafer1']}} @endif >&nbsp;&nbsp;
                                                9<input type="checkbox" name="No_of_m_wafer2" value="checked" @if(!empty($data['No_of_m_wafer2'])) {{$data['No_of_m_wafer2']}} @endif >&nbsp;&nbsp;
                                                15<input type="checkbox" name="No_of_m_wafer3" value="checked" @if(!empty($data['No_of_m_wafer3'])) {{$data['No_of_m_wafer3']}} @endif >&nbsp;&nbsp;|
                                                25<input type="checkbox" name="No_of_m_wafer4" value="checked" @if(!empty($data['No_of_m_wafer4'])) {{$data['No_of_m_wafer4']}} @endif >&nbsp;&nbsp;|
                                                49<input type="checkbox" name="No_of_m_wafer5" value="checked" @if(!empty($data['No_of_m_wafer5'])) {{$data['No_of_m_wafer5']}} @endif >&nbsp;&nbsp;|
                                                others <input id="sample_size_custom" name="custome_N_of_m_wafer" @if(!empty($data['custome_N_of_m_wafer'])) value="{{$data['custome_N_of_m_wafer']}}" @endif  type="number">
                                            </span>
                                        </div>
                                    </div>

                                    <hr>
                                    @if(empty($data))
                                        <input type="checkbox" onclick="Submit_Check()" > Terms and Condition (<i style="color:green;cursor:pointer;" data-toggle="modal" data-target="#terms_condition">View</i>)
                                    @endif
                                    <br>
                                    <hr>
                                    @if(empty($data))
                                        <input type="submit" style="display:block;" class="btn btn-primary btn btn-block disabled" id="submit" value="Send Your DRF Now">
                                    @endif
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