<?php

namespace App\Http\Controllers;

use App\Models\Admin\Coupon;
use App\Models\Admin\CouponTranslation;
use App\Models\Admin\Product;
use Auth;
use Cart;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function AddToCart($id)
    {
        $product = Product::find($id);
        $price_en = $product->translate('en')->price;
        $discount_en = $product->translate('en')->discount;
        $total_en = $product->translate('en')->price * ($product->translate('en')->discount / 100);

        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => ($discount_en == null ? $price_en : $total_en),
            'weight' => 1,
            'options' => [
                'image' => $product->image_one,
                'color' => '',
                'size' => '',
            ]
        ];
        Cart::add($data);
        return \Response::json(['success' => 'Product Added To Cart']);
    }

    public function showCart()
    {
        $cartProducts = Cart::content();
        if (count($cartProducts) > 0)
            return view('cart', compact('cartProducts'));
        else
            session()->flash('info', __('please add to cart to view this page'));
        return redirect()->back();
    }

    public function check()
    {
//  Cart::destroy();
        return response()->json(Cart::total());
    }

    public function deleteCart($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success', __('product deleted from cart deleted'));
        return redirect()->back();
    }

    public function updateCart(Request $request)
    {

        $rowId = $request->rowId;
        Cart::update($rowId, $request->qty);
        session()->flash('success', __('product updated in cart  successfully'));
        return redirect()->back();
    }

    //
    public function UserCheckOut()
    {
        // check if the user is logged in or not
        if (Auth::check()) {
            $cartProducts = Cart::content();
            return view('checkout', compact('cartProducts'));
        } else {
            return redirect()->route('login');
        }
    }

    public function wishList()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $data = Product::whereIn('products.id', function ($q) use ($userId) {
                $q->select('wishlists.product_id');
                $q->from('wishlists');
                $q->whereRaw("wishlists.user_id={$userId}");
            })->get();
            return view('wishlist', compact('data'));
        } else {
            return redirect()->route('login');
        }
    }

    public function coupon(Request $request)
    {
        // coupon request
        $coupon = $request->coupon;

        $coupon_tr = CouponTranslation::where('coupon', $coupon)->first();
        if ($coupon_tr) {
            $real = Coupon::find($coupon_tr->coupon_id);
            $final_coupon_name = $real->coupon;
            $final_coupon_discount = $real->translate('en')->discount;
            if ($final_coupon_name) {
                Session::put('coupon', [
                    'name' => $real->coupon,
                    'discount' => $real->translate('en')->discount,
                    'balance' => Cart::Subtotal() - $real->translate('en')->discount
                ]);
            }
            session()->flash('success', __('Coupon Applied'));
            return redirect()->back();
        } else {
            session()->flash('error', __('Coupon Not Applied.'));
            return redirect()->back();
        }
    }

    public function remove()
    {
        Session::forget('coupon');
        session()->flash('success', __('Coupon Removed'));
        return redirect()->back();
    }

    public function paymentPage()
    {
        $cart = Cart::content();
        // dd($cart);
        return view('payment', compact('cart'));
    }

}
