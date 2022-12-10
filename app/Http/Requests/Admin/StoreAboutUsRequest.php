<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutUsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'about_us.page.name.en' => 'required',
            'about_us.page.name.ar' => 'required',
            'about_us.page.description.en' => 'required',
            'about_us.page.description.ar' => 'required',
            'about_us.page.image' => 'required|url',
            'about_us.home.name.en' => 'required',
            'about_us.home.name.ar' => 'required',
            'about_us.home.description.en' => 'required',
            'about_us.home.description.ar' => 'required',
            'about_us.home.image' => 'required|url',
        ];
    }

    public function attributes()
    {
        return [
            'about_us.page.name.en' => 'Name (En) of About us page',
            'about_us.page.name.ar' => 'Name (Ar) of About us page',
            'about_us.page.description.en' => 'Description (En) of About us page',
            'about_us.page.description.ar' => 'Description (Ar) of About us page',
            'about_us.page.image' => 'Image of About us page',
            'about_us.home.name.en' => 'Name (En) of Home page',
            'about_us.home.name.ar' => 'Name (Ar) of Home page',
            'about_us.home.description.en' => 'Description (En) of Home page',
            'about_us.home.description.ar' => 'Description (Ar) of Home page',
            'about_us.home.image' => 'Image of Home page',
        ];
    }


}
