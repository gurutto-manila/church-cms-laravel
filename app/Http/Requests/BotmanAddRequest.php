<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BotmanAddRequest extends FormRequest
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
            'tags'         => 'required',
            'description'    => 'required',
            'status' => 'required|in:active,in-active',
        ];
    }

    public function messages()
    {
        return[
            'to.required'       => 'Tags is required',
            'description.required'  => 'Description is required',
            'status.required' => 'Status is required',
            'status.in' => 'Status is invalid.'
        ];
    }
}