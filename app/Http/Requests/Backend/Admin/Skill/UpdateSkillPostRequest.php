<?php

namespace App\Http\Requests\Backend\Admin\Skill;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSkillPostRequest extends FormRequest
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
            'skill' => [
                'required',
                Rule::unique('skills', 'skill')
                    ->where('deleted', 0)
                    ->whereNot('id', request()->id)
            ],
        ];
    }
}
