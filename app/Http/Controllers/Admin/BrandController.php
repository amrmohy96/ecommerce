<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateBrand;
use App\Models\Admin\Brand;
use Storage;

class BrandController extends Controller
{
    private $repo;

    public function __construct(Brand $brand)
    {
        $this->repo = $brand;
    }

    public function index()
    {
        $brands = $this->repo->all();
        return view('admin.brands.index', compact('brands'));
    }


    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(StoreUpdateBrand $request)
    {
        $data = $request->all();
        if ($request->hasFile('logo') || $request->logo->isValid()) {
            $data['logo'] = $request->logo->store("Brands");
        }
        $this->repo->create($data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('brands.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $brand = $this->repo->find($id);
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(StoreUpdateBrand $request, $id)
    {
        $brand = $this->repo->find($id);
        $data = $request->all();
        if ($request->hasFile('logo')) {
            // delete the old image
            if (Storage::exists($brand->logo))
                Storage::delete($brand->logo);
            $data['logo'] = $request->logo->store("Brands");
        }
        $brand->update($data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('brands.index');
    }

    public function destroy($id)
    {
        $brand = $this->repo->find($id);
        if (!$brand)
            return redirect()->back();
        if (Storage::exists($brand->logo))
            Storage::delete($brand->logo);
        $brand->delete();
        session()->flash('info', __('site.deleted_successfully'));
        return redirect()->route('brands.index');
    }
}
