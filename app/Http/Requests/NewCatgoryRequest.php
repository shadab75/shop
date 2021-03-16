<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewCatgoryRequest extends FormRequest
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
            'title'=>['required','unique:categories,title'],
            'category_id'=>['nullable','exists:categories,category_id']

        ];
    }

    public function messages()
    {
        return [

            'title.required' => 'پر کردن فیلد عنوان اجباری میباشد',
        ];
    }

}
