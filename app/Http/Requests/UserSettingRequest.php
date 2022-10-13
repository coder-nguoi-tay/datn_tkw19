<?php

namespace App\Http\Requests;

use App\Enums\Gender;
use App\Enums\JobType;
use App\Enums\UserType;
use App\Models\City;
use App\Models\IndustryBroad;
use App\Models\JobBroad;
use App\Models\Prefecture;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserSettingRequest extends FormRequest
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
        $rule = [
            'job_type' => [
                'nullable',
                Rule::in(JobBroad::latest()->pluck('id')),
            ],
            'currently_member' => 'nullable|max:255',
            'university_of' => 'nullable|max:255',
            'born_in_college' => 'nullable|max:255',
            'born_in_middle_schoole' => 'nullable|max:255',
        ];
        $rule['prefecture_id'] = [
            'required',
            Rule::in(Prefecture::latest()->pluck('id')),
        ];
        $rule['city_id'] = [
            'required',
            Rule::in(City::latest()->where('prefecture_id', $data['prefecture_id'])->pluck('id')),
        ];

        if (Auth::guard('user')->user()->type == UserType::PERSON) {
            $rule['birthday'] = 'required|date_format:Y/m/d|before_or_equal:'.Carbon::now()->format('Y/m/d');
            $rule['gender'] = [
                'required',
                Rule::in(Gender::getValues()),
            ];
            $rule['industry_id'] = [
                'nullable',
                Rule::in(IndustryBroad::latest()->pluck('id')),
            ];
        } else {
            $rule['name'] = 'required|max:255';
            $rule['name_kana'] = [
                'required',
                'max:255',
                'regex:/^([ァ-ン]|ー)+$/mu',
            ];
            $rule['representative_name'] = 'required|max:255';
            $rule['address_building'] = 'required|max:255';
            $rule['industry_content'] = 'required|max:1000';
            $rule['industry_id'] = [
                'required',
                Rule::in(IndustryBroad::latest()->pluck('id')),
            ];
        }

        return $rule;
    }
}
