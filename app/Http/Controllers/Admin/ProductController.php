<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Subcategory;
use Illuminate\Http\Request;
use Image;
use LaravelLocalization;
use Storage;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::with('category')->with('brand')->get();
        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
//        $subcategories= SubCategory::all();
        return view('admin.products.create', compact('categories', 'brands'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('image_one') || $request->hasFile('image_two') || $request->hasFile('image_three')) {
            Image::make($request->image_one)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('storage/products/' . $request->image_one->hashName()));

            Image::make($request->image_two)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('storage/products/' . $request->image_two->hashName()));

            Image::make($request->image_three)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('storage/products/' . $request->image_three->hashName()));
            $data['image_one'] = $request->image_one->hashName();
            $data['image_two'] = $request->image_two->hashName();
            $data['image_three'] = $request->image_three->hashName();
        }
        Product::create($data); 
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('products.index');
    }


    public function show($id)
    {
        $data = Product::with('category')
            ->with('subcategory')
            ->with('brand')
            ->where('id', $id)->first();
        $product = $data;
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
            $en_total_price = $float_price-($float_price * $float_discount / 100);
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
        } else {
            $total_price = (float)$product->price -((float)$product->price * (float)$product->discount / 100);
            $format_price = number_format((float)$product->price, 2, ',', '.');
            $product['format_price'] = $format_price;
            $en_total_price = number_format($total_price, 2, ',', '.');
            $product['total_price'] = $en_total_price;
            $colors = explode(',', $product->color);
            $product['colors'] = $colors;
        }
        $sizes = explode(',', $product->size);
        $product['sizes'] = $sizes;
        // dd($product);
        return view('admin.products.show', compact('product'));
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
        $product = Product::find($id);
        if (!$product)
            return redirect()->back();
        if (Storage::exists($product->image_one) && Storage::exists($product->image_two) && Storage::exists($product->image_three)) {
            Storage::delete($product->image_one);
            Storage::delete($product->image_two);
            Storage::delete($product->image_three);
        }
        $product->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('products.index');
    }

    public function getAllSubCategories($category_id)
    {

        $cat = Subcategory::where('category_id', $category_id)->get();
        return response()->json($cat);
    }

    public function activate($id)
    {
        $product = Product::find($id);
        $product->status = 1;
        $product->save();
        session()->flash('success', __('site.activated_successfully'));
        return redirect()->route('products.index');
    }

    public function deactivate($id)
    {
        $product = Product::find($id);
        $product->status = 0;
        $product->save();
        session()->flash('success', __('site.deactivated_successfully'));
        return redirect()->route('products.index');
    }
}