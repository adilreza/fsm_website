@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Client Communication| Frontier Semiconductor')

@section('library_text_editor_page')
      
            <div class="container">

                <div class="card">
                    @if (!empty($msg_status))
                        <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Successfully inserted your article
                        </div>
                    @endif

                    <div class="card-body wizard-content">
                        <h2 class="card-title text-center">Client Email Communications....</h2>
                        <hr>
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" class="m-t-40" enctype="multipart/form-data" method="post" action="{{ URL::to('admin/single_communication') }}">
                            <div>
                                    {{ csrf_field() }}

                                    {{-- which generate a html lin --}}
                                <section>
                                    <label for="post_title1"><b>Email Address</b></label>
                                    <input id="post_title1" name="email_address" type="email" placeholder="Email...." class="required form-control">
                                    <br>
                                    <label for="post_title"><b>Communication Subject</b></label>
                                    <input id="post_title" name="communication_subject" type="text" placeholder="Subject" class="form-control">
                                    <br>
                                  
                                    
                                    <br>
                        
                                    <label for="content"><b>Your message for Invitations..</b></label>

                                    <textarea required id="content" name="communication_message" type="text" class="required form-control">
                                   </textarea>
                                </section>
                            </div>
                            <br>
                            <br>
                            <input type="submit" class="form-control btn btn-primary btn-block btn-lg" value="SEND IT NOW..">
                        </form>
                    </div>
                </div>
            
            </div>

        
                

   

@endsection

@section('custome_js_file')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
        CKEDITOR.replace( 'content' );
</script>
@endsection