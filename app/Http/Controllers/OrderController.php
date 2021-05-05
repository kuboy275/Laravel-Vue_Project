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
