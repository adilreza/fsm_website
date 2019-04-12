@extends('/admin/admin_panel/admin_master')

@section('page_title', 'newsletter uploader | Frontier Semiconductor')

@section('admin_tables_page')

<div class="containerr text-center" style="height:650px;width:95%;margin:auto;">
    <div class="row">
    <iframe style="height:450px;width:margin:0 auto;" id="newsletter_preview" src="http://webtest.fsmtranscriber.com/admin/news_letter_api/{{session('newsletter_admin_opt_id')}}"></iframe>
    </div>

    <br>
    <hr>
        <div class="row">
            <div class="col-md-6">
                    <i style="color:green;font-size:25px;cursor:pointer;" onclick="mobile()" class="fas fa-mobile-alt"></i>
            </div>
            <div class="col-md-6">
                    <i style="color:green;font-size:25px;cursor:pointer;" onclick="desktop()" class="fas fa-desktop"></i>
            </div>
        </div>
    <hr>


    <div class="row" style="width:100%;">
        <div class="col-md-3">
            <a href="http://webtest.fsmtranscriber.com/admin/news_letter_api/{{session('newsletter_admin_opt_id')}}"><button class="btn btn-success">Preview</button></a>
        </div>
        <div class="col-md-3">
                <div class="col-md-3">
                <a href="{{URL::to('/admin/newsletter_blast/')}}/{{session('newsletter_admin_opt_id')}}">
                    <button class="btn btn-info">Blast Now</button>
                </a>
                </div>
        </div>
        <div class="col-md-3">
                <div class="col-md-3">
                    <button class="btn btn-warning">Blank option</button>
                </div>
        </div>
        <div class="col-md-3">
                <div class="col-md-3">
                    <a href="/admin/newsletter_delete/{{session('newsletter_admin_opt_id')}}">
                        <button class="btn btn-danger">Delete Now</button>
                    </a>
                    </div>
        </div>
    </div>

</div>


<script>

function desktop()
{
    document.getElementById('newsletter_preview').style.width="100%";
}
function mobile()
{
    document.getElementById('newsletter_preview').style.width="40%";
    document.getElementById('newsletter_preview').style.margin="auto";
}
document.getElementById('newsletter_preview').style.width="40%";
document.getElementById('newsletter_preview').style.margin="auto";

</script>




@endsection
