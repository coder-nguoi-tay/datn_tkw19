<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckLoginRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required|min:8|max:16'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Email không được để trống',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Password không đúng định dạng',
            'password.min'=>'Password dài từ 8 đến 16 ký tự',
            'password.max'=>'Password dài từ 8 đến 16 ký tự',
        ];
    }
}
