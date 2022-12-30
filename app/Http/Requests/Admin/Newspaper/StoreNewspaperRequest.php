<?php

namespace App\Http\Requests\Admin\Newspaper;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewspaperRequest extends FormRequest
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
            'name.*' => [ 'required' , 'max:255'],
            'image' => [ 'required', 'max:255'],
            'content_ar' => [ 'required'],
            'content_en' => [ 'required'],
            'truncate.*' => ['required' , 'max:255'],
            'tags' => ['array' , 'nullable'],
        ];
    }
}
