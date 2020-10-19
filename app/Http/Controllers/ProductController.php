<?php

namespace App\Http\Controllers;

use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Cart;
use Illuminate\Http\Request;
use LaravelLocalization;

class ProductController extends Controller
{
    public function productDetails($id, $productName)
    {
        $product = Product::with('category')
            ->with('subcategory')
            ->with('brand')
            ->where('id', $id)->first();

        function arabic_w2e($str)
        {
            $arabic_eastern = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
            $arabic_western = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
            return str_replace($arabic_western, $arabic_eastern, $str);
        }

        function arabic_e2w($str)
        {
            $arabic_eastern = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
            $arabic_western = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
            return str_replace($arabic_eastern, $arabic_western, $str);
        }

        if (LaravelLocalization::getCurrentLocale() == 'ar') {
            $ar_price = arabic_e2w($product->price);
            $ar_discount = arabic_e2w($product->discount);
            $float_price = (float)$ar_price;
            $float_discount = (float)$ar_discount;
            $en_total_price = $float_price * $float_discount / 100;
            //
            $format = number_format($en_total_price, 2, ',', '.');
            $ar_total_price = arabic_w2e($format);

            // total price without discount
            $total = number_format($float_price, 2, ',', '.');
            $ar_format_price = arabic_w2e($total);
            $product['total_price'] = $ar_total_price;
            $product['format_price'] = $ar_format_price;
            $colors = explode(',', strtolower($product->translate('en')->color));
            $product['colors'] = $colors;
            $colors = explode(',', $product->color);
            $product['colors_ar_show'] = $colors;
            // $sizes = explode(',',strtolower($product->translate('en')->size));
            //$product['sizes'] = $sizes;

            $sizes = explode(',', $product->size);
            $product['sizes'] = $sizes;
        } else {
            $total_price = (float)$product->price * (float)$product->discount / 100;
            $format_price = number_format((float)$product->price, 2, ',', '.');
            $product['format_price'] = $format_price;
            $en_total_price = number_format($total_price, 2, ',', '.');
            $product['total_price'] = $en_total_price;
            $colors = explode(',', $product->color);
            $product['colors'] = $colors;
            $sizes = explode(',', $product->size);
            $product['sizes'] = $sizes;
        }

        return view('details', compact('product'));
    }

    public function AddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $price_en = $product->translate('en')->price;
        $discount_en = $product->translate('en')->discount;
        $total_en = $product->translate('en')->price * ($product->translate('en')->discount / 100);

        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $request->qyt,
            'price' => ($discount_en == null ? $price_en : $total_en),
            'weight' => 1,
            'options' => [
                'image' => $product->image_one,
                'color' => $request->color,
                'size' => $request->size,
            ]
        ];
        Cart::add($data);
        session()->flash('success', __('product added to cart'));
        return redirect()->route('home');
    }

    public function products($id)
    {
        $products = Product::where('subcategory_id', $id)->paginate(10);
        $categories = Category::all();
        $brands = Brand::all();
        return view('shops', compact('products', 'categories', 'brands'));
    }

}
