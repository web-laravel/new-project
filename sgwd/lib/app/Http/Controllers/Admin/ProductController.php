<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductController extends Controller
{
    //
    public function getProduct() {
        $data['productlist'] = DB::table('sgwd_products')
            ->join('sgwd_categories', 'sgwd_products.cate_id', '=', 'sgwd_categories.id')
            ->join('sgwd_product-detail', 'sgwd_products.id', '=', 'sgwd_product-detail.prod_id')
            ->orderBy('sgwd_products.id', 'desc')->get();
        return view('backend.product', $data);
    }

    public function getAddProduct() {
        $data['catelist'] = Category::all();
        return view('backend.addproduct', $data);
    }

    public function postAddProduct(Request $request) {
        $product = new Product();
        $product->prod_code = $request->id;
        $product->prod_name = $request->name;
        $product->prod_warranty = $request->warranty;
        $product->prod_unit = $request->unit;
        $product->prod_status = $request->status;
        $product->prod_description = $request->description;
        $product->cate_id = $request->cate;
        $product->prod_doororwindow = $request->doororwindow;
        $product->save();
        return redirect()->intended('admin/product/add/detail');
    }

    public function getAddDetailProduct() {
        $data['prod_id'] = Product::all();
        return view('backend.add-detailproduct', $data);
    }

    public function postAddDetailProduct(AddProductRequest $request) {
        $filename = $request->img->getClientOriginalName();
        $product_detail = new Product_Detail();
        $product_detail->prod_price = $request->price;
        $product_detail->prod_size = $request->size;
        $product_detail->prod_image = $filename;
        $product_detail->prod_color = $request->color;
        $product_detail->prod_id = $request->id;
        $product_detail->save();
        $request->img->storeAs('avatar', $filename);
        return back();
    }

    public function getEditProduct($id) {
        return view('backend.editproduct');
    }
}
