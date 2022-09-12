<?php

namespace App\Http\Requests;

use App\Enums\Gender;
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
        $rule['show_name'] = ['required', 'max:255'];
        $rule['gender'] = [
            'required',
            Rule::in(Gender::getValues()),
        ];
        $rule['birthday'] = 'required|date_format:Y/m/d|before_or_equal:' . Carbon::now()->format('Y/m/d');
        $rule['prefecture_id'] = [
            'required',
            Rule::in(Prefecture::latest()->pluck('id')),
        ];
        $rule['city_id'] = [
            'required',
            Rule::in(City::latest()->where('prefecture_id', $data['prefecture_id'])->pluck('id')),
        ];
        return $rule;
    }
}
