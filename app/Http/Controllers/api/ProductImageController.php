<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductImage;
use App\Models\Product;


class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productImage = ProductImage::get();
        return response()->json([
            'status' => 'success',
            'data'=> $productImage
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($product_id){
        $images = ProductImage::where('product_id',$product_id)->get();
        return response()->json([
            'status' => 'success',
            'data'=> $images
        ]);

    }
}
