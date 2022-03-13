<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCont extends Controller
{
    public function fe_product()
    {
        return view('product');
    }
}
