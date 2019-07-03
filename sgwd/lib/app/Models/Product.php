<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'sgwd_products';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
