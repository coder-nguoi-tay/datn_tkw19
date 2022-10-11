<?php

namespace App\Http\Requests;

use App\Components\CommonComponent;
use App\Enums\EventFile;
use App\Models\Area;
use App\Models\Category;
use App\Models\Prefecture;
use App\Models\UserCredit;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
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
        Validator::extend('exist_file', function ($attribute, $value, $parameters, $validator) {
            return CommonComponent::fileExist($value);
        });
        Validator::extend('compareValueLeftThan', function ($attribute, $value, $parameters, $validator) {
            $data = $validator->getData();

            return $value <= $data[$parameters[0]];
        });
        $data = $this->all();
        // dd($data);
        $rule = [
            'name' => 'required|max:40',
            'detail' => 'required|max:2000',
            'event_files' => [
                'required',
                'array',
            ],
            'event_files.*.path' => [
                'required',
                'exist_file',
            ],
            'event_files.*.file_name' => [
                'required',
                'max:255',
            ],
            'event_files.*.type' => [
                'required',
                Rule::in([EventFile::ATTACHMENT, EventFile::IMAGE_SLIDE]),
            ],
            'target_gender' => [
                'required',
                'array',
                Rule::in([0, 1, 2, 3, 4]),
            ],
            'image_path' => [
                'required',
                'exist_file',
            ],
            'category_id' => [
                'required',
                Rule::in(Category::latest()->pluck('id')),
            ],
            'tags' => [
                'nullable',
                'array',
            ],
            'detail_location' => 'nullable|max:255',
            'pref_id' => [
                'nullable',
                'array',
                Rule::in(Prefecture::latest()->pluck('id')),
            ],
            'area_id' => [
                'nullable',
                'array',
                Rule::in(Area::latest()->pluck('id')),
            ],
            'target_gender' => [
                'required',
            ],
            'target_age_type' => [
                'required',
                Rule::in([0, 1]),
            ],
            'limit_number_of_participants_flag' => [
                'required',
                Rule::in([0, 1]),
            ],
            'entry_type' => [
                'required',
                Rule::in([0, 1]),
            ],
            'publish_flag' => [
                'required',
                Rule::in([0, 1]),
            ],
            'other_conditions' => 'nullable|max:2000',
            'participation_terms_type' => [
                'required',
                Rule::in([0, 1]),
            ],
            'special_notes' => 'nullable|max:2000',
            'address' => 'required|max:255',
            'company_name' => 'required|max:255',
            'meet_condition' => 'required|max:2000',
            'publish_start_datetime' => 'required|date_format:Y/m/d H:i',
            'day_end' => 'required|integer|between:1,7',
            // 'publish_end_datetime' => 'required|date_format:Y/m/d H:i|after_or_equal:publish_start_datetime',
            'event_rewards' => [
                'required',
                'array',
            ],
            'event_rewards.*.name' => 'required|max:255',
            'event_rewards.*.reward_amount' => 'required|integer|min:1',
            'event_rewards.*.quantity' => 'required|integer|min:1',
        ];
        if (isset($data['target_age_type']) && $data['target_age_type']) {
            $rule['target_age_from'] = [
                'nullable',
                'required_if:target_age_to,==,""',
                'integer',
                'between:1,100',
            ];
            $rule['target_age_to'] = 'nullable|integer|between:1,100';
            if (! isset($data['target_age_from']) || ! $data['target_age_from']) {
                $rule['target_age_to'] = 'required|integer|between:1,100';
            }
            if (! isset($data['target_age_to']) || ! $data['target_age_to']) {
                $rule['target_age_from'] = [
                    'required',
                    'integer',
                    'between:1,100',
                ];
            }
            if (isset($data['target_age_from']) && $data['target_age_from'] && isset($data['target_age_to']) && $data['target_age_to']) {
                $rule['target_age_from'][] = 'compareValueLeftThan:target_age_to';
            }
        }
        if (isset($data['limit_number_of_participants_flag']) && $data['limit_number_of_participants_flag']) {
            $rule['limit_number_of_participants'] = 'required|integer|min:1';
        }
        if (isset($data['entry_type']) && $data['entry_type']) {
            $rule['entry_fee'] = 'required|integer|min:1';
        }
        if (isset($data['event_credit']['user_credit_id'])) {
            if (! $data['event_credit']['user_credit_id']) {
                $rule['card_id'] = 'required';
            } else {
                $rule['event_credit.user_credit_id'] = [
                    'required',
                    Rule::in(UserCredit::where('user_id', Auth::guard('user')->user()->id)->pluck('id')),
                ];
            }
        }
        // dd($rule);
        return $rule;
    }
}
