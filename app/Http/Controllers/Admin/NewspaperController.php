<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Newspaper\StoreNewspaperRequest;
use App\Http\Requests\Newspaper\UpdateNewspaperRequest;
use App\Models\Admin;
use App\Models\Newspaper;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('list' , [
            'createLink' => route("admin:newspaper.create") ,
            'title' => 'News',
            'table' => 'newspaper',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Newspaper $newspaper)
    {
        return view('pages.news' , [
            'object' => $newspaper ,
            'edit' => false ,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Newspaper\StoreNewspaperRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreNewspaperRequest $request)
    {
        Newspaper::query()->create($request->all());
        return redirect()->route('admin:newspaper.index')->with('success' , 'News added successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newspaper  $newspaper
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Newspaper $newspaper)
    {
        return view('pages.news' , [
            'object' => $newspaper ,
            'edit' => true ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Newspaper\UpdateNewspaperRequest  $request
     * @param  \App\Models\Newspaper  $newspaper
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateNewspaperRequest $request, Newspaper $newspaper)
    {
        $newspaper->update($request->all());
        return redirect()->route('admin:newspaper.index')->with('success' , 'News updated successfully.');
    }

}
