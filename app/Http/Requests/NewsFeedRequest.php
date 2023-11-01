<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsFeedRequest extends FormRequest
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
            'filename' => ['required','image|mimes:jpg,png,jpeg,gif,svg','max:2048'],
            'title'    => ['required'  , 'string' , 'min:20' , 'max:400'] ,
            'place'    => ['required' , 'string' , 'min:3' , 'max:20'] ,
            'newsDate' => ['required' ,'string'] ,
            'order'    => ['numeric' , 'integer' , 'min:1' , 'between:1,20']
        ];
    }
}
