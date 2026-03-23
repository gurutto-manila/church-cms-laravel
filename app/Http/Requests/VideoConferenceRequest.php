<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class VideoConferenceRequest extends FormRequest
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
        //dd(request());
        Validator::extend('check_name', function ($attribute, $value, $parameters, $validator) 
        {   
          //validation for tamil letters
            return preg_match('/\pL\pM*|./u',request('name'));  
        });

        Validator::extend('check_description', function ($attribute, $value, $parameters, $validator) 
        {   
          //validation for tamil letters
            return preg_match('/\pL\pM*|./u',request('description'));  
        });

        return [
            'name'          => 'required|min:2|max:30|unique:video_conferences|check_name',
            'description'   => 'required|check_description|max:255',
            'joining_date'  => 'required',
            'duration'      => 'required',
            'members.*'     => 'required'
        ];
    }

    public function messages()
    {
        return
        [    
            'name.required'                 =>  'Title Is Required', 
            'name.check_name'               =>  'Enter Valid Title',  
            'name.min'                      =>  'Title Should Be Atleast 2 Character', 
            'name.max'                      =>  'Title Cannot Be More Than 30 Characters', 
            'name.unique'                   =>  'Title Already Exists',

            'description.required'          =>  'Description Is Required',
            'description.check_description' =>  'Enter Valid Description', 
            'description.max:255'           =>  'Description May Not Be Greater Than 255 Characters', 

            'members.*.required'            =>  'Members Required'
        ];
    }
}