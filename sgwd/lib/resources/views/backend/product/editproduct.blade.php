@extends('backend.master')
@section('title', 'Thêm sản phẩm')
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
                    <div class="panel-heading">Thêm sản phẩm</div>
                    <div class="panel-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row" style="margin-bottom:40px">
                                    <div class="col-xs-8">
                                        <div class="form-group">
                                            <label>Mã sản phẩm</label>
                                            <input required type="text" name="code" class="form-control" value="{{$prod->prod_code}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input required type="text" name="name" class="form-control" value="{{$prod->prod_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Bảo hành</label>
                                            <input required type="text" name="warranty" class="form-control" value="{{$prod->prod_warranty}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Đơn vị tính</label>
                                            <input required type="text" name="unit" class="form-control" value="{{$prod->prod_unit}}">
                                        </div>
                                        <div class="form-group" >
                                            <label>Trạng thái</label>
                                            <select required name="status" class="form-control">
                                                <option value="1" @if($prod->prod_status==1) checked @endif>Còn hàng</option>
                                                <option value="0" @if($prod->prod_status==0) checked @endif>Hết hàng</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Miêu tả</label>
                                            <textarea class="ckeditor" required name="description">{{$prod->prod_description}}</textarea>
                                            <script type="text/javascript">
                                                var editor = CKEDITOR.replace('description', {
                                                    language: 'vi',
                                                    filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
                                                    filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
                                                    filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                    filebrowserFlashUploadUrl: 'public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label>Danh mục</label>
                                            <select required name="cate" class="form-control">
                                                @foreach($catelist as $cate)
                                                    <option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Lựa chọn cửa đi hoặc cửa sổ</label><br>
                                            Cửa đi: <input type="radio" name="doororwindow" value="1" @if($prod->prod_doororwindow == 1) checked @endif>
                                            Cửa sổ: <input type="radio" checked name="doororwindow" value="0" @if($prod->prod_doororwindow == 0) checked @endif>
                                        </div>
                                        <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                                        <a href="{{asset('admin/product')}}" class="btn btn-danger">Hủy bỏ</a>
                                    </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>    <!--/.main-->
@endsection