<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    static function productInfo($id){

        $product = Product::findOrFail($id);
        $parts = [];
        if(isset($product)){
            $parts = DB::table('parts')
                ->where('parent_product_id', $product->id)
                ->orderBy('number')
                ->get();
        }

        $result = [
            'product' => $product,
            'parts' => $parts
        ];

        return $result;

    }

    public static function getProducts($user_id)
    {
        $result = DB::table('products')
            ->join('person_products', 'person_products.product_id', '=', 'products.id')
            ->select('products.name', 'products.properties')
            ->where('user_id', $user_id)
            ->get();
        return $result;
    }

    function parts()
    {
        return $this->hasMany('parts');
    }
}
