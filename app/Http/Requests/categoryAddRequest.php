<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryAddRequest extends FormRequest
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
            'name' => 'bail|required|max:255|min:1',
        ];
    }
    public function messages() {

        return [
            
            'name.required' => 'Tên không được phép để trống',
            'name.max' => 'Tên tối đa 255 ký tự ',
            'name.min' => 'Tên phải trên 5 ký tự',
        ];

    }
}
