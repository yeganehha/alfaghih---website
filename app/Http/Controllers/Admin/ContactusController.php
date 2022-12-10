<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('list' , [
            'createLink' =>  null,
            'title' => 'Contact Us Message',
            'table' => 'contactus',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactus  $contactus
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Contactus $contactus)
    {
        $contactus->is_read = true ;
        $contactus->save();
        return view('pages.contactus' , compact('contactus'));
    }
}
