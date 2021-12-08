<?php

namespace App\Http\Request\Login\Partner;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'institution_name'=>'required|string',
            'director_name'=>'required|string',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'type'=>'required',
            'purpose'=>'required',
            'password'=>'required'
        ];
    }
}
