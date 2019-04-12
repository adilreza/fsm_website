@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Controll Your newsletter | Frontier Semiconductor')



@section('admin_tables_page')
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        
           
                       
                        <div class="card">
                        <a href="{{URL::to('/admin/newsletter_uploader')}}"><button type="button" class="btn btn-success btnlg" data-toggle="modal" data-target="#add_newsletter">
                                        Add A Newsletter
                                      </button></a> 
                            <div class="card-body" style="height:560px; overflow:scroll;">
                                <h5 class="card-title">All Newsletter List</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="5%">serial</th>
                                                <th width="15%">Newsletter title</th>
                                                <th width="35%">Newsletter discription</th>
                                                <th width="15%">uploaded by</th>
                                                <th width="15%">uploaded at</th>
                                                <th width="15%">Oparation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        <p style="display:none;>{{$i=0}}"></p>
                                            @foreach ($all_newsletters as $newsletter)

                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{$newsletter->newsletter_title}}</td>
                                                    <td>{{$newsletter->newsletter_short}}</td>
                                                    <td>{{$newsletter->admin_email}}</td>
                                                    <td>{{$newsletter->created_at}}</td>
                                                <td width="15%"><a href="{{URL::to('/admin/newsletter_operation/'.$newsletter->id)}}"><button class="btn btn-sm btn-info">Operation</button></a></td>
                                                    
                                                </tr>
                                                
                                            @endforeach
                                           
                                           
                                            
                                            
                                           
                                        </tbody>
                                        
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
               
            </div>


            <div class="modal fade" id="add_newsletter" style="background:#808e9b;">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Add a New Newsletter</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                            <div class="card">
                                    <div class="card-body">
                                        <form id="admin_newsletter_upload" method="post" action="{{URL::to('/fsm_admin/newsletter_control_post')}}" enctype="multipart/form-data">
                                            <input type="hidden" id="login_token" name="_token" value="{{csrf_token()}}">
                                        
                                            <div class="form-group m-t-20">
                                                <label><b>Newsletter Title</b> <small class="text-muted">max 100 char</small></label>
                                                <input type="text" class="form-control date-inputmask" id="newsletter_title" placeholder="Enter Title">
                                            </div>
                                            <div class="form-group">
                                                <label><b>Newsletter Description</b> <small class="text-muted">Max 190 char</small></label>
                                                <textarea type="textarea" cols="9" rows="5" class="form-control phone-inputmask" id="newsletter_description" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label><b>Uploaded by</b> <small class="text-muted">admin</small></label>
                                            <input type="text" class="form-control international-inputmask" id="international-mask" readonly value="{{session('admin_email')}}">
                                            </div>
                                            <div class="form-group">
                                                    <label><b>upload a file</b> <small class="text-muted">extension must: .blade.php</small></label>
                                                    <input type="file" class="form-control xphone-inputmask" id="newsletter_file" >
                                            </div>

                                            <input type="submit" class="form-control btn-lg btn-primary" value="Upload Now">
                                            <br>
                                            <h4 style="color:green;"><i id="message_status"></i></h4>

                                        </form>
                                    </div>
                                </div>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>




<script type="text/javascript">

    function pageRedirect() {
        window.location.replace("{{URL::to('/admin/home')}}");
        }   
    
        $('#admin_newsletter_upload').on('submit', function(e){
            e.preventDefault();
            var form_data = new FormData();
            console.log("some")
                $.ajax({
                    type: "POST",
                    url: "{{URL::to('/admin/newsletter_control_post')}}",
                    data: form_data,
                    success:function(response)
                    {
                        
                        console.log(response)
                        if(response=="success")
                        {
                            $("#message_status").text("Ok! Admin Recognized");
                            $("#message_status").css('color','green');
                            //console.log(response);
                            //setTimeout("pageRedirect()", 2000);
    
                        }
                        else if(response=="failed")
                        {
                            $("#message_status").text("Soryy! Admin Not Recognized");
                            $("#message_status").css('color','red');
                            console.log(response);
                        }
                    }
                });
        })
    
    </script>
    








@endsection
