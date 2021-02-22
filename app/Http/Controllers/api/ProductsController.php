<?php

namespace App\Http\Controllers\api;

use App\Events\SearchEvent;
use App\Http\Controllers\Controller;
use App\Http\Resources\Products as ProductsResources;
use App\Http\Resources\ProductsCollection;
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
        $products = Product::get();
        return new ProductsCollection($products);
    }
    public function latest()
    {
        $products = Product::latest()->paginate(8);
        return new ProductsCollection($products);
    }

    public function search(Request $request)
    {
        $query = $request->query('query');
        $products = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('price', 'like', '%' . $query . '%')
            ->get();

        //broadcast search results with Pusher channels
        event(new SearchEvent($products));
        return new ProductsCollection($products);
        // return response()->json(['search' => $products] , 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ProductsResources(Product::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
