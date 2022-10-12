<?php

namespace App\Http\Requests;

use App\Enums\Gender;
use App\Enums\JobType;
use App\Models\City;
use App\Models\Prefecture;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
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
        $data = $this->all();

        return [
            'show_name' => 'required|max:255',
            'name' => 'required|max:255',
            'self_introduction' => 'nullable|max:1000',
            'address_building' => 'nullable|max:255',
            'prefecture_id' => [
                'nullable',
                Rule::in(Prefecture::latest()->pluck('id')),
            ],
            'city_id' => [
                'nullable',
                Rule::in(City::latest()->where('prefecture_id', $data['prefecture_id'])->pluck('id')),
            ],
        ];
    }
}
