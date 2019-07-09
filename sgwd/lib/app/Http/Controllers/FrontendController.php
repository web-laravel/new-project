<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function getHome() {
        $data['prodlist'] = Product::orderBy('prod_id', 'desc')->paginate(8)->all();
        $data['catelist'] = Category::all();
        return view('frontend.product.product', $data);
    }

    public function getCategory($id) {
        $data['items'] = Product::where('cate_id',$id)->orderBy('prod_id','desc')->paginate(8);
        $data['cateName'] = Category::find($id);
        return view('frontend.category.category_detail',$data);
    }
}
