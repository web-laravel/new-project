<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function getCategory() {
        $data['catelist'] = Category::all();
        return view('backend.category.category', $data);
    }

    public function postCategory(AddCategoryRequest $request) {
        $category = new Category();
        $category->cate_name = $request->name;
        $category->save();
        return back();
    }

    public function getEditCategory($id) {
        $data['cate'] = Category::find($id);
        return view('backend.category.editcategory', $data);
    }

    public function postEditCategory(EditCategoryRequest $request, $id) {
        $category = Category::find($id);
        $category->cate_name = $request->name;
        $category->save();
        return redirect()->intended('admin/category');
    }

    public function getDeleteCategory($id) {
        Category::destroy($id);
        return back();
    }
}
