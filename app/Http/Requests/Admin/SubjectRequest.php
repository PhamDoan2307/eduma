<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'name' => 'required|min:5',
            'price' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên khóa học.',
            'name.min' => 'Tên khóa học có tối thiểu 5 ký tự.',
            'price.required' => 'Vui lòng nhập giá.',
            'price.numeric' => 'Giá tiền phải là số.'
        ];
    }
}
