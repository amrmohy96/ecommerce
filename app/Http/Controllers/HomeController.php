<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function index()
    {
        $product = Product::find(1);
        $products = Product::all();
        return view('home', compact('product', 'products'));
    }

    public function show()
    {
        return redirect()->route('show');
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();

        session()->flash('success', __('user is out'));
        return redirect()->route('login');
    }
}
