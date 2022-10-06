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
use Illuminate\Validation\Rule;

class UserRegister extends FormRequest
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
        $id = $this->user;
        $passwordRules = (! empty($id) ? 'nullable' : 'required').'|max:16|min:8|regex:/^[A-Za-z0-9]*$/';
        $rule = [
            'show_name' => 'required|max:255',
            'type' => [
                'required',
                Rule::in(UserType::getValues()),
            ],
            'job_type' => [
                'nullable',
                Rule::in(JobBroad::latest()->pluck('id')),
            ],
            'currently_member' => 'nullable|max:255',
            'university_of' => 'nullable|max:255',
            'born_in_college' => 'nullable|max:255',
            'born_in_middle_schoole' => 'nullable|max:255',
        ];
        $rule['password'] = $passwordRules;
        $rule['phone_number'] = [
            'required',
            'max:50',
            'regex:/^(0(\d-\d{4}-\d{4}))|(0(\d{3}-\d{2}-\d{4}))|((070|080|090|050)(-\d{4}-\d{4}))|(0(\d{2}-\d{3}-\d{4}))|(0(\d{9,10}))+$/',
            Rule::unique('users')->whereNull('deleted_at')->where(function ($q) use ($id) {
                if ($id) {
                    $q->where('id', '<>', $id);
                }
            }),
        ];
        $rule['prefecture_id'] = [
            'required',
            Rule::in(Prefecture::latest()->pluck('id')),
        ];
        $rule['city_id'] = [
            'required',
            Rule::in(City::latest()->where('prefecture_id', $data['prefecture_id'])->pluck('id')),
        ];

        if ($data['type'] == UserType::PERSON) {
            $rule['birthday'] = 'required|date_format:Y/m/d|before_or_equal:'.Carbon::now()->format('Y/m/d');
            $rule['gender'] = [
                'required',
                Rule::in(Gender::getValues()),
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
