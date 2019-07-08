@extends('backend.master')
@section('title', 'Chỉnh sửa sản phẩm')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Sửa sản phẩm</div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            @include('errors.note')
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="form-group" >
                                        <label>Giá sản phẩm</label>
                                        <input required type="number" name="price" class="form-control" value="{{$prod_detail->prod_price}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Kích thước</label>
                                        <input required type="text" name="size" class="form-control" value="{{$prod_detail->prod_size}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Ảnh sản phẩm</label>
                                        <input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
                                        <img id="avatar" class="thumbnail" width="300px" src="{{asset('lib\storage\app\avatar\\').$prod_detail->prod_image}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Màu sơn</label>
                                        <input required type="text" name="color" class="form-control" value="{{$prod_detail->prod_color}}">
                                    </div>
                                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                                    <a href="{{asset('admin/product/detail/'.$id)}}" class="btn btn-danger">Hủy bỏ</a>
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@endsection