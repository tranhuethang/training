<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAddTimesheetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'day' => 'required',
            'work' => 'required',
            'difficult' => 'required',
            'plannd' => 'required'
        ];
    }

    public function message()
    {
       return [
           'day.required' => 'Please enter your day',
           'work.required' => 'Please enter your work',
           'difficult.required' => 'Please enter your difficult',
           'plannd.required' => 'Please enter your plan'
       ];
    }
}
