<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::select('products.id', 'products.name','products.slug','products.image','products.description','products.price','products.stock','categories.name as nama_kategori')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->orderBy('products.created_at', 'DESC')
        ->get();

        //buat response terlebih dahulu
        $res= [
            'success' => true,
            'massage' => 'List Product',
            'data' => $product,
        ];

        return response()->json($res, 200);
    }

    public function show($id)
    {
        $product =  Product::with('category')->find($id);

        if (! $product) {
            $res =[
                'success' => false,
                'massage' => 'Product Not Fount',
            ];
            return response()->json($res,404);
        }

         $res =[
                'success' => true,
                'massage' => 'Product Detail',
                'data' => $product,
            ];
            return response()->json($res,200);
    }
}
