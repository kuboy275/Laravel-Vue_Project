<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'fullname' => 'required|min:10',
            'address' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages(){
        return [
            'fullname.required' => "Please choose a name",
            'fullname.min' => "Fullname is too short",
            'address.required' => "Please provide a valid city.",
            'phone.required' => "Please provide a valid phone.",
        ];
    }
}
