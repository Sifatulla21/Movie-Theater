<?php

namespace App\Http\Requests\Backend\User\Job;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMyJobProofStatus extends FormRequest
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
            'rating' => 'required',
            'satisfied' => 'required',
            'unsatisfied_reason' => 'required_if:satisfied,0',
            'tips' => 'required_if:satisfied,1'
        ];
    }
}
