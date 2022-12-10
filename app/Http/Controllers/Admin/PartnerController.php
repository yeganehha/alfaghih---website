<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partner\StorePartnerRequest;
use App\Http\Requests\Partner\UpdatePartnerRequest;
use App\Models\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('list' , [
            'createLink' => route("admin:partners.create") ,
            'title' => 'Client',
            'table' => 'client',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Partner $partner)
    {
        return view('pages.partner' , [
            'object' => $partner ,
            'edit' => false ,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Partner\StorePartnerRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePartnerRequest $request)
    {
        Partner::query()->create($request->all());
        return redirect()->route('admin:partners.index')->with('success' , 'Partner added successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Partner $partner)
    {
        return view('pages.partner' , [
            'object' => $partner ,
            'edit' => true ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Partner\UpdatePartnerRequest  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        $partner->update($request->all());
        return redirect()->route('admin:partners.index')->with('success' , 'Partner updated successfully.');
    }

}
