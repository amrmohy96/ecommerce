<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Coupon;
use App\Notifications\NewCouponForUserNotify;
use App\User;
use Illuminate\Http\Request;
use Notification;

class CouponController extends Controller
{

    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.coupons.index', compact('coupons'));
    }


    public function create()
    {
        return view('admin.coupons.create');
    }

    public function store(Request $request)
    {

        $coupon = Coupon::create($request->all());
        if ($coupon) {
            // all users in app and send all notify that new coupon added
            $users = User::all();
            Notification::send($users, new NewCouponForUserNotify($coupon));
        }
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('coupons.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $coupon = Coupon::find($id);
        return view('admin.coupons.edit', compact('coupon'));
    }


    public function update(Request $request, $id)
    {
        $coupon = Coupon::find($id);
        $coupon->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('coupons.index');
    }

    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('coupons.index');
    }
}
