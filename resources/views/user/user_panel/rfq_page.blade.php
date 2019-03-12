@extends('/user/user_panel/user_master')
@section('page_title', 'RFQ | Frontier Semiconductor')
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
                      <div class="col-md-6">
                          <div class="card card-register mx-auto mt-5" style="background:#f1f2f6;" >
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
                                <input class="btn btn-primary btn-block btn-lg" type="submit"  value="Send RFQ"  >
                              </form>
          
                            </div>
                          </div>

                      </div>

                        <div class="col-md-6">
                            <div class="card card-register mx-auto mt-5" style="background:#f1f2f6;" >
                            <div class="card-header">Conversation History <a href="{{URL::asset('/fsm_client/rfq_page/history')}}"><i class="fas fa-sync-alt float-right" style="color:green;font-weight:bold;"></i></a></div>
                                <div class="card-body" style="height:305px;overflow:scroll;">
                                  @if(!empty($history))
                                    @foreach ($history as $data)
                                        
                                      @if($data->rfq_from==session('user_name'))
                                        <div style="border-radius:2px;padding:3px;width:80%; margin-top:7px;" class="float-left">
                                        <a style="background:turquoise;color:white;padding:5px;" href="{{URL::asset('/fsm_all_web_file/rfq_file/'.$data->rfq_file_name)}}">{{$data->rfq_file_name}}</a>
                                        </div>
                                      @endif
                                      @if($data->rfq_from=='admin')
                                        <div style="border-radius:2px;padding:5px;margin-top:7px;width:80%;color:white;" class="float-right">
                                            <a class="float-right" style="color:white;background:#3742fa;padding:5px;" href="{{URL::asset('/fsm_all_web_file/rfq_file/'.$data->rfq_file_name)}}">{{$data->rfq_file_name}}</a>
                                        </div>
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