<?php

namespace App\Http\Requests\Backend\Admin\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReferralSettingsPostRequest extends FormRequest
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
            'targeted_job_completed_bonus' => 'required',
            'first_deposit_commission' => 'required',
            'account_verify_bonus' => 'required',
            'microjob_work_refer_bonus' => 'required',
            'project_work_refer_bonus' => 'required',
            'contest_work_refer_bonus' => 'required'
        ];
    }
}
