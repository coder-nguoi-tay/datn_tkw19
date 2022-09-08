<?php

namespace App\Http\Requests;

use App\Enums\DisplayInfoFlag;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ChangeNameRequest extends FormRequest
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
            'show_name' => 'required|max:255',
            'memo' => 'required|max:10000',
        ];
    }
}
