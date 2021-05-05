<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::Paginate(9);
        return response()->json([
            'status'=> 'success',
            'data'=> $products
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'data' => $product
        ]);
    }
    public function latest()
    {
        $products = Product::latest()->take(8)->get();
        return response()->json([
            'status'=> 'success',
            'data'=> $products
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->query('query');
        $products = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('price', 'like', '%' . $query . '%')
            ->paginate(12);


        return response()->json([
            'status'=> 'success',
            'data'=> $products 
        ]);
    }

}
