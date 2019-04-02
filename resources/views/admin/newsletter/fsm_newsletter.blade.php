<!DOCTYPE html>
<html lang="en">
<head>
    <title>FSM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        body
        {
            font-family: "Comic Sans MS";

            font-size: 20px;
        }
        #demo {
            background-image: url("https://lh3.googleusercontent.com/yH9A__Xq6Pq8z71rDmUjgXy4am8GOoUH08DX1xpkl0q2o_sUjJkcJey7H2F_NqcEVs2E=s128");
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
        p span{
            color: rgb(191,155,11);
            font-family: "Comic Sans MS";
        }
        #product
        {
            background-color: aliceblue;
        }
        #comment
        {
            background-color: rgb(1,74,127);
            float: left;
            padding-left: 350px;
        }
        .crop {
            height: 200px;
            width: 200px;
            overflow: hidden;
        }
        .crop img {
            height: 200px;
            width: 200px;
        }


    </style>
    <!--product style-->
    <style>
        .prod-info-main {

            border: 1px solid #CEEFFF;

            margin-bottom: 20px;

            margin-top: 10px;

            background: #fff;

            padding: 6px;

            -webkit-box-shadow: 0 1px 4px 0 rgba(21,180,255,0.5);

            box-shadow: 0 1px 1px 0 rgba(21,180,255,0.5);

        }



        .prod-info-main .product-image {

            background-color: #EBF8FE;

            display: block;

            min-height: 238px;

            overflow: hidden;

            position: relative;

            border: 1px solid #CEEFFF;

            padding-top: 40px;

        }



        .prod-info-main .product-deatil {

            border-bottom: 1px solid #dfe5e9;

            padding-bottom: 17px;

            padding-left: 16px;

            padding-top: 16px;

            position: relative;

            background: #fff

        }



        .product-content .product-deatil h5 a {

            color: #2f383d;

            font-size: 15px;

            line-height: 19px;

            text-decoration: none;

            padding-left: 0;

            margin-left: 0

        }



        .prod-info-main .product-deatil h5 a span {

            color: #9aa7af;

            display: block;

            font-size: 13px

        }



        .prod-info-main .product-deatil span.tag1 {

            border-radius: 50%;

            color: #fff;

            font-size: 15px;

            height: 50px;

            padding: 13px 0;

            position: absolute;

            right: 10px;

            text-align: center;

            top: 10px;

            width: 50px

        }



        .prod-info-main .product-deatil span.sale {

            background-color: #21c2f8

        }



        .prod-info-main .product-deatil span.discount {

            background-color: #71e134

        }



        .prod-info-main .product-deatil span.hot {

            background-color: #fa9442

        }



        .prod-info-main .description {

            font-size: 12.5px;

            line-height: 20px;

            padding: 10px 14px 16px 19px;

            background: #fff

        }



        .prod-info-main .product-info {

            padding: 11px 19px 10px 20px

        }



        .prod-info-main .product-info a.add-to-cart {

            color: #2f383d;

            font-size: 13px;

            padding-left: 16px

        }



        .prod-info-main name.a {

            padding: 5px 10px;

            margin-left: 16px

        }



        .product-info.smart-form .btn {

            padding: 6px 12px;

            margin-left: 12px;

            margin-top: -10px

        }



        .load-more-btn {

            background-color: #21c2f8;

            border-bottom: 2px solid #037ca5;

            border-radius: 2px;

            border-top: 2px solid #0cf;

            margin-top: 20px;

            padding: 9px 0;

            width: 100%

        }



        .product-block .product-deatil p.price-container span,

        .prod-info-main .product-deatil p.price-container span,

        .shipping table tbody tr td p.price-container span,

        .shopping-items table tbody tr td p.price-container span {

            color: #21c2f8;

            font-family: Lato, sans-serif;

            font-size: 24px;

            line-height: 20px

        }



        .product-info.smart-form .rating label {

            margin-top:15px;



        }



        .prod-wrap .product-image span.tag2 {

            position: absolute;

            top: 10px;

            right: 10px;

            width: 36px;

            height: 36px;

            border-radius: 50%;

            padding: 10px 0;

            color: #fff;

            font-size: 11px;

            text-align: center

        }



        .prod-wrap .product-image span.tag3 {

            position: absolute;

            top: 10px;

            right: 20px;

            width: 60px;

            height: 36px;

            border-radius: 50%;

            padding: 10px 0;

            color: #fff;

            font-size: 11px;

            text-align: center

        }



        .prod-wrap .product-image span.sale {

            background-color: #57889c;

        }



        .prod-wrap .product-image span.hot {

            background-color: #a90329;

        }



        .prod-wrap .product-image span.special {

            background-color: #3B6764;

        }

        .shop-btn {

            position: relative

        }



        .shop-btn>span {

            background: #a90329;

            display: inline-block;

            font-size: 10px;

            box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);

            font-weight: 700;

            border-radius: 50%;

            padding: 2px 4px 3px!important;

            text-align: center;

            line-height: normal;

            width: 19px;

            top: -7px;

            left: -7px

        }



        .product-deatil hr {

            padding: 0 0 5px!important

        }



        .product-deatil .glyphicon {

            color: #3276b1

        }



        .product-deatil .product-image {

            border-right: 0px solid #fff !important

        }



        .product-deatil .name {

            margin-top: 0;

            margin-bottom: 0

        }



        .product-deatil .name small {

            display: block

        }



        .product-deatil .name a {

            margin-left: 0

        }



        .product-deatil .price-container {

            font-size: 24px;

            margin: 0;

            font-weight: 300;



        }



        .product-deatil .price-container small {

            font-size: 12px;



        }



        .product-deatil .fa-2x {

            font-size: 16px!important

        }



        .product-deatil .fa-2x>h5 {

            font-size: 12px;

            margin: 0

        }



        .product-deatil .fa-2x+a,

        .product-deatil .fa-2x+a+a {

            font-size: 13px

        }



        .product-deatil .certified {

            margin-top: 10px

        }



        .product-deatil .certified ul {

            padding-left: 0

        }



        .product-deatil .certified ul li:not(first-child) {

            margin-left: -3px

        }



        .product-deatil .certified ul li {

            display: inline-block;

            background-color: #f9f9f9;

            padding: 13px 19px

        }



        .product-deatil .certified ul li:first-child {

            border-right: none

        }



        .product-deatil .certified ul li a {

            text-align: left;

            font-size: 12px;

            color: #6d7a83;

            line-height: 16px;

            text-decoration: none

        }



        .product-deatil .certified ul li a span {

            display: block;

            color: #21c2f8;

            font-size: 13px;

            font-weight: 700;

            text-align: center

        }



        .product-deatil .message-text {

            width: calc(100% - 70px)

        }



        @media only screen and (min-width:1024px) {

            .prod-info-main div[class*=col-md-4] {

                padding-right: 0

            }

            .prod-info-main div[class*=col-md-8] {

                padding: 0 13px 0 0

            }

            .prod-wrap div[class*=col-md-5] {

                padding-right: 0

            }

            .prod-wrap div[class*=col-md-7] {

                padding: 0 13px 0 0

            }

            .prod-info-main .product-image {

                border-right: 1px solid #dfe5e9

            }

            .prod-info-main .product-info {

                position: relative

            }

        }
    </style>
</head>
<body>
<div id="demo">
<div class="example">
    <div class="text-center">
        <img src="http://webtest.fsmtranscriber.com/fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png" style="height: 50px; width: 100px">
        <p style="color: rgb(191,155,11); font-size: 4vw; ">Frontier Semiconductor</p>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3 style="color :rgb(253,248,3); ">PRODUCT SPOTLIGHT: FILM STRESS GAUGES</h3>
            <p style="color : white; "> <span>Frontier Semiconductor(FSM) </span>offers  a range of advanced metrology products and solutions for Semiconductor,LED,Solar, FPD,
            Data Storage, and MEMES applications. We have over 25 years of experience in stress management, film adhesion testing,wafer
                topography metrology and electrical characterization. Our latest offerings include innovative technology to meet
                metrology needs of <span>3DIC</span> manufacturing and to monitor stress of large flat panels.
            </p>
        </div>
        <br>
        <div class="col-sm-12">
            <h3 style="color :rgb(253,248,3);  ">FSM FILM STRESS MEASUREMENT ADVANTAGES</h3>
            <p style="color : white;"><span>FSM </span>offers the most robust and advanced techniques as well as a roadmap for stress
                gauges to improve your process and yield:

                <ul style="list-style-type:disc; color:white; ">
            <li>  Fast, non-contact scanning.</li>
            <li> Highest lateral resolution with > 12,000 points per 300mm scan.</li>
                    <li> <span style="color: rgb(191,155,11); ">FSM</span> patented <span style="color: rgb(191,155,11);">Microposition Detector</span> to measure bow from 1 micron to
                        over 1 millimeter.</li>
                    <li>Ability to measure on patterned wafers.</li>
                    <li>Full range of automation and high temperature systems available.</li>
                </ul>
            </p>
        </div>

    </div>

</div>
</div>

<div id="product">
    <div class="container" style=" padding:20px;">
        <div class="example">
            <div class="text-center">
                <br>

                <p style="color: blue; font-size: 3vw; ">Featured Products</p>
            </div>
        </div>
        <div class="col-xs-12 col-md-6">

            <!-- First product box start here-->
            <div class="prod-info-main prod-wrap clearfix">

                <div class="row">

                    <div class="col-md-5 col-sm-12 col-xs-12">

                        <div class="product-image crop">
                            <a href="http://www.frontiersemi.com/center/products.php">
                            <img src="http://img.egetinnz.com/aeto/1487250184527fNTwEZEafB.PNG" height="200px" width="200px"class="img-responsive">

                            <!--<span class="tag2 hot">-->

                                 <!--SPECIAL-->

                               <!--</span>-->
                            </a>

                        </div>

                    </div>

                    <div class="col-md-7 col-sm-12 col-xs-12">

                        <div class="product-deatil">

                            <h5 class="name">

                                <a href="#">

                                    128NT,128L,128G

                                </a>

                                <a href="#">

                                    <span>128 Series</span>

                                </a>

                            </h5>

                            <!--<p class="price-container">-->

                                <!--<span>$&#45;&#45;&#45;&#45;</span>-->

                            <!--</p>-->

                            <span class="tag1"></span>

                        </div>

                        <div class="description">

                            <p>Film Stress and Wafer bow measurement for wafers up to 200 nm, 300nm or 450nm diameter
                                at room temperature. 2D/3D stress mapping standard. Semi-automatic system with convenient
                                wafer loading and retrieval.</p>

                        </div>

                        <div class="product-info smart-form">

                            <div class="row">

                                <div class="col-md-12">

                                    <a href="http://www.frontiersemi.com/center/products.php" class="btn btn-info">More Info</a>

                                </div>

                                <!--<div class="col-md-12">-->

                                <!--<div class="rating">Rating:-->

                                <!--<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>-->

                                <!--<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>-->

                                <!--<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>-->

                                <!--<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>-->

                                <!--<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>-->

                                <!--</div>-->

                                <!--</div>-->

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>


            <!--2nd product-->
        <div class="col-xs-12 col-md-6">

            <div class="prod-info-main prod-wrap clearfix">

                <div class="row">

                    <div class="col-md-5 col-sm-12 col-xs-12">

                        <div class="product-image crop">
                            <a href="http://www.frontiersemi.com/center/products.php">

                            <img src="http://img.egetinnz.com/aeto/1487246695323WitMkXQKXw.png" height="220px" width="220px"class="img-responsive">

                            <!--<span class="tag2 hot">-->

                                 <!--SPECIAL-->

                               <!--</span>-->
                            </a>
                        </div>

                    </div>

                    <div class="col-md-7 col-sm-12 col-xs-12">

                        <div class="product-deatil">

                            <h5 class="name">

                                <a href="#">

                                    500TC

                                </a>

                                <a href="#">

                                    <span>500 Series</span>

                                </a>

                            </h5>

                            <!--<p class="price-container">-->

                                <!--<span>$&#45;&#45;&#45;&#45;</span>-->

                            <!--</p>-->

                            <span class="tag1"></span>

                        </div>

                        <div class="description">

                            <p>Film Stress and Wafer bow hypothesis measurement for thermal property
                                and stability tests of thin films in inert gas up to 500 degree celsius.<br>
                                Manual Loading system</p>

                        </div>

                        <div class="product-info smart-form">

                            <div class="row">

                                <div class="col-md-12">

                                    <a href="http://www.frontiersemi.com/center/products.php" class="btn btn-info">More info</a>

                                </div>



                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>


            <!-- end product -->
        <!--3rd product-->
        <div class="col-xs-12 col-md-6">

            <div class="prod-info-main prod-wrap clearfix">

                <div class="row">

                    <div class="col-md-5 col-sm-12 col-xs-12">

                        <div class="product-image crop">

                            <a href="http://www.frontiersemi.com/center/products.php">
                            <img src="http://img.egetinnz.com/aeto/1487247665020imaPXffaAN.png" height="200px" width="200px"class="img-responsive">
                            </a>

                            <!--<span class="tag2 hot">-->

                                 <!--SPECIAL-->

                               <!--</span>-->

                        </div>

                    </div>

                    <div class="col-md-7 col-sm-12 col-xs-12">

                        <div class="product-deatil">

                            <h5 class="name">

                                <a href="#">

                                    900TC-VAC

                                </a>

                                <a href="#">

                                    <span>900 Series</span>

                                </a>

                            </h5>

                            <!--<p class="price-container">-->

                                <!--<span>$&#45;&#45;&#45;&#45;</span>-->

                            <!--</p>-->

                            <span class="tag1"></span>

                        </div>

                        <div class="description">

                            <p>Integrated metrology chamber for film Stress and wafer bow hypothesis, outgassing(TDS), film thickness
                                , and more in vacuum up to 900 degree celsius.<br>
                                Manual Loading system</p>

                        </div>

                        <div class="product-info smart-form">

                            <div class="row">

                                <div class="col-md-12">

                                    <a href="http://www.frontiersemi.com/center/products.php" class="btn btn-info">More info</a>

                                </div>

                                <!--<div class="col-md-12">-->

                                <!--<div class="rating">Rating:-->

                                <!--<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>-->

                                <!--<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>-->

                                <!--<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>-->

                                <!--<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>-->

                                <!--<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>-->

                                <!--</div>-->

                                <!--</div>-->

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--end product-->


        <!--4th product-->
        <div class="col-xs-12 col-md-6">

            <div class="prod-info-main prod-wrap clearfix">

                <div class="row">

                    <div class="col-md-5 col-sm-12 col-xs-12">

                        <div class="product-image crop">
                            <a href="http://www.frontiersemi.com/center/products.php">

                            <img src="http://img.egetinnz.com/aeto/1487184378905jbthXTYGMr.png" height="200px" width="200px"class="img-responsive">
                            </a>

                            <!--<span class="tag2 hot">-->

                                 <!--SPECIAL-->

                               <!--</span>-->

                        </div>

                    </div>

                    <div class="col-md-7 col-sm-12 col-xs-12">

                        <div class="product-deatil">

                            <h5 class="name">

                                <a href="#">

                                    900C2C

                                </a>

                                <a href="#">

                                    <span>900 Series</span>

                                </a>

                            </h5>

                            <!--<p class="price-container">-->

                                <!--<span>$&#45;&#45;&#45;&#45;</span>-->

                            <!--</p>-->

                            <span class="tag1"></span>

                        </div>

                        <div class="description">

                            <p>Integrated metrology chamber for film Stress and wafer bow hypothesis, outgassing(TDS), film thickness
                                , and more in vacuum up to 900 degree celsius.<br>
                                Fully automated cassette to cassette system.</p>

                        </div>

                        <div class="product-info smart-form">

                            <div class="row">

                                <div class="col-md-12">

                                    <a href="http://www.frontiersemi.com/center/products.php" class="btn btn-info">More info</a>

                                </div>

                                <!--<div class="col-md-12">-->

                                    <!--<div class="rating">Rating:-->

                                        <!--<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>-->

                                        <!--<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>-->

                                        <!--<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>-->

                                        <!--<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>-->

                                        <!--<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>-->

                                    <!--</div>-->

                                <!--</div>-->

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--end product-->
        <!--5thproduct-->
        <div class="col-xs-12 col-md-6">

            <div class="prod-info-main prod-wrap clearfix">

                <div class="row">

                    <div class="col-md-5 col-sm-12 col-xs-12">

                        <div class="product-image crop">
                            <a href="http://www.frontiersemi.com/center/products.php">

                            <img src="http://img.egetinnz.com/aeto/15506087459278HWCBYtW6Z.jpg" height="200px" width="200px"class="img-responsive">
                            </a>

                            <!--<span class="tag2 hot">-->

                                 <!--SPECIAL-->

                               <!--</span>-->

                        </div>

                    </div>

                    <div class="col-md-7 col-sm-12 col-xs-12">

                        <div class="product-deatil">

                            <h5 class="name">

                                <a href="#">

                                    128FPD

                                </a>

                                <a href="#">

                                    <span>128 Series</span>

                                </a>

                            </h5>

                            <!--<p class="price-container">-->

                                <!--<span>$&#45;&#45;&#45;&#45;</span>-->

                            <!--</p>-->

                            <span class="tag1"></span>

                        </div>

                        <div class="description">

                            <p>Full panel local and global stress managements on glass using reflected pattern
                            and photo-elastic measurement technology.<br>
                            Panel size G4.5 and G6.</p>

                        </div>

                        <div class="product-info smart-form">

                            <div class="row">

                                <div class="col-md-12">

                                    <a href="http://www.frontiersemi.com/center/products.php" class="btn btn-info">More info</a>

                                </div>

                                <!--<div class="col-md-12">-->

                                    <!--<div class="rating">Rating:-->

                                        <!--<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>-->

                                        <!--<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>-->

                                        <!--<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>-->

                                        <!--<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>-->

                                        <!--<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>-->

                                    <!--</div>-->

                                <!--</div>-->

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--end product-->


        <!-- end product -->


    </div>
    </div>
<div id="comment">
    <div class="container">
        <div class="w3-col m8 w3-panel ">
            <br>
            <p style="color: white;">Does Film stress measurement stress you out? <i class="fa fa-tint"></i><br>It shouldn't.Talk to the experts
                with FSM.</p>
            <form action="/action_page.php" target="_blank">
                <input class="w3-input w3-border" type="text" align="center" placeholder="Message" required name="Message">
                <button class="w3-button w3-black w3-right w3-section"  type="submit">
                    <i class="fa fa-paper-plane"></i> LEAVE YOUR COMMENT
                </button>
            </form>
            <br>
        </div>
    </div>
</div>


<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
    <h3 class="w3-center">CONTACT</h3>


    <div class="w3-row w3-padding-32 w3-section">

        <div class="w3-col m8 w3-panel">
            <div class="w3-large w3-margin-bottom">
                <i class="fa fa-home fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Frontier Semicondutor<br>
                <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>
                165 Topaz St., Milpitas, California 95035, USA.<br>
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Tel:(1) 408 432 8838
                <br>
                <i class="fa fa-fax fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Fax:(1) 408 232 1115
                <br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email:fsm100@frontiersemi.com<br>
                <i class="fa fa-globe fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> www.frontiersemi.com<br>

            </div>

        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#demo" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <a href="https://web.facebook.com/FrontierSemiconductor/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
        <a href="https://www.linkedin.com/company/frontier-semiconductor-fsm-/about/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    </div>
</footer>




</body>
</html>
