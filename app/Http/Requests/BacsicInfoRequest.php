<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BacsicInfoRequest extends FormRequest
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
            'title' => ['required'],
            'desc' => ['required'],
            'categories' => ['required'],
            'image' => ['mimes:jpeg,jpg,png,gif', 'max:10000']
        ];
    }
}
