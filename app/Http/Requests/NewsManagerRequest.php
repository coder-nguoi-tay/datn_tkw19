<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsManagerRequest extends FormRequest
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
            'title' => 'required|max:255',
            'publish_start_datetime' => 'required|date_format:Y/m/d H:i',
            'publish_end_datetime' => 'required|date_format:Y/m/d H:i',
            'content' => 'required|max:20000',
            'new_file' => 'nullable|file',
        ];
    }
}
