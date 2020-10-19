<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Hash;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{

    public function index()
    {
        // get users
        $users = Admin::where('type', 2)->get();
        return view('admin.roles.index', compact('users'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }


    public function store(Request $request)
    {
        $data = $request->except('password');
        $data['password'] = Hash::make($request->password);
        $data['type'] = 2;
        Admin::create($data);
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('users.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = Admin::where('type', 2)->where('id', $id)->first();
        if (!$user)
            return redirect()->back();
        return view('admin.roles.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = Admin::where('type', 2)->where('id', $id)->first();
        $data = $request->except('password');
        $data['password'] = Hash::make($request->password);
        $data['type'] = 2;
        $user->update($data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('users.index');
    }


    public function destroy($id)
    {
        $user = Admin::where('type', 2)->where('id', $id)->first();
        if (!$user)
            return redirect()->back();
        $user->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('users.index');
    }
}
