<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:products|max:255|min:3',
            'price' =>'required',
            'category_id' =>'required',
            'contents' =>'required',
            // 'tags[]' =>'required'
        ];
    }
    public function messages() {

    return [

        'name.required' => 'Tên không được phép để trống',
        'name.unique' => 'Tên không được phép trùng',
        'name.max' => 'Tên không được phép quá 255 ký tự',
        'name.min' => 'Tên không được phép ít hơn 10 ký tự ',
        'category_id.required' => 'Danh mục không được để trống',
        'contents.required' =>'Nội dung không được để trống ' ,
        'price.required' => 'Giá không được để trống ',
        // 'tags[].required' => 'Vui lòng nhập tag sản phẩm'
    ];

    }
}
