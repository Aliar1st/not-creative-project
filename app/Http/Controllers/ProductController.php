<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getProducts(){
        $user = auth()->user();
        return Product::getProducts($user->getAuthIdentifier());
    }

    function getProductInfo($id){
        return \App\Product::productInfo($id);
    }
}
