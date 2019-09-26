@extends('/user/user_panel/user_master')
@section('page_title', 'Conversation sales admin or admin | Frontier Semiconductor')
@section('rfq_page')

<style>

/*******************/
/*Chat widget*/
/*******************/
.chat-box {
  overflow: auto; }

.chat-list {
  margin: 0px;
  padding: 0px; }
  .chat-list .chat-item {
    list-style: none;
    margin-top: 30px; }
    .chat-list .chat-item .chat-img {
      display: inline-block;
      width: 45px;
      vertical-align: top; }
      .chat-list .chat-item .chat-img img {
        width: 45px;
        border-radius: 100%; }
    .chat-list .chat-item .chat-content {
      width: calc(100% - 50px);
      display: inline-block;
      padding-left: 15px; }
      .chat-list .chat-item .chat-content .box {
        display: inline-block;
        padding: 10px;
        margin-bottom: 3px;
        color: #343a40;
        background: #f8f9fa; }
    .chat-list .chat-item .chat-time {
      display: block;
      font-size: 10px;
      color: #4F5467;
      margin: 5px 0 15px 65px; }
    .chat-list .chat-item.odd .chat-content {
      text-align: right;
      width: calc(100% - 0px); }
    .chat-list .chat-item.odd .chat-time {
      text-align: right; }
    .chat-list .chat-item.odd .box {
      clear: both;
      color: #fff;
      background: #2962FF; }
    .chat-list .chat-item.odd + .odd {
      margin-top: 0px; }
    .chat-list .chat-item.reverse {
      text-align: right; }
      .chat-list .chat-item.reverse .chat-time {
        text-align: left; }
      .chat-list .chat-item.reverse .chat-content {
        padding-left: 0px;
        padding-right: 15px; }

/*******************/
/*Chat widget*/
/*******************/
.chat-windows {
  position: fixed;
  bottom: 0px;
  right: 300px;
  height: 350px;
  max-height: 350px;
  z-index: 9999;
  -webkit-transition: 600ms;
  -o-transition: 600ms;
  transition: 600ms; }
  .chat-windows.show-chat {
    bottom: 0px; }
  .chat-windows.hide-chat {
    bottom: -350px; }
  .chat-windows .user-chat {
    min-width: 300px;
    min-height: 350px;
    background-color: #fff;
    -webkit-box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
    box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
    float: right;
    margin: 0 2px 0 0; }
    .chat-windows .user-chat.mini-chat {
      min-width: 40px;
      min-height: 40px;
      bottom: 0px;
      top: 310px;
      position: relative; }
      .chat-windows .user-chat.mini-chat .chat-head .name,
      .chat-windows .user-chat.mini-chat .chat-head i,
      .chat-windows .user-chat.mini-chat .chat-footer,
      .chat-windows .user-chat.mini-chat .chat-body {
        display: none; }
      .chat-windows .user-chat.mini-chat .chat-head img {
        margin: 0; }
      .chat-windows .user-chat.mini-chat .chat-head .status {
        left: 28px;
        top: 10px; }
    .chat-windows .user-chat .chat-head {
      height: 40px;
      padding: 10px;
      background-color: #2962FF;
      color: #fff;
      position: relative; }
      .chat-windows .user-chat .chat-head img {
        border-radius: 50%;
        height: 25px;
        width: 25px;
        vertical-align: middle;
        margin: -4px 8px 0 0;
        display: inline-block;
        cursor: pointer; }
      .chat-windows .user-chat .chat-head .status {
        border: 1px solid #fff;
        border-radius: 50%;
        position: absolute;
        height: 8px;
        width: 8px;
        left: 28px;
        top: 7px; }
      .chat-windows .user-chat .chat-head .online {
        background-color: #36bea6; }
      .chat-windows .user-chat .chat-head .busy {
        background-color: #f62d51; }
      .chat-windows .user-chat .chat-head .away {
        background-color: #fb8c00; }
      .chat-windows .user-chat .chat-head .offline {
        background-color: #ffbc34; }
      .chat-windows .user-chat .chat-head i {
        font-size: 14px;
        float: right;
        color: #fff;
        margin: 3px 0 0 5px;
        cursor: pointer; }
    .chat-windows .user-chat .chat-footer {
      padding: 0px;
      border-top: 1px solid #e9ecef; }
      .chat-windows .user-chat .chat-footer .form-control {
        background-color: transparent;
        color: #3e5569;
        font-size: 14px;
        border: 0px;
        width: 100%;
        height: 40px; }
        .chat-windows .user-chat .chat-footer .form-control:focus, .chat-windows .user-chat .chat-footer .form-control:hover {
          border: 0px; }
    .chat-windows .user-chat .chat-body {
      height: 270px;
      padding: 15px 15px 0;
      background-color: #eef5f9;
      overflow: hidden;
      max-width: 300px;
      position: relative; }

.chat-list {
  margin: 0px;
  padding: 0px; }
  .chat-list .msg_receive, .chat-list .msg_sent {
    list-style: none;
    margin-top: 30px; }
    .chat-list .msg_receive .chat-img, .chat-list .msg_sent .chat-img {
      display: inline-block;
      width: 45px;
      vertical-align: top; }
      .chat-list .msg_receive .chat-img img, .chat-list .msg_sent .chat-img img {
        width: 100%;
        border-radius: 100%; }
    .chat-list .msg_receive .chat-content, .chat-list .msg_sent .chat-content {
      width: calc(100% - 50px);
      display: inline-block;
      padding-left: 15px; }
      .chat-list .msg_receive .chat-content .box, .chat-list .msg_sent .chat-content .box {
        display: inline-block;
        padding: 10px;
        margin-bottom: 3px;
        background: #fff; }
    .chat-list .msg_receive .chat-time, .chat-list .msg_sent .chat-time {
      display: block;
      font-size: 10px;
      color: #a1aab2;
      margin: 5px 0 15px 15px; }
    .chat-list .msg_receive.odd .chat-content, .chat-list .msg_sent.odd .chat-content {
      text-align: right;
      width: calc(100% - 0px); }
      .chat-list .msg_receive.odd .chat-content .box, .chat-list .msg_sent.odd .chat-content .box {
        clear: both;
        color: #fff;
        background: #2962FF; }
    .chat-list .msg_receive.odd .chat-time, .chat-list .msg_receive .reverse, .chat-list .msg_sent.odd .chat-time, .chat-list .msg_sent .reverse {
      text-align: right; }
    .chat-list .msg_receive.odd + .odd, .chat-list .msg_sent.odd + .odd {
      margin-top: 0px; }
    .chat-list .msg_receive.reverse .chat-content, .chat-list .msg_sent.reverse .chat-content {
      padding-left: 0px;
      padding-right: 15px; }
    .chat-list .msg_receive.reverse .chat-time, .chat-list .msg_sent.reverse .chat-time {
      text-align: left; }

.mailbox .chat-scroll {
  height: calc(100vh - 100px); }

</style>


<div class="container-fluid" style="background:#E9ECEF;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                        <h5 class="card-title">Conversation History..</h4>
                    </div>
                    <div class="col-md-4">
                      <button type="button" class="btn btn-warning "><a style="color:black" href="{{URL::to('/fsm_client/drf_form')}}">DRF</a></button>
                      <button type="button" class="btn btn-info "><a style="color:black" href="{{URL::to('/fsm_client/presentation_list')}}">Presentation</a></button>
                    </div>
                  </div>
                   
                    <hr>
                    <div class="chat-box scrollable" style="height:475px;">      

                           
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

                        <form method="post" action="{{route('conversation_file_upload')}}" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                                    <div class="col-md-7">
                                      <input type="file" name="file" style="bodrder:none;border-radius:5px;" id="file" />
                                    </div>
                                    <div class="col-md-5">
                                      <input type="submit" name="upload" value="Upload" class="btn btn-sm btn-success" />
                                    </div>
                                </div>
                            </form>
                            <br />
                            {{-- <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow=""
                              aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                0%
                              </div>
                            </div> --}}
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
<script>

</script>

</script>



<script>

    function read_message()
    {
        $.ajax({
            type: 'GET',
            url: "{{URL::to('/fsm_client/conversation_message_read')}}",
            success: function(response)
            {
                console.log(response);
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
                url: "{{URL::to('/fsm_client/conversation_message_store')}}",

                success: function(response){
                    //alert("Hello adil");
                    //console.log(response)
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
        
     }, 2000);


</script>
 
 
@endsection