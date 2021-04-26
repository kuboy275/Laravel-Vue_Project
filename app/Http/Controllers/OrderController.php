<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Traits\DeleteModelTrait;



class OrderController extends Controller
{

    use DeleteModelTrait;

    private $order ;
    public function __construct(Order $order){
        $this->order = $order;
    }

    public function index()
    {
        $orders = Order::paginate(7);
        return view("admin.orders.index" , compact("orders"));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

    }

    public function deliverOrder(Order $order)
    {
            $order->is_delivered = true;
            $status = $order->save();

            return response()->json([
                'status'    => $status,
                'data'      => $order,
                'message'   => $status ? 'Order Delivered!' : 'Error Delivering Order'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return $this->deleteModelTrait($id,$this->order);
    }
}
