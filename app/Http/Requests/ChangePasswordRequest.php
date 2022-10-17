<?php

namespace App\Http\Requests;

use App\Enums\DisplayInfoFlag;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\UserType;

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

        $rule = [
            'current_password' => 'required|max:16',
            'new_password' => 'required|different:current_password|max:16|min:8|regex:/^[A-Za-z0-9]*$/',
            'confirm_password' => 'required|max:16|same:new_password',
        ];

        return $rule;
    }
}