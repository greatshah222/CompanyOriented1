<?php

namespace App\Http\Controllers;

use App\Mail\OrderReady;
use App\Mail\OrderShipped;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function Orders($type = '')
    {
        if ($type == 'pending') {
            $orders = Order::where('ready', '0')->get();
        } elseif ($type == 'ready') {
            $orders = Order::where('ready', '1')->get();
        } else {
            $orders = Order::all();
        }

        return view('admin.orders', compact('orders'));
    }


    public function toggledeliver(Request $request,$orderId)
    {
        $order=Order::find($orderId);

        if($request->has('ready')){
            $time=Carbon::now()->addMinute(1);

            Mail::to($order->user)->later($time,new OrderReady($order));

            $order->ready=$request->ready;
        }else{
            $order->ready="0";
        }
        $order->save();

        return back();
    }
}
