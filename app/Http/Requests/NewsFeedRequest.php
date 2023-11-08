<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsFeedRequest extends FormRequest
{

    //Determine if the user is authorized to make this request.
    public function authorize()
    {
        return true;
    }


    //Get the validation rules that apply to the request.
    public function rules()
    {
        return [
            //
            'filename' => ['required','image|mimes:jpg,png,jpeg,gif,svg','max:2048'],
            'title'    => ['required'  , 'string' , 'min:20' , 'max:400'] ,
            'place'    => ['required' , 'string' , 'min:3' , 'max:20'] ,
            'newsDate' => ['required' ,'string'] ,
            'order'    => ['numeric' , 'integer' , 'min:1' , 'between:1,20']
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
