<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductTag;


class ProductsTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsTag = ProductTag::get();
        return response()->json([
            'status' => 'success',
            'data'=>$productsTag
        ]);
    }
}
