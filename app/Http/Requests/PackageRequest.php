<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
            'name' => 'required|max:255',
            'price' => 'required|integer',
            'describe' => 'required|max:255',
            'time_offer_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên gói cước không được để trống',
            'name.max' => 'Tên gói cước không được vượt quá 255 ký tự',
            'price.required' => 'Giá không được để trống',
            'price.integer' => 'Giá phải là số',
            'describe.required' => 'Mô tả không được để trống',
            'describe.max' => 'Mô tả không được quá 255 ký tự',
            'time_offer_id.required' => 'thời gian gói cước không được để trống',
        ];
    }
}
