<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCategoryRequest extends FormRequest
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
            //
            'name' => 'unique:sgwd_categories,cate_name,'.$this->segment(4).',id'
        ];
    }

    public function messages() {
        return [
            'name.unique' => 'Tên danh mục đã bị trùng!!!'
        ];
    }
}
