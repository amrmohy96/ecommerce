<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCategory;
use App\Models\Admin\Category;

class CategoryController extends Controller
{
    private $repo;

    public function __construct(Category $category)
    {
        $this->repo = $category;
    }

    public function index()
    {
        $categories = $this->repo->all();
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        //
    }

    public function store(StoreUpdateCategory $request)
    {
        $this->repo->create($request->all());
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = $this->repo->find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(StoreUpdateCategory $request, $id)
    {
        $category = $this->repo->find($id);
        $category->update($request->all());
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = $this->repo->find($id);
        if (!$category)
            return redirect()->back();
        $category->delete();
        session()->flash('info', __('site.deleted_successfully'));
        return redirect()->route('categories.index');
    }
}
