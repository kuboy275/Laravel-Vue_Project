<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:20|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name không được bỏ trống!',
            'name.min' => 'Name phải trên 2 ký tự!',
            'name.max' => 'Name quá dài (dưới 20 ký tự)!',
            'name.unique' => 'Name đã trùng, vui lòng nhập lại!',
            'email.required' => 'Email không được bỏ trống!',
            'email.unique' => 'Email đã trùng , vui lòng nhập lại!',
            'email.email' => 'Email không đúng định dạng!',
            'password.required' => 'Password không được bỏ trống!',
            'password.min' => 'Password phải trên 8 ký tự!',
            'password.regex' => "Password phải có ít nhất một chữ hoa, ít nhất một chữ thường và ít nhất một chữ số",
        ];
    }
}
