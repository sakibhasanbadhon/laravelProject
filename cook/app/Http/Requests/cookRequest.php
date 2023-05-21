<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cookRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $role=[
            'product_name' => ['required','string'],
            'product_des'  => ['required','string'],
            'image'        => ['nullable','image','mimes:png,jpeg,gif,jpg'],
            'category_id'  => ['required','integer'],
            'status'       => ['required','integer']

        ];

        return $role;
    }


    public function messages()
    {
        return[
            'product_des.required' => 'The product Description field is required.',
            'category_id.required' => 'The category name field is required.'
        ];
    }



}
