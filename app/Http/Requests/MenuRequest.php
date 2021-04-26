<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'name' => 'bail|required|max:255|min:5',
        ];
    }
    public function messages() {

        return [
            'name.required' => 'Tên không được phép bỏ trống',
            'name.max' => ' Tên không được phép dài hơn 255 ký tự ',
            'name.min' => 'Tên phải dài hơn 5 ký tự',
        ];

    }
}
