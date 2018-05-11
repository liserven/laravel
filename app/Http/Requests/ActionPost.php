<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActionPost extends FormRequest
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
            'ad_name'=> 'bail|required|max:6'
        ];
    }

    public function messages()
    {
        return [
            'ad_name.max'=> '名称不能太长'
        ];
    }
}
