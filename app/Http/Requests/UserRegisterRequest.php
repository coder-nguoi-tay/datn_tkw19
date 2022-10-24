<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRegisterRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if ($request->form == 1) {
            return [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'password' => 'required|min:8|max:16|regex:/^[A-Za-z0-9]*$/'
            ];
        }
        return [
            'fullName' => 'required|max:255',
            'phone' => 'required|integer',
            // 'sex' => 'required',
            'namecompany' => 'required|max:255',
            'workplace' => 'required|max:255',
            'address' => 'required|max:255',
            'namecompany' => 'required|max:255'
        ];
    }
}