<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'bail|required|unique:posts|min:10|max:255',
            'body'  => 'bail|required|unique:posts|min:55',
            'img_path'  => 'required',
            'published_at' => 'required'
        ];
    }

    public function messages(){
        return [
            'title.required' => " Tiêu Đề không được phép để trống ",
            'title.min' => " Tiêu Đề phải trên 10 ký tự ",
            'title.max' => " Tiêu Đề quá dài trên 255 ký tự ",
            'body.required' => " Nội dung không được phép để trống ",
            'body.min' => " Nội dung phải trên 55 ký tự ",
            'img_path.required' => ' Vui lòng chọn thêm ảnh minh họa ',
            'published_at.required' => "Vui lòng thêm chi tiết ngày giờ"
        ];
    }
}
