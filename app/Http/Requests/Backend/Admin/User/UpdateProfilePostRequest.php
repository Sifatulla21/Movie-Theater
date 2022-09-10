<?php

namespace App\Http\Requests\Backend\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfilePostRequest extends FormRequest
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
            'image' => 'nullable|image',
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
            'email' => [
                'required',
                Rule::unique('users', 'email')
                    ->where('deleted', 0)
                    ->whereNot('id', request()->segment(4))
            ],
        ];
    }
}
