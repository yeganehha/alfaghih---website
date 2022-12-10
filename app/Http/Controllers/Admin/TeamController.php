<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Team\StoreTeamRequest;
use App\Http\Requests\Team\UpdateTeamRequest;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('list' , [
            'createLink' => route("admin:teams.create") ,
            'title' => 'Team Member',
            'table' => 'team',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(Team $team)
    {
        return view('pages.team' , [
            'object' => $team ,
            'edit' => false ,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Team\StoreTeamRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreTeamRequest $request)
    {
        Team::query()->create($request->all());
        return redirect()->route('admin:teams.index')->with('success' , 'Team Member added successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Team $team)
    {
        return view('pages.team' , [
            'object' => $team ,
            'edit' => true ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Team\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $team->update($request->all());
        return redirect()->route('admin:teams.index')->with('success' , 'Team Member updated successfully.');
    }

}
