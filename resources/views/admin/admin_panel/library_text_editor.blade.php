@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Libray-Text-Editor-admin | Frontier Semiconductor')

@section('library_text_editor_page')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body wizard-content">
                        <h2 class="card-title text-center">Basic library editing section...</h2>
                        <hr>
                        <h6 class="card-subtitle"></h6>
                        <form id="example-form" action="#" class="m-t-40">
                            <div>
                                <section>
                                    <label for="post_title">Article Title</label>
                                    <input id="post_title" name="post_title" type="text" class="required form-control">
                                    <br>
                                    <div class=row>
                                        <div class="col-md-6">
                                            <label for="display_image">Display_image</label>
                                            <input id="display_image" name="display_image" type="file" class="required  form-control">
                                        </div>
                                        <div class="col-md-6">
                                                
                                        </div>
                                    </div>
                                    <br>
                                    <label for="content">Main Content..</label>
                                    <textarea id="content" name="content" type="text" class="required form-control">
                                   </textarea>
                                </section>
                            </div>
                            <br>
                            <br>
                            <input type="submit" class="form-control btn btn-primary btn-block btn-lg">
                        </form>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

   

@endsection

@section('custome_js_file')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
        CKEDITOR.replace( 'content' );
</script>
@endsection