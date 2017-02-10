<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckUpdateRequest extends FormRequest
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
            //thiet lap cac rule cho form
            'name'        => 'required|max:100|regex:/^[A-z]+$/',
            'description' => 'required|max:300|regex:/^[A-z]+$/',
            'price'       => 'required|integer|digits_between:1,10',
            'photo'       => 'max:10240|image'

        ];
    }
}
