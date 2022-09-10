<?php

namespace App\Http\Requests\Backend\Admin\Payment;

use Illuminate\Foundation\Http\FormRequest;

class StoreManualPaymentPostRequest extends FormRequest
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
            'user' => 'required',
            'transaction_type' => 'required',
            'amount' => 'required'
        ];
    }
}
