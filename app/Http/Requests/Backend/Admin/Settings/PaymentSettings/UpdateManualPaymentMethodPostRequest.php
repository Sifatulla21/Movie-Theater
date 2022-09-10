<?php

namespace App\Http\Requests\Backend\Admin\Settings\PaymentSettings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateManualPaymentMethodPostRequest extends FormRequest
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
            'name' => 'required',
            'logo' => 'nullable',
            'currency' => 'required',
            'dollar_rate' => 'required',
            'min_deposit' => 'required',
            'min_withdraw' => 'required',
        ];
    }
}
