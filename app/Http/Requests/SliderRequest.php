<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'name' => 'bail|required|unique:sliders|max:255|min:5',
            'description' =>'required|min:5|max:255',
            'image_path' =>'required',
        ];
    }
    public function messages() {

    return [

        'name.required' => 'Tên không được phép để trống',
        'name.unique' => 'Tên không được phép trùng',
        'name.max' => 'Tên không được phép quá 255 ký tự',
        'name.min' => 'Tên không được phép ít hơn 10 ký tự ',
        'description.required' => 'Mô tả không được phép bỏ trống',
        'description.max' => 'Mô tả không được phép quá 255 ký tự',
        'description.min' => 'Mô tả quá ngắn ',
        'image_path.required' => 'Ảnh không được phép bỏ trống',
    ];

    }
}
