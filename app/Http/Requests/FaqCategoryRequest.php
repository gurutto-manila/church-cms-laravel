<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\FaqCategory;

class FaqCategoryRequest extends FormRequest
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
        Validator::extend('check_name',function($attribute,$value,$parameters,$validator)
        {
            return preg_match('/^[A-Za-z0-9_~\-!@#\$%\^&*.,:"?(\)\s]+$/', request('name'));
        });
        
        Validator::extend('check_name_exist', function ($attribute, $value, $parameters, $validator) 
        {   
            $category = FaqCategory::where([['church_id',Auth::user()->church_id],['status',1]])->where('name','LIKE',request('name'))->first();

            if($category != null)
            {
                return false;
            }
            return true;  
        });

        return [
            //
            'name'  =>  'required|max:30|check_name|check_name_exist',
        ];
    }

    public function messages()
    {
        return[
            'name.required'         =>  'Category Name Is Required',
            'name:max'              =>  'Category Name Cannot Be More Than 30 Characters',
            'name.check_name'       =>  'Enter Valid Category Name',
            'name.check_name_exist' =>  'Category Name Already Exists',
        ];
    }
}