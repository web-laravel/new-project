@extends('frontend.layouts.master')
@section('content')

    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">{{$cateName->cate_name}}</h2>
        @foreach($items as $item)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{asset('lib/storage/app/avatar/'.$item->prod_img)}}" alt=""/>
                            <h2>{{number_format($item->prod_price,'0',',','.')}} VNĐ</h2>
                            <p>{{$item->prod_name}}</p>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{number_format($item->prod_price,'0',',','.')}} VNĐ</h2>
                                <p>{{$item->prod_name}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i
                                            class="fa"></i>Xem chi tiết</a>
                                <a href="#" class="btn btn-default add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div><!--features_items-->

@endsection