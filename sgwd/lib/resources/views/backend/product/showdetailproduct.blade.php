@extends('backend.master')
@section('title', 'Sản phẩm')
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
                    <div class="panel-heading">Danh sách sản phẩm</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{asset('admin/product/detail/'.$id.'/add')}}" class="btn btn-primary">Thêm chi tiết sản phẩm</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th>Mã sản phẩm</th>
                                        <th width="30%">Màu Sản phẩm</th>
                                        <th>Kích thước sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productlist as $p)
                                        <tr>
                                            <td>{{$p->prod_code}}</td>
                                            <td>{{$p->prod_color}}</td>
                                            <td>{{$p->prod_size}}</td>
                                            <td>{{number_format($p->prod_price,'0',',','.')}}</td>
                                            <td>
                                                <img width="200px" src="{{asset('lib/storage/app/avatar/'.$p->prod_image)}}"
                                                     class="thumbnail">
                                            </td>
                                            <td>
                                                <a href="{{asset('admin/product/detail/'.$p->prod_id.'/edit/'.$p->prod_detail_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                <a href="{{asset('admin/product/detail/'.$p->prod_id.'/delete/'.$p->prod_detail_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@endsection