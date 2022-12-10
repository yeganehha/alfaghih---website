<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAboutUsRequest;
use App\Http\Requests\Admin\StoreContentRequest;
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

    public function aboutUs()
    {
        return view('pages.aboutUs');
    }

    public function storeAboutUs(StoreAboutUsRequest $request)
    {
        Settings::force()->set(Arr::dot($request->except('_token')));
        return redirect()->route('admin:about_us')->with('success' , 'Information saved.');
    }

    public function content()
    {
        return view('pages.content');
    }

    public function storeContent(StoreContentRequest $request)
    {
        Settings::force()->set(Arr::dot($request->except('_token')));
        return redirect()->route('admin:content')->with('success' , 'Content saved.');
    }

}
