<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrayerAudioRequest extends FormRequest
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
        $rules = [
            //
            'select_audio'    =>  'required',
        ];
        if(request('select_audio') == 'attachaudio')
        {
            $rules['audio'] = 'required|mimes:mp3';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            //
            'select_audio.required' =>  'Audio Type Is Required',

            'audio.required'        =>  'Audio File Is Required',
            'audio.mimes'           =>  'Audio File Should Be .mp3',
        ];
    }
}