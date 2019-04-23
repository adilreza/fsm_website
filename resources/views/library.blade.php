@extends('layout.master')

@section('page_title', "Library | Frontier Semicondructor")
@section('custome_static')
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">    
@endsection
<style>
#library_single
{
    border: 1px solid #99999999;
    padding:15px 0px;
    transition: 0.5s;
}
#library_single:hover
{
    border: 1px solid #99999999;
    box-shadow:10px 5px 20px darkgrey;
    padding:15px 0px;
    cursor: pointer;
}
#library_single h3{
    color:#4AC8ED;
    font-family: 'Old Standard TT', serif;
}
#library_single p{
    font-family: 'Titillium Web';
}
</style>

@section('library_page')



<div class="inner-page-wrapper pricing-wrapper text-center" style="background:#f1f2f6;">
    <div class="container" style="width:96%;">
                    <div class="containr" style="background:white; padding:70px 10px;border-radius:10px;">
                    
                        <div class="row" style="">
                            <div class="col-md-7 col-sm-7">
                            <form method="post" action="{{URL::to('/library')}}">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-10">
                                            <select name="cars" class="custom-select custom-select-lg mb-3">
                                                    <option selected>Application All Type</option>
                                                    <option value="Film Stress">Film Stress</option>
                                                    <option value="Film Adhension">Film Adhension</option>
                                                    <option value="Laser Scanning">Laser Scanning</option>
                                                    <option value="Thin Wafer Metrology">Thin Wafer Metrology</option>
                                                    <option value="Electrical Characterization">Electrical Characterization</option>
                                                    <option value="Raman Spectroscopy">Raman Spectroscopy</option>
                                                    <option value="3DIC TSV Process Control">3DIC TSV Process Control</option>
                                                    <option value="Low Coherence Interferometry">Low Coherence Interferometry</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="btn form-control btn-info btn-lg" type="submit" value="Filter">
                                        </div>

                                    </div>
                                </form>
                            </div>
                            
                            <div class="col-md-4 col-sm-4">
                                            <form action="#">
                                            <input class="form-control btn-lg" type="text" placeholder="Search.." name="search">
                                            </form>
                            </div>
                        </div>
                </div>

        <br>
        <br>

    @foreach ($all_article as $article)
        
   
    <a href="{{URL::to('/article/article_details/'.$article->id)}}">
        
        <div class="row" id="library_single">
       
                <div class="col-lg-4 col-md-4 col-sm-6">
                    
                    <img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/library_image/'.$article->display_image)}}" style="height:250px;width:340px;">

                </div>
           
            <div class="col-lg-8 col-md-8 col-sm-6">
            <h3 style="text-align:left;color:#4AC8ED;">{{$article->post_title}}</h3>
                <hr>
                <h6 style="text-align:left;">{!! str_limit($article->main_content, $limit = 300, $end = '...') !!}</h6>
            </div>
          
        </div>
    </a>
    <br>

    @endforeach

    </div>



</div>
        


@endsection