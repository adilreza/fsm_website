@extends('layout.master')

@section('page_title', "Article details  | Frontier Semicondructor")


@section('index_page')
    


<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Top Wrapper Start -->


<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper search-results-wrapper" style="padding-bottom:30px">
    @foreach ($single_article as $article)
        
   <div style="background-image: linear-gradient(to bottom right, #3c40c6, white)">
        <div class="container" style="padding:30px 0px;;" >
            <div class="row">
                <div class="col-md-7">
                    <h1 style="color:white;">{{$article->post_title}}</h1>
                    
                </div>
            <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4 text-center">
                                <img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/library_image/'.$article->display_image)}}" style="height:260px;width:340px;">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <hr>

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