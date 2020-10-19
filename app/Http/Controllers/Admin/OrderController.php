<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetails;
use App\Shipping;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // get all orders that not active
    public function index()
    {
        $orders = Order::where('status', 0)->get();
        return view('admin.orders.pending', compact('orders'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $order = Order::where('id', $id)->first();
        $order['name'] = $order->user->name;
        $order['phone'] = $order->user->phone;

        $shipping = Shipping::where('order_id', $id)->first();
        $details = OrderDetails::with('Product')->where('order_id', $id)->first();
        return view('admin.orders.show', compact('order', 'shipping', 'details'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }


    public function accept($id)
    {
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        session()->flash('success', __('order accepted'));
        return redirect()->route('orders.accepted');
    }

    public function process($id)
    {
        $order = Order::find($id);
        $order->status = 2;
        $order->save();
        session()->flash('success', __('order in progress to Delivered'));
        return redirect()->route('orders.processed');
    }

    public function delivery($id)
    {
        $order = Order::find($id);
        $order->status = 3;
        $order->save();
        session()->flash('success', __('order Delivered'));
        return redirect()->route('orders.succeeded');
    }

    public function cancel($id)
    {
        $order = Order::find($id);
        $order->status = 4;
        $order->save();
        session()->flash('success', __('order cancel'));
        return redirect()->route('orders.canceled');
    }


    // accepted orders
    public function AcceptedOrders()
    {

        $orders = Order::where('status', 1)->get();
        return view('admin.orders.pending', compact('orders'));
    }

    // canceled orders
    public function CanceledOrders()
    {
        $orders = Order::where('status', 4)->get();
        return view('admin.orders.pending', compact('orders'));
    }

    // processed
    public function ProcessedOrders()
    {
        $orders = Order::where('status', 2)->get();
        return view('admin.orders.pending', compact('orders'));
    }

    // SucceededOrders
    public function SucceededOrders()
    {
        $orders = Order::where('status', 3)->get();
        return view('admin.orders.pending', compact('orders'));
    }


}
