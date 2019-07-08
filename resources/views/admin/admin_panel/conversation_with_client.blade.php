@extends('/admin/admin_panel/admin_master')
@section('page_title', 'Conversation with dynamic client | Frontier Semiconductor')
@section('admin_tables_page')


<div class="container-fluid" style="background:#E9ECEF;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Conversation with <i><a href="{{URL::to('admin/about_client/client_name/'.session('current_user'))}}"><b>{{session('current_user')}}</b></a></i></h4>
                        <hr>
                        <div class="chat-box scrollable" style="height:475px;">
                            <!--chat Row -->
    
                               
                               <span id="all_conv"></span>
                               
    
    
                        </div>
                    </div>
                    <div class="card-body border-top" style="background:#95a5a6;">
                        <div class="row">
                            <div class="col-9">
                                <div class="input-field m-t-0 m-b-0">
                                    <form>
                                    <input type="hidden"  id="csrf_token" name="_token" value="{{csrf_token()}}">
                                    <textarea id="textarea1" onkeypress="chat_action(event)" placeholder="Ask anything to admin freely....." class="form-control border-0" style="resize:none;"></textarea>
                                </form>
    
                                </div>
                            </div>
                            <div class="col-3">

                                    <form method="post" action="{{route('conversation_file_upload_admin')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                              <div class="col-md-7">
                                                <input type="file" name="file" id="file" />
                                              </div>
                                              <div class="col-md-5">
                                                <input type="submit" name="upload" value="Upload" class="btn btn-success" />
                                              </div>
                                          </div>
                                      </form>
                                      <br />
                                      {{-- <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow=""
                                        aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                          0%
                                        </div> --}}
                                      </div>
                                      <br />
                                      <div id="success">
                  
                                      </div>
          


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
    
    <script>
    
        function read_message()
        {
            $.ajax({
                type: 'GET',
                url: "{{URL::to('/admin/conversation_message_read')}}",
                success: function(response)
                {
                    //console.log(response);
                    document.getElementById("all_conv").innerHTML=response;
                }
            })
        }
    
    
        
        function chat_action(event)
        {
            //alert("Hello world");
            var x =  event.keyCode;
            if(x==13)
                {
    
                    $.ajax({
                    type: 'POST',
                    data: {
                    message: $('#textarea1').val(),
                    _token: $('#csrf_token').val()
                    },
                    url: "{{URL::to('/admin/conversation_message_store')}}",
    
                    success: function(response){
                        //alert("Hello adil");
                        console.log(response)
                        if(response=="success")
                        {
                            //alert('success');
                            remove_text();
                            //read_message()
                        }
                    } 
                });
            }
            var data = document.getElementById('textarea1').value;
        }
    
        function remove_text()
        {
            document.getElementById("textarea1").value ="";
        }
         $(document).ready(function(){
             read_message();

             $('form').ajaxForm({
      beforeSend:function(){
        $('#success').empty();
      },
      uploadProgress:function(event, position, total, percentComplete)
      {
        $('.progress-bar').text(percentComplete + '%');
        $('.progress-bar').css('width', percentComplete + '%');
      },
      success:function(data)
      {
        if(data.errors)
        {
          $('.progress-bar').text('0%');
          $('.progress-bar').css('width', '0%');
          $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
        }
        if(data.success)
        {
          $('.progress-bar').text('Uploaded');
          $('.progress-bar').css('width', '100%');
          $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');
          $('#success').append(data.image);
        }
      }
    });


         });
    
         setInterval(() => {
             read_message();
            
         }, 3000);
    
    
    </script>
     



@endsection
