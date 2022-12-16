<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Newspaper;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::query()->where('showHomepage' , true)
            ->where('is_active' , true)
            ->orderBy('order')->get();
        return view('welcome' , compact('services')) ;
    }

    public function services()
    {
        $services = Service::query()
            ->where('is_active' , true)
            ->orderBy('order')->get();
        return view('services' , compact('services')) ;
    }

    public function clients()
    {
        $clients = Client::query()
            ->where('is_active' , true)
            ->orderBy('order')->get();
        return view('clients' , compact('clients')) ;
    }

    public function partners()
    {
        $partners = Partner::query()
            ->where('is_active' , true)
            ->orderBy('order')->get();
        return view('partners' , compact('partners')) ;
    }

    public function newspaper(Request $request)
    {
        $newspapers = Newspaper::query()
            ->where('is_active' , true)
            ->when($request->tag , function ($query) use ($request) {
                $query->where('tags' , 'like' , '%'.$request->tag .'%');
            })
            ->orderByDesc('created_at')->paginate(6);
        return view('newspaper' , compact('newspapers')) ;
    }
    public function news(Newspaper $newspaper)
    {
        $resents = Newspaper::query()
            ->where('is_active' , true)
            ->orderByDesc('created_at')->limit(4)->get();
        $tags = explode(',',$newspaper->tags);
        return view('news' , compact('newspaper', 'resents' , 'tags')) ;
    }
}
