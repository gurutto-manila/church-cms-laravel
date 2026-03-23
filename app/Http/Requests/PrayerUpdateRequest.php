<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class PrayerUpdateRequest extends FormRequest
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
        Validator::extend('check_comments', function ($attribute, $value, $parameters, $validator) 
        {   
            return preg_match('/^[A-Za-z0-9_~\-!@#\$%\^&*.,:(\)\s]+$/',request('comments'));  
        });

        Validator::extend('check_publish_at', function ($attribute, $value, $parameters, $validator) 
        {   
            $today = date('Y-m-d H:i:s');
            $date = date('Y-m-d H:i:s',strtotime(request('publish_at')));
            if($date < $today)
            {
                return false;
            }
            return true;  
        });

        Validator::extend('check_expire_at', function ($attribute, $value, $parameters, $validator) 
        {     
            $date = date('Y-m-d H:i:s',strtotime(request('date')));
            $expire_date = date('Y-m-d H:i:s',strtotime(request('expire_at')));
            if($expire_date < $date)
            {
                return false;
            }
            return true;   
        });

        $rules = [
            'expire_at' => 'required|check_expire_at',
            'status'    => 'required',
        ];

        if(request('publish_later') == 'true')
        {
            $rules['publish_at'] = 'required|check_publish_at';
        }

        if( request('status') == 'cancel')
        {
            $rules['comments'] = 'required|check_comments|max:100';
        }

        return $rules;
    }

    public function messages()
    {
        return[
            'status.required'               => 'Status Is Required',

            'comments.required'             => 'Comments Required',
            'comments.check_comments'       => 'Enter Valid Comments',
            'comments.max:30'               => 'Comments may not be greater than 100 characters.',

            'expire_at.required'            => 'Expire At Is Required',
            'expire_at.check_expire_at'     => 'Expire At Should Be Greater Than Prayer Date',
            
            'publish_at.required'           => 'Publish At Is Required',
            'publish_at.check_publish_at'   => 'Publish At Should Be Greater Than Today',
        ];
    }
}