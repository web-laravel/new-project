<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="vi" xml:lang="vi">
<head>
    <base href="{{asset('public/layout/frontend')}}/">
    <link href="logo/icon_alohouse.png" rel="icon">
    <title>Sài Gòn Window</title>
    <link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="product/css/category.css">
    {{--Navbar fixtop--}}
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" src="stylesheet/jquery1.js"></script>
    <script type="text/javascript" src="stylesheet/jquery_002.js"></script>
    {{--end tabs scoll--}}
    <script type="text/javascript" src="javascript/jquerry/jquery-1.3.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit.min.css"/>

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit-icons.min.js"></script>

</head>
<body class="" itemscope="" itemtype="https://schema.org/Recipe">
<!--menu mobi -->
<link type="text/css" rel="stylesheet" href="menu_master/jquery.mmenu.all.css"/>
<style>
    @media screen and (min-width: 767px) {
        /*#menu_mobi{
            display:none !important;
            width:0px !important;
        }*/
    }
</style>

<script type="text/javascript" src="menu_master/jquery-2.2.0.js"></script>
<script type="text/javascript" src="menu_master/jquery.mmenu.all.min.js"></script>
<!--<script type="text/javascript">
    $(function($) {
        ('nav#menu').mmenu();
    });
</script>-->

<script>
    var $j = jQuery.noConflict();
    $j(document).ready(function () {
        $j('nav#menu').mmenu();
    });
</script>
<!--end menu mobi-->
<!--nav bar-->
@include('frontend.layouts.nav_bar')
<!--end nav bar-->
<div id="page" class="bg_body">
    <a id="menu_mobi" href="#menu">
        <span></span>
    </a>
    <div id="header">
        <div class="cont">
            <div class="right">
                <div class="menu">
                    <script type="text/javascript">
                        $(document).on('scroll', function () {
                            if (window.innerWidth > 960) {
                                $('.menu_destop').show();
                                $('.menu_phone').hide();
                                $('#menu_site').hide();
                            } else {
                                $('.menu_destop').hide();
                                $('.silder_home').hide();
                            }
                        });
                    </script>

                    {{--menu destop--}}
                    @include('frontend.layouts.menu_desktop')
                    {{--end menu destop--}}
                </div>
            </div>
            <div class="left">
                <div class="bottom_header">
                    <div class="logo">
                        <a title="Quay về trang chủ" href="">
                            <img src="logo/logo_saigonwindowgroup.png" alt="Sài Gòn Window">
                        </a>
                    </div>
                </div>
            </div>
            <div class="both"></div>
        </div>
        <div class="saigonwindow_top">
            <a title="saigonwindow" href="">SAIGON WINDOW</a>
            SẢN XUẤT, PHÂN PHỐI CỬA LƯỚI CHỐNG MUỖI, GIÀN PHƠI QUẦN ÁO HÀN QUỐC
        </div>
    </div>
    <div class="both"></div>
</div>
<div class="container">
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="product/images/home/girl1.jpg" class="girl img-responsive" alt=""/>
                                    <img src="product/images/home/pricing.png" class="pricing" alt=""/>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="product/images/home/girl2.jpg" class="girl img-responsive" alt=""/>
                                    <img src="product/images/home/pricing.png" class="pricing" alt=""/>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="product/images/home/girl3.jpg" class="girl img-responsive" alt=""/>
                                    <img src="product/images/home/pricing.png" class="pricing" alt=""/>
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left" style="background: orange; width: 25px "></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right" style="background: orange; width: 25px "></i>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-2">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($categories as $cate)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                    href="{{asset('category/'.$cate->cate_id.'.html')}}">{{$cate->cate_name}}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div><!--/category-products-->

                    </div>
                </div>
                <div class="col-sm-7 padding-right">
                    <!--content-->
                    @yield('content')
                </div>
                <div class="col-sm-3">
                    <div class="uk-card uk-card-default uk-card-hover uk-card-small " uk-sticky uk-sticky-fixed>
                        <div class="uk-card-header">
                            <button class="tch-text-bold uk-button uk-width-1-1 uk-padding-remove-left uk-padding-remove-right"
                                    style="font-size: 25px; background-color: #b0d4f1;" type="button">XEM GIỎ HÀNG
                            </button>
                        </div>
                        <div class="card-sticky">
                            <div class="uk-card-footer">
                                <div class="uk-grid-small uk-padding-remove-bottom uk-grid">
                                    <h1>this is a test</h1>
                                    <h1>this is a test</h1>
                                    <h1>this is a test</h1>
                                    <h1>this is a test</h1>
                                    <h1>this is a test</h1>
                                    <h1>this is a test</h1>
                                    <h1>this is a test</h1>
                                </div>
                            </div>
                            <div class="uk-card-footer">
                                <div class="uk-grid-small uk-grid"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <link href="product/css/bootstrap.min.css" rel="stylesheet">
    <link href="product/css/font-awesome.min.css" rel="stylesheet">
    <link href="product/css/prettyPhoto.css" rel="stylesheet">
    <link href="product/css/price-range.css" rel="stylesheet">
    <link href="product/css/animate.css" rel="stylesheet">
    <link href="product/css/main.css" rel="stylesheet">
    <link href="product/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="product/js/html5shiv.js"></script>
    <script src="product/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="product/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="product/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="product/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="product/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="product/images/ico/apple-touch-icon-57-precomposed.png">
    <script src="product/js/jquery.js"></script>
    <script src="product/js/bootstrap.min.js"></script>
    <script src="product/js/jquery.scrollUp.min.js"></script>
    <script src="product/js/price-range.js"></script>
    <script src="product/js/jquery.prettyPhoto.js"></script>
    <script src="product/js/main.js"></script>
</div>
<!--footer-->
@include('frontend.layouts.footer')
</body>
</html>