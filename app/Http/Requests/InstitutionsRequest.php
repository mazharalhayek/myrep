<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            
            'name'     => ['required' , 'string' , 'min:15' , 'max:100'],
            'order'    => ['numeric' , 'integer' , 'min:1' , 'between:1,20']
        ];
    }
}
