<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InitPassChange extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required|min:8|max:15|regex:/^[A-Za-z0-9]*$/i',
            'password_confirmation' => 'required|same:password',
        ];
    }
}
