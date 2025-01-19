<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_by_resto(){
        return view('product.product_by_resto');
    }
}
