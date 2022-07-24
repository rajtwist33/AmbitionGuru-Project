<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'name' => 'required|unique:courses,name,'.$this->course->id,
            'short_desc' => 'required',
            'cover_pic' => 'image|max:2048',
            'status' => 'nullable|numeric',
            'duration_hrs' => 'required',
            'shift' => 'required',
            'syllabus' => 'required',
        ];
    }
}
