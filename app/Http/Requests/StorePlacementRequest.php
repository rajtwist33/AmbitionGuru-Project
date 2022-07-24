<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlacementRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'name'=> 'required|unique:courses,name|min:3|max:255',
            'designation'=> 'required|unique:courses,name|min:3|max:255',
            'company'=> 'required|unique:courses,name|min:3|max:255',
            'photo'=> 'required|image|max:2048',
            'message'=> 'required',
//            'added_by'=> 'required',
//            'extra'=> 'required'
        ];
    }
}
