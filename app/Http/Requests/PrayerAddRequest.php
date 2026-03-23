<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class PrayerAddRequest extends FormRequest
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
        Validator::extend('check_date',function($attribute,$value,$parameters,$validator)
        { 
            $date = date('Y-m-d H:i:s',strtotime(request('date')));
            $today = date('Y-m-d H:i:s');
            if( $date > $today )
            {
                return true;
            }
                
            return false;
        });

        Validator::extend('alpha_spaces', function ($attribute, $value,$parameters,$validator) 
        {
            // This will only accept alpha and spaces. 
            // If you want to accept hyphens use: /^[\pL\s-]+$/u.
            return preg_match('/^[\pL\s]+$/u', request('title')); 
        });

        Validator::extend('check_title', function ($attribute, $value, $parameters, $validator) 
        {   
            //validation for tamil letters
            return preg_match('/\pL\pM*|./u',request('title'));  
        });

        Validator::extend('check_description', function ($attribute, $value, $parameters, $validator) 
        {   
            //validation for tamil letters
            return preg_match('/\pL\pM*|./u',request('description'));  
        });

        $rules = [
            //
            'title'         =>  'required|check_title|max:20',
            'description'   =>  'required|max:100|check_description',
            'date'          =>  'required|check_date',//|date_format:Y-m-d H:i:s
        ];

        if(request('image') != null)
        {
            $rules['image'] = 'nullable|mimes:png,jpg,jpeg|max:8092';
        }

        return $rules;
    }

    public function messages()
    {
        return[
            'title.required'                => 'Title Is Required',
            'title.check_title'             => 'Enter Valid Title',
            'title.max:20'                  => 'Title Should Not Be More Than 20 Words',

            'description.required'          => 'Description Is Required',
            'description.check_description' => 'Enter Valid Description',
            'description.max:100'           => 'Description May Not Be Greater Than 100 Characters.', 

            'date.required'                 => 'Date Is Required', 
            'date.date_format:Y-m-d H:i:s'  => 'Date Format Is Invalid', 
            'date.check_date'               => 'Date Should Be Greater Than Today', 

            'image.mimes'                   =>  'Image Should Be png,jpg,jpeg File',
            'image.max'                     =>  'Image File Cannot Be More Than 8MB Size',
        ];
    }
}