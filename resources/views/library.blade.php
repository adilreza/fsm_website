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
#single_art:hover{
    box-shadow: 1px 1px 5px #7f8fa6;
    border-radius: 5px;
    transition: 0.5s;
}

@media only screen and (max-width: 570px) {
    #single_art{
        float: none!important;
        width: 100%!important;
    }
}

@media only screen and (max-width: 1230px) {
    #single_art{
       
        width: 45%!important;
    }
}

</style>

@section('library_page')



<div class="inner-page-wrapper pricing-wrapper text-center" style="background:#f1f2f6;">
    <div class="container" style="width:96%;">
                    <div class="containr" style="background:white; padding:50px 10px;border-radius:10px;">
                    
                        <div class="row" style="">
                            <div class="col-md-12 col-sm-12">
                            <form method="post" action="{{URL::to('/library')}}">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-8 col-sm-6">
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
                                        <div class="col-md-4 col-sm-6">
                                            <input class="btn form-control btn-info btn-lg" type="submit" value="Filter">
                                        </div>

                                    </div>
                                </form>
                            </div>
{{--                             
                            <div class="col-md-4 col-sm-4">
                                            <form action="#">
                                            <input class="form-control btn-lg" type="text" placeholder="Search.." name="search">
                                            </form>
                            </div> --}}
                        </div>
                </div>

        <br>
        <br>



<div class="dynamic_article_div" style="width:100%;padding:10px 0px;margin:auto;">
        
    
    
    @foreach ($all_article as $article)
        <div id="single_art" style="width:31%;float:left;overflow:hidden; height:250px;;margin-right:22px;padding:5px;margin-bottom:10px;">
            <h3 style="text-align:left; "><i style="background:#273c75; border-radius:50%;color:#00a8ff;padding:10px;"class="fas fa-book-reader"></i></h3>
            <a href="{{URL::to('/article/article_details/'.$article->id)}}">
            <h5 style="text-align:left;color:#4AC8ED;">{!! str_limit($article->post_title, $limit=100,$end='...') !!}</h5>

            </a>
            <br>
            <br>
            <h6 style="bottom:0px; font-size:11px;">Article for <i style="color:brown;">{{ $article->application_type}}</i></h6>
                
        </div>
        
    @endforeach


</div>
</div>
</div>
        


@endsection