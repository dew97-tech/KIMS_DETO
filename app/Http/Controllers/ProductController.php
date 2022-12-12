<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Index
    public function index() {
        return view('products.index');
    }
}
