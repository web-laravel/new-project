@extends('backend.master')
@section('title', 'Sản phẩm')
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách user</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{asset('admin/product/add')}}" class="btn btn-primary">Thêm user</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Họ</th>
                                        <th width="30%">Tên</th>
                                        <th>SĐT</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    @foreach($productlist as $p)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$p->prod_code}}</td>--}}
{{--                                            <td>{{$p->prod_name}}</td>--}}
{{--                                            <td>{{$p->prod_warranty}}</td>--}}
{{--                                            <td>@if($p->prod_status == 1) Còn hàng @else Hết hàng @endif</td>--}}
{{--                                            <td>{!!$p->prod_description!!}</td>--}}
{{--                                            <td>{{$p->cate_name}}</td>--}}
{{--                                            <td>@if ($p->prod_doororwindow == 1) Cửa đi @else Cửa sổ @endif</td>--}}
{{--                                            <td>--}}
{{--                                                <img width="200px" src="{{asset('lib/storage/app/avatar/'.$p->prod_img)}}"--}}
{{--                                                     class="thumbnail">--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <a href="{{asset('admin/product/detail/'.$p->prod_id)}}" class="btn btn-primary">Thêm chi tiết sản phẩm</a>--}}
{{--                                                <a href="{{asset('admin/product/edit/'.$p->prod_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>--}}
{{--                                                <a href="{{asset('admin/product/delete/'.$p->prod_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
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