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

<div class="breadcrumb-wrapper">
        <div class="container">
          <h1>Library</h1>
          <ul class="page-breadcrumb">
          <li><a href="{{URL::to('/')}}">Home</a></li>
            <li>library</li>
          </ul>
        </div>
</div>


<div class="inner-page-wrapper pricing-wrapper text-center" style="background:#f1f2f6;">
    <div class="container" style="width:96%;">
                    <div class="containr" style="background:white; padding:70px 10px;border-radius:10px;">

                        <div class="row" style="">
                            <div class="col-md-7 col-sm-6">
                                    <select name="cars" class="custom-select custom-select-lg mb-3">
                                            <option selected>Application Type</option>
                                            <option value="volvo">Film Stress</option>
                                            <option value="fiat">Film Adhension</option>
                                            <option value="audi">Laser Scanning</option>
                                            <option value="audi">Thin Wafer Metrology</option>
                                            <option value="audi">Electrical Characterization</option>
                                            <option value="audi">Raman Spectroscopy</option>
                                            <option value="audi">3DIC TSV Process Control</option>
                                            <option value="audi">Low Coherence Interferometry</option>
                                    </select>
                            </div>
                          
                            <div class="col-md-5 col-sm-6">
                                            <form action="/action_page.php">
                                            <input class="form-control btn-lg" type="text" placeholder="Search.." name="search">
                                            </form>
                            </div>
                        </div>
                </div>

        <br>
        <br>



        <div class="row" id="library_single">
            <div class="col-lg-4 col-md-4 col-sm-6">
                
                <img src="{{URL::asset('fsm_demo/wafer_related.jpg')}}" style="height:250px;width:340px;">

            </div>
            <div class="col-lg-8 col-md-8 col-sm-6">
                <h3 style="text-align:left;color:#4AC8ED;">This is Title section fo film stress and stress mesuremnt</h3>
                <hr>
                <p style="text-align:left;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates dignissimos ut, unde reprehenderit, temporibus ipsam sit, error porro eligendi a esse quis consequuntur itaque. Quo error facere ut eius. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, itaque nam, eaque error odio cumque, obcaecati quibusdam ab rem maiores autem...</p>
            </div>
          
        </div>
        <br>
        <div class="row" id="library_single">
            <div class="col-lg-4 col-md-4 col-sm-6">
                
                <img src="{{URL::asset('fsm_demo/fsm_demo_image.jpg')}}" style="height:250px;width:340px;">

            </div>
            <div class="col-lg-8 col-md-8 col-sm-6">
                <h3 style="text-align:left;">This is Title section fo film stress and stress mesuremnt</h3>
                <hr>
                <p style="text-align:left;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates dignissimos ut, unde reprehenderit, temporibus ipsam sit, error porro eligendi a esse quis consequuntur itaque. Quo error facere ut eius. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, itaque nam, eaque error odio cumque, obcaecati quibusdam ab rem maiores autem...</p>
            </div>
          
        </div>
        <br>
        <div class="row" id="library_single">
            <div class="col-lg-4 col-md-4 col-sm-6">
                
                <img src="{{URL::asset('fsm_demo/fsm_demo_image.gif')}}" style="height:250px;width:340px;">

            </div>
            <div class="col-lg-8 col-md-8 col-sm-6">
                <h3 style="text-align:left;">This is Title section fo film stress and stress mesuremnt</h3>
                <hr>
                <p style="text-align:left;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates dignissimos ut, unde reprehenderit, temporibus ipsam sit, error porro eligendi a esse quis consequuntur itaque. Quo error facere ut eius. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, itaque nam, eaque error odio cumque, obcaecati quibusdam ab rem maiores autem...</p>
            </div>
          
        </div>
    </div>



</div>
        


@endsection