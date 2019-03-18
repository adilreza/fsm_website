@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Replay replay message to client | Frontier Semiconductor')

@section('rfq_replay_admin')
            <div class="container-fluid">
               
               <div class="containere" style="border-radius:15px;">
                <div class="row">
                        <div class="col-md-4">

                       
                    <div class="card border-primary" style="border-radius:10px;">
                            <div class="card-header bg-info ">
                             <h4 style="color:white;">Replay a RFQ to <i style="color:#b3b3ff;">@if(!empty($user_name)) {{$user_name}} @endif</i></h4>
                            </div>
                                        <div class="card-body" style="background:#dfe4ea;">
                                                <form action="{{URL::to('/admin/rfq_replay_admin_client')}}" method="post" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                                <label for="title">Selected User </label>
                                                                <input type="text" required class="form-control" id="title" name="to_sample" @if(!empty($user_name)) value="{{$user_name}}" {{"readonly"}} @endif>
                                                                
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="file_type">Select File Type</label>
                                                                <select name="file_type" id="file_type" required class="form-control">
                                                                        <option value=""></option>
                                                                        <option value="RFQ">RFQ</option>
                                                                        <option value="Quotation">Quotation</option>
                                                                        <option value="PO">PO</option>
                                                                </select>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <label for="file" >Any Comments?</label>
                                                                <textarea rows="4" class="form-control" cols="40" name="admin_comment"></textarea>
                                                                
                                                        </div>


                                                                <div class="form-group">
                                                                        <label for="file">Your Report file( <i>pptx/pdf/docx</i> )</label>
                                                                        <input required class="form-control" type="file" name="rfq_report_file" id="file" style="padding:10px;border:none;">
                                                                </div>
                                                                <br>
                                                                @if(!empty($success_message))
                                                                        <h4 style="color:green;">{!! $success_message !!}</h4>
                                                                        <br>
                                                                @endif
                                                        <center>
                                                        <input class="btn btn-success btn-lg text-center" type="submit" value="Replay Rfq Now" />
                                                        </center>
                                                        <br>
                                                </form>
                                        </div>
                            <div class="card-footer"><i>Attached file can be docx, pptx, and pdf</i></div>
                    </div>

                </div>
                        
                <div class="col-md-8">




                                <div class="card card-register mx-auto mt-0" style="background:#f1f2f6;" >
                                                <div class="card-header">Conversation History <a href="{{URL::asset('/fsm_client/rfq_page/history')}}"><i class="fas fa-sync-alt float-right" style="color:green;font-weight:bold;"></i></a></div>
                                                    <div class="card-body" style="height:550px;overflow:scroll;">
                                                      @if(!empty($history))
                                                        @foreach ($history as $data)
                                                            
                                                          @if($data->msg_from==$user_name)
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
                                                          @if($data->msg_from=='admin')
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
    
@endsection