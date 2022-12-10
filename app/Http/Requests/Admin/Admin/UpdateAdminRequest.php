<?php

namespace App\Http\Requests\Admin\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
        $id = $this->route('admin') ? $this->route('admin')->id : null;
        return [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,'.$id,
            'username' => 'required|unique:admins,username,'.$id,
            'password' => 'nullable|confirmed|min:3',
        ];
    }
}
