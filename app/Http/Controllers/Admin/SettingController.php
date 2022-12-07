<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSettingRequest;
use HackerESQ\Settings\Facades\Settings;
use Illuminate\Support\Arr;

class SettingController extends Controller
{

    public function index()
    {
        return view('pages.setting');
    }

    public function store(StoreSettingRequest $request)
    {
        Settings::force()->set(Arr::dot($request->except('_token')));
        return redirect()->route('admin:setting.index')->with('success' , 'Setting saved.');
    }
}
