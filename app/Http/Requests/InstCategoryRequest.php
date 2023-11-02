<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstCategoryRequest extends FormRequest
{

    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            //
           'name' => ['required' , 'string' , 'min:5' , 'max:50']
        ];
    }

    //if there is an error with the validation display the error as a Json response.
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'message' => 'Validation Error',
            'errors' => $validator->errors(),
        ], 422));
    }
}
