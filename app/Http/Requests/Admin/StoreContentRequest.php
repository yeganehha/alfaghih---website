<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreContentRequest extends FormRequest
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
            'content.short_title.en' => 'required',
            'content.short_title.ar' => 'required',
            'content.title.en' => 'required',
            'content.title.ar' => 'required',
            'content.image.homepage' => 'required|url',
            'content.image.about_us' => 'required|url',
            'content.image.services' => 'required|url',
            'content.image.our_team' => 'required|url',
            'content.image.client' => 'required|url',
            'content.image.partner' => 'required|url',
            'content.image.news' => 'required|url',
            'content.image.contact_us' => 'required|url',
            'content.image.consultation' => 'required|url',
        ];
    }

    public function attributes()
    {
        return [
            'content.short_title.en' => 'Short Title (En) of Home page',
            'content.short_title.ar' => 'Short Title (Ar) of Home page',
            'content.title.en' => 'Title (En) of Home page',
            'content.title.ar' => 'Title (Ar) of Home page',
            'content.image.homepage' => 'Home page Background Image',
            'content.image.about_us' => 'About us (Header Image)',
            'content.image.services' => 'Services (Header Image)',
            'content.image.our_team' => 'Our team (Header Image)',
            'content.image.client' => 'Client (Header Image)',
            'content.image.partner' => 'Partner (Header Image)',
            'content.image.news' => 'News (Header Image)',
            'content.image.contact_us' => 'Contact us (Header Image)',
            'content.image.consultation' => 'Consultation (Header Image)',
        ];
    }


}
