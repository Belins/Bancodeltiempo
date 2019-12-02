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
            'lastname'=>'required|min:2|max:15',
            'email'=>'required|email',
            'password'=>'required|min:2|max:15',
            'phone'=>'required|min:8|max:10'
        ];
    }
}
