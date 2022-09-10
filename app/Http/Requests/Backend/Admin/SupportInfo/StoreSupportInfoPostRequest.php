<?php

namespace App\Http\Requests\Backend\Admin\SupportInfo;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupportInfoPostRequest extends FormRequest
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
            'text' => 'required',
            'link' => 'required'
        ];
    }
}
