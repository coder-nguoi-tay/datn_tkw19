<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:8|max:16|regex:/^[A-Za-z0-9]*$/'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Password không được để trống',
            'password.min' => 'Password từ 8 đến 16 ký tự',
            'password.max' => 'Password từ 8 đến 16 ký tự',
            'password.regex' => 'Password không được có ký tự đặc biệt và là các ký tự không dấu',
        ];
    }
}
