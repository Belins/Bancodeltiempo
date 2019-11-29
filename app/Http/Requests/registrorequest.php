<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registrorequest extends FormRequest
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
            'name'=>'required|min:2|max:15',
            'lname'=>'required|min:2|max:15',
            'passwd'=>'required|password',
            'email'=>'required|email',
            'phone'=>'required|min:9|max:9'
        ];
    }
}
