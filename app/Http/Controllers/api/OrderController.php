<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return response()->json(Order::with(['product'])->get(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'fullname' => $request->fullname,
            'note'=> $request->note,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'quantity'=> $request->quantity,
            'address' => $request->address,
            'phone' =>$request->phone
        ];

        $order = Order::create($data);
        return response()->json([
            'status' => "success",
            'data' => $order,
            'message' => $order ? 'Order Created!' : 'Error Creating Order'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $order = Order::with(['product'])->where('user_id',$user_id)->get();
        return response()->json([
            'status' => 'success',
            'data' => $order
        ],200);
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
        $order = Order::findOrFail($id)->delete();
        return response()->json([
            'code' => 200,
            'message' => 'Delete Success!' 
        ]);

    }
}
