<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use App\Shipping;
use Auth;
use Cart;
use Illuminate\Http\Request;
use Session;

class PaymentController extends Controller
{
    public function paymentPageComplete(Request $request)
    {
        $data = $request->except('paymentMethod');
        if ($request->paymentMethod == 'stripe') {
            $data['paymentMethod'] = $request->paymentMethod;
            return view('payment.stripe', compact('data'));
        } else if ($request->paymentMethod == 'paypal') {
            $data['paymentMethod'] = $request->paymentMethod;
            return view('payment.paypal', compact(''));
        } else {
            echo "Cash On Delivery";
            return redirect()->back();
        }

    }

    public function charge(Request $request)
    {

        // Set your secret key. Remember to switch to your live secret key in production!
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey('sk_test_LDsh2GzIJvxp5yAa42v2xB2j00NN27ldiB');

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];
        $email = Auth::user()->email;
        $total = $request->total;

        $charge = \Stripe\Charge::create([
            'amount' => $total * 100,
            'currency' => 'usd',
            'description' => 'ecom charge',
            'source' => $token,
            'metadata' => ['order_id' => uniqid()],
        ]);

        $data = array();
        $data['user_id'] = Auth::id();
        $data['payment_id'] = $charge->payment_method;
        $data['paying_amount'] = $charge->amount;
        $data['balance_transaction'] = $charge->balance_transaction;
        $data['stripe_order_id'] = $charge->metadata->order_id;
        $data['shipping'] = $request->shipping;
        $data['vat'] = $request->vat;
        $data['total'] = $request->total;
        $data['payment_type'] = $request->paymentMethod;
        $data['status_code'] = mt_rand(100000, 999999);

        if (Session::has('coupon')) {
            $data['subtotal'] = Session::get('coupon')['balance'];
        } else {
            $data['subtotal'] = Cart::Subtotal();
        }
        $data['status'] = 0;
        $data['date'] = date('d-m-y');
        $data['month'] = date('F');
        $data['year'] = date('Y');

        $order = Order::create($data);
        $order_id = $order->id;


/// Insert Shipping Table

        $shipping = array();
        $shipping['order_id'] = $order_id;
        $shipping['ship_name'] = $request->ship_name;
        $shipping['ship_phone'] = $request->ship_phone;
        $shipping['ship_email'] = $request->ship_email;
        $shipping['ship_address'] = $request->ship_address;
        $shipping['ship_city'] = $request->ship_city;
        Shipping::create($shipping);

// Insert Order Details Table

        $content = Cart::content();
        $details = array();
        foreach ($content as $row) {
            $details['order_id'] = $order_id;
            $details['product_id'] = $row->id;
            $details['product_name'] = $row->name;
            $details['color'] = $row->options->color;
            $details['size'] = $row->options->size;
            $details['quantity'] = $row->qty;
            $details['single_price'] = $row->price;
            $details['total_price'] = $row->qty * $row->price;
            OrderDetails::create($details);

        }

        Cart::destroy();
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        session()->flash('success', __('Order Process Successfully Done'));
        return redirect()->route('home');
    }
}
