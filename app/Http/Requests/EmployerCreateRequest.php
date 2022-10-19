<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerCreateRequest extends FormRequest
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
            'title' => 'required|max:255',
            'quatity' => 'required|max:255',
            'sex' => 'required|max:255',
            'describe' => 'required|max:255',
            'level_id' => 'required',
            'experience_id' => 'required',
            'wage_id' => 'required',
            'location_id' => 'required',
            'wk_form_id' => 'required',
            'benefit' => 'required|max:255',
            'profession_id' => 'required',
            'address' => 'required|max:255',
            'majors_id' => 'required',
            'time_work_id' => 'required',
            'candidate_requirements' => 'required|max:255',
            'skill_id' => 'required',
            'name' => 'required|max:255',
            'addressEmployer' => 'required|max:255',
            'logo' => 'required|max:255', //|mimes:jpeg,jpg,png,gif|max:100000
            'nameEmployer' => 'required|max:255',
            'phone' => 'required|max:10',
        ];
    }
}