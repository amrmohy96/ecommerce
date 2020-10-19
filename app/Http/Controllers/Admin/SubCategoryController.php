<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index()
    {
        $subcategories = Subcategory::all();
        return view('admin.sub-categories.index', compact('subcategories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.sub-categories.create', compact('categories'));
    }


    public function store(Request $request)
    {
        Subcategory::create($request->all());
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('subcategories.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $subcategory = Subcategory::find($id);
        $categories = Category::all();
        return view('admin.sub-categories.edit', compact('subcategory', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('subcategories.index');
    }


    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('subcategories.index');
    }
}
