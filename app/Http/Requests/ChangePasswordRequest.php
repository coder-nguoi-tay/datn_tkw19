<?php

namespace App\Http\Requests;

use App\Enums\DisplayInfoFlag;
use App\Enums\UserType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChangePasswordRequest extends FormRequest
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
            'password_old' => 'required|max:16|min:8|regex:/^[A-Za-z0-9]*$/',
            'password_new' => 'required|max:16|min:8|regex:/^[A-Za-z0-9]*$/',
            'confirm_password' => 'required|same:password_new',
        ];
    }
}
