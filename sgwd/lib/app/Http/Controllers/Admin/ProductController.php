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
    public function getProduct()
    {
//        $data['productlist'] = DB::table('sgwd_product-detail')
//            ->join('sgwd_categories', 'sgwd_products.cate_id', '=', 'sgwd_categories.id')
//            ->join('sgwd_products', 'sgwd_products.id', '=', 'sgwd_product-detail.prod_id')
//            ->orderBy('sgwd_products.prod_code', 'desc')->get();
        $data['productlist'] = DB::table('sgwd_products')
            ->join('sgwd_categories', 'sgwd_products.cate_id', '=', 'sgwd_categories.cate_id')
            ->orderBy('prod_id', 'desc')->get();
        return view('backend.product', $data);
//        dd($data);
    }

    public function getAddProduct()
    {
        $data['catelist'] = Category::all();
        return view('backend.addproduct', $data);
    }

    public function postAddProduct(AddProductRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $product = new Product();
        $product->prod_code = $request->id;
        $product->prod_name = $request->name;
        $product->prod_warranty = $request->warranty;
        $product->prod_price = $request->price;
        $product->prod_img = $filename;
        $product->prod_unit = $request->unit;
        $product->prod_status = $request->status;
        $product->prod_description = $request->description;
        $product->cate_id = $request->cate;
        $product->prod_doororwindow = $request->doororwindow;
        $product->save();
        $request->img->storeAs('avatar', $filename);
        return back();
    }

    public function getEditProduct($id)
    {
        $data['catelist'] = Category::all();
        $data['prod'] = Product::find($id);
        return view('backend.editproduct', $data);
    }

    public function postEditProduct(Request $request, $id)
    {
        $prod = new Product();
        $arr ['prod_code'] = $request->code;
        $arr ['prod_name'] = $request->name;
        $arr ['prod_description'] = $request->description;
        $arr ['prod_status'] = $request->status;
        $arr ['prod_unit'] = $request->unit;
        $arr ['prod_warranty'] = $request->warranty;
        $arr ['prod_doororwindow'] = $request->doororwindow;
        $arr ['cate_id'] = $request->cate;
        $prod::where('prod_id', $id)->update($arr);
        return redirect()->intended('admin/product');
    }

    public function getDeleteProduct($id)
    {
        Product::destroy($id);
//        Product_Detail::destroy($id);
        return back();
    }

    public function getProductDetail($id_prod)
    {
        $data['id'] = $id_prod;
        $data['productlist'] = DB::table('sgwd_product-detail')
            ->join('sgwd_products', 'sgwd_products.prod_id', '=', 'sgwd_product-detail.prod_id')
            ->where('sgwd_product-detail.prod_id', $id_prod)
            ->orderBy('sgwd_product-detail.prod_detail_id', 'desc')->get();
        return view('backend.showdetailproduct', $data);
    }

    public function getAddDetailProduct($id_prod)
    {
        $data['id'] = $id_prod;
        return view('backend.add-detailproduct', $data);
    }

    public function postAddDetailProduct(AddProductRequest $request, $id_prod)
    {
        $filename = $request->img->getClientOriginalName();
        $product_detail = new Product_Detail();
        $product_detail->prod_price = $request->price;
        $product_detail->prod_size = $request->size;
        $product_detail->prod_image = $filename;
        $product_detail->prod_color = $request->color;
        $product_detail->prod_id = $id_prod;
        $product_detail->save();
        $request->img->storeAs('avatar', $filename);
        return back();
    }

    public function getEditDetailProduct($id_prod, $id_prod_detail)
    {
        $data['id'] = $id_prod;
        $data['prod_detail'] = Product_Detail::find($id_prod_detail);
        return view('backend.edit-detailproduct', $data);
    }

    public function postEditDetailProduct(Request $request, $id_prod_detail, $id_prod)
    {
        $prod_detail = new Product_Detail();
        $arrpd ['prod_id'] = $id_prod;
        $arrpd ['prod_color'] = $request->color;
        $arrpd ['prod_size'] = $request->size;
        $arrpd ['prod_price'] = $request->price;
        if ($request->hasFile('img')) {
            $filename = $request->img->getClientOriginalName();
            $arrpd['prod_image'] = $filename;
            $request->img->storeAs('avatar', $filename);
        }
        $prod_detail::where('prod_detail_id', $id_prod_detail)->update($arrpd);
        return redirect()->intended('admin/product/detail/'.$id_prod);
    }

    public function getDeleteDetailProduct($id_prod_detail) {
        Product_Detail::destroy($id_prod_detail);
        return back();
    }
}
