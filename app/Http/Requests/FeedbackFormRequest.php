<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackFormRequest extends FormRequest
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
            'forwhat'       => 'required',
            'name'          => 'required|min:3|max:30',
            'phone'         => 'required|regex: /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/',
            'email'         => 'required|regex: /\A[^@]+@([^@\.]+\.)+[^@\.]+\z/',
        ];

    }
}
