@extends('layout.master')

@section('page_title', "Article details  | Frontier Semicondructor")


@section('index_page')
    


<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Top Wrapper Start -->


<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper search-results-wrapper" style="padding:50px 10px;">
    @foreach ($single_article as $article)
        
   
    <div class="container">
    <h3 style="color:darkturquoise;">{{$article->post_title}}</h3>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                    <img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/library_image/'.$article->display_image)}}" style="height:250px;width:340px;">
            </div>
        </div>
    </div>
    <div class="container">
       <div class="row">
            <div class="col-md-12">
                <p>{!! $article->main_content !!}</p>
            </div>
           
       </div>
    </div>

    @endforeach

</div>
<!-- Inner Page Wrapper End -->
<!-- Our CTA Wrapper Start -->

<!-- Our CTA Wrapper End -->

@endsection