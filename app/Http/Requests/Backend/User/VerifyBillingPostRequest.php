<?php

namespace App\Http\Requests\Backend\User;

use Illuminate\Foundation\Http\FormRequest;

class VerifyBillingPostRequest extends FormRequest
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
            'card_type' => 'required',
            'full_name' => 'required',
            'card_number' => 'required',
            'card_front_image' => 'required|image|file|max:10240',
            'card_back_image' => 'required|image|file|max:10240',
            'your_image' => 'required|image|file|max:10240',
        ];
    }
}
