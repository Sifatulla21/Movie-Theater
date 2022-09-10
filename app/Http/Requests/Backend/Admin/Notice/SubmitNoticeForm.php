<?php

namespace App\Http\Requests\Backend\Admin\Notice;

use Illuminate\Foundation\Http\FormRequest;

class SubmitNoticeForm extends FormRequest
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
            'send_notice_to' => 'required',
            'user' => 'required_if:send_notice_to,2',
            'title' => 'required',
            'details' => 'required'
        ];
    }
}
