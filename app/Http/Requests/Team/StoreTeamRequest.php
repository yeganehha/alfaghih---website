<?php

namespace App\Http\Requests\Team;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
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
            'name.*' => ['required' , 'string'],
            'description.*' => ['required' , 'string'],
            'position.*' => ['required' , 'string'],
            'image' => ['required' , 'url'],
            'order' => ['nullable' , 'numeric']
        ];
    }
}
