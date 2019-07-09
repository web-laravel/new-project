@extends('frontend.layouts.master')
@section('content')
    <!-- !Important notice -->
    <!-- Only for product page body tag have to added .productPage class -->
    <div class="productPage">

        <!-- catg header banner section -->
        <section id="aa-catg-head-banner">
            <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
            <div class="aa-catg-head-banner-area">
                <div class="container">
                    <div class="aa-catg-head-banner-content">
                        <h2>Fashion</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Women</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- / catg header banner section -->

        <!-- product category -->
        <section id="aa-product-category">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                        <div class="aa-product-catg-content">
                            <div class="aa-product-catg-head">
                                <div class="aa-product-catg-head-left">
                                    <form action="" class="aa-sort-form">
                                        <label for="">Sort by</label>
                                        <select name="">
                                            <option value="1" selected="Default">Default</option>
                                            <option value="2">Name</option>
                                            <option value="3">Price</option>
                                            <option value="4">Date</option>
                                        </select>
                                    </form>
                                    <form action="" class="aa-show-form">
                                        <label for="">Show</label>
                                        <select name="">
                                            <option value="1" selected="12">12</option>
                                            <option value="2">24</option>
                                            <option value="3">36</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="aa-product-catg-head-right">
                                    <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                                    <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                                </div>
                            </div>
                            <div class="aa-product-catg-body">
                                <ul class="aa-product-catg">
                                @foreach($items as $item)
                                    <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img width="250px" height="300px"
                                                                                        src="{{asset('lib\storage\app\avatar\\'.$item->prod_img)}}"
                                                                                        alt="polo shirt img"></a>
                                                <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Thêm vào giỏ hàng</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$item->prod_name}}</a>
                                                    </h4>
                                                    <span class="aa-product-price">{{number_format($item->prod_price,'0',',','.')}} VNĐ</span>
                                                </figcaption>
                                            </figure>
                                            <div class="aa-product-hvr-content">
                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                   title="Xem chi tiết"
                                                   data-toggle="modal" data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="aa-product-catg-pagination">
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    @include('frontend.category.categories')
                </div>
            </div>
        </section>
        <!-- / product category -->
    </div>
@endsection