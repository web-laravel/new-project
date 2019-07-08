<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function getUser() {
        $data['userlist'] = DB::table('sgwd_role_user')
            ->join('sgwd_categories', 'sgwd_products.cate_id', '=', 'sgwd_categories.cate_id')
            ->orderBy('prod_id', 'desc')->get();
        return view('backend.user');
    }
}
