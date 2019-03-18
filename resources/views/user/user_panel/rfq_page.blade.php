@extends('/user/user_panel/user_master')
@section('page_title', 'Conversation with admin | Frontier Semiconductor')
@section('rfq_page')


    <div id="content-wrapper">

        <div class="container-fluid">
          @if(!empty($rfq_msg))
            @if($rfq_msg=='success')
              <div class="alert alert-success col-md-8">
                <strong>Success!</strong> Successfully sent your RFQ
              </div>
              
            
            @endif
            <script type="text/javascript">
              function autoRefreshPage()
              {
                console.log("hello adil");
                  window.location.replace("{{URL::to('/fsm_client/rfq_page')}}");
              }
              setTimeout("autoRefreshPage()", 2000);
          </script>

          @endif
                <div class="container">

                    <div class="row">
                      <div class="col-md-5">
                          <div class="card card-register mx-auto mt-0" style="background:#f1f2f6;" >
                            <div class="card-header">RFQ Form</div>
                            <div class="card-body">
                            <form method="post" action="{{URL::to('/fsm_client/rfq_page')}}" enctype="multipart/form-data" >
                              {{ csrf_field() }}  
                              <div class="form-group">
                                
                                  
                                    <label for="comment">Any Comments(<i style="color:red;font-size:12px;">optional</i>)</label>

                                    <textarea type="text" rows="3" id="comment" name="rfq_description" class="form-control"  ></textarea>
                                  
                                
                                </div>
                                <div class="form-group">
                                  <div class="form-row">
                                      <label for="at_file">Attach a file</label>
                                    <input type="file" id="at_file" class="form-control"  required name="rfq_file">
                                  </div>
                                </div>
                                <div>
                                  <label for="file_type">Your report file type</label>
                                  <select class="form-control" id="file_type" name="file_type" required >
                                      <option value=""></option>
                                      <option value="RFQ">RFQ</option>
                                      <option value="Quotation">Quotation</option>
                                      <option value="PO">PO</option>
                                      
                                  </select>
                              </div>
                              <br>
                              <br>
                                <input class="btn btn-primary btn-block btn-lg" type="submit"  value="Send Your Message"  >
                              </form>
          
                            </div>
                          </div>

                      </div>

                        <div class="col-md-7">
                            <div class="card card-register mx-auto mt-0" style="background:#f1f2f6;" >
                            <div class="card-header">Conversation History <a href="{{URL::asset('/fsm_client/rfq_page/history')}}"><i class="fas fa-sync-alt float-right" style="color:green;font-weight:bold;"></i></a></div>
                                <div class="card-body" style="height:530px;overflow:scroll;">
                                  @if(!empty($history))
                                    @foreach ($history as $data)
                                        
                                      @if($data->msg_from=='admin')
                                      <div style="background:   #9fdfbf

                                        ;border-radius:2px;padding:7px 5px;width:80%; margin-top:7px;border-left:5px solid red;" class="float-left">
                                        <div class="text-center" style="height:35px;">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <h6 style="background:  #809bff
                                              ;
                                              ;margin-right:10px;padding:4px 2px;color:black; border-radius:5px;width:100%;" class="text-center">{{$data->msg_file_type}}</h6>
                                            </div>
                                            <div class="col-md-6">
                                            <h6 style="color:gray">{{$data->created_at}}</h6>
                                            </div>
                                          
                                          </div>
                                          
                                        </div>
                                        <hr style="margin-top:1px;">
                                        <a style="color:balck;padding:5px;magin-top:-4px;" href="{{URL::asset('/fsm_all_web_file/rfq_file/'.$data->msg_file)}}">{{$data->msg_file}}</a>

                                          <hr style="margin-top:1px;">

                                          <p style="margin-left:5px;font-size:11px;"><i>{{$data->msg_optional_comment}}</i></p>
                                            
                                           
                                        </div>
                                        <br>
                                      @endif
                                      @if($data->msg_from==session('user_name'))
                                      <div style="background:  #d8d8f3
                                            ;border-radius:2px;padding:7px 5px;width:80%; margin-top:7px;border-right:5px solid red;" class="float-right">
                                            <div class="text-center" style="height:35px;">
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <h6 style="background:  #809bff
                                                  ;
                                                  ;margin-right:10px;padding:4px 2px;color:black; border-radius:5px;width:100%;" class="text-center">{{$data->msg_file_type}}</h6>
                                                </div>
                                                <div class="col-md-6">
                                                <h6 style="color:gray">{{$data->created_at}}</h6>
                                                </div>
                                              
                                              </div>
                                              
                                            </div>
                                            <hr style="margin-top:1px;">
                                            <a style="color:balck;padding:5px;magin-top:-4px;" href="{{URL::asset('/fsm_all_web_file/rfq_file/'.$data->msg_file)}}">{{$data->msg_file}}</a>

                                              <hr style="margin-top:1px;">

                                              <p style="margin-left:5px;font-size:11px;"><i>{{$data->msg_optional_comment}}</i></p>
                                                
                                         
                                      </div>
                                      <br>
                                      @endif

                                    @endforeach
                                  @endif
                                  
                                </div>
                              </div>
                        </div>
                    </div>


                        
                      </div>


                    </div>


            




       
        </div>

    </div>
     
@endsection