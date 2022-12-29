<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        return view('shop');
    }
    public function product()
    {
        return view('product-detail');
    }
}
