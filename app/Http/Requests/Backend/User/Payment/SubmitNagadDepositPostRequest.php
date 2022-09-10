<?php

namespace App\Http\Requests\Backend\User\Payment;

use Illuminate\Foundation\Http\FormRequest;

class SubmitNagadDepositPostRequest extends FormRequest
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
            'sender_number' => 'required',
            'trx_id' => 'required',
            'dollar_amount' => 'required',
        ];
    }
}
