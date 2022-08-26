<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $id = $this->user;

        return [
            'name' => 'required|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('user')->whereNull('deleted_at')->where(function ($q) use ($id) {
                    if ($id) {
                        $q->where('id', '<>', $id);
                    }
                }),
            ],
            'password' => [
                $id ? 'nullable' : 'required',
                'max:15',
                'min:8',
                'regex:/^[A-Za-z0-9]*$/',
                'same:password_confirmation',
            ],
            'password_confirmation' => $id ? 'nullable' : 'required',
        ];
    }
}
