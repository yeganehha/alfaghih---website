<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
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
            'name.en' => 'required',
            'name.ar' => 'required',
            'description.en' => 'required',
            'description.ar' => 'required',
            'keyword.en' => 'required',
            'keyword.ar' => 'required',
            'logo.light' => 'required|url',
            'logo.dark' => 'required|url',
            'logo.icon' => 'nullable|url',
            'social.youtube' => 'nullable|url',
            'social.linkedIn' => 'nullable|url',
            'social.twitter' => 'nullable|url',
            'social.instagram' => 'nullable|url',
            'social.facebook' => 'nullable|url',
        ];
    }
}
