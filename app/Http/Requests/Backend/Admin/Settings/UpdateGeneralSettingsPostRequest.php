<?php

namespace App\Http\Requests\Backend\Admin\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneralSettingsPostRequest extends FormRequest
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
            'job_approve_type' => 'required',
            'minimum_deposit' => 'required',
            'minimum_withdraw' => 'required',
            'pound_rate' => 'required',
            'job_posting_charge' => 'required',
            'min_spend_per_job' => 'required',
            'refer_commission_type' => 'required',
            'refer_commission_limit' => 'required',
            'refer_commission' => 'required_if:refer_commission_limit,2',
        ];
    }
}
