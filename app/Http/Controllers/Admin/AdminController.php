<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\Admin\UpdateAdminRequest;
use App\Models\Admin;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('list' , [
            'createLink' => route("admin:admins.create") ,
            'title' => 'Admin',
            'table' => 'admin',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(Admin $admin)
    {
        return view('pages.admin' , [
            'object' => $admin ,
            'edit' => false ,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAdminRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAdminRequest $request)
    {
        if ( $request->has('password'))
            $request->merge(['password' => bcrypt($request->password )] );
        Admin::query()->create($request->all());
        return redirect()->route('admin:admins.index')->with('success' , 'Admin added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Admin $admin
     * @return Application|Factory|View
     */
    public function edit(Admin $admin)
    {
        return view('pages.admin' , [
            'object' => $admin ,
            'edit' => true ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAdminRequest $request
     * @param Admin $admin
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        if ( $request->has('password'))
            $request->merge(['password' => bcrypt($request->password )] );
        $admin->update($request->all());
        return redirect()->route('admin:admins.index')->with('success' , 'Admin updated successfully.');
    }
}
