<?php

namespace App\Http\Requests\Backend\Admin\CountryRegion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRegionPostRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('regions', 'name')
                    ->where('deleted', 0)
                    ->whereNot('id', request()->segment(4))
            ],
        ];
    }
}
