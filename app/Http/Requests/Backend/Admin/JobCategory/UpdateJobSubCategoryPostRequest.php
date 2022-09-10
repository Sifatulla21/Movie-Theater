<?php

namespace App\Http\Requests\Backend\Admin\JobCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateJobSubCategoryPostRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('job_sub_categories', 'name')
                    ->where('job_category_id', request()->category)
                    ->where('deleted', 0)
                    ->whereNot('id', request()->id)
            ],
            'category' => 'required|exists:job_categories,id',
            'minimum_rate' => 'required'
        ];
    }
}
