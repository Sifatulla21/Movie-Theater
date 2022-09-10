<?php

namespace App\Http\Requests\Backend\User\Payment;

use App\Models\GeneralSettings;
use Illuminate\Foundation\Http\FormRequest;

class SubmitSquareDepositPostRequest extends FormRequest
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
            'amount' => 'required',
            'nonce' => 'required'
        ];
    }
}
