<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCertificateRequest extends FormRequest
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
            'course_id' => 'nullable',
            'reference_no' => 'required|alpha_num|unique:certificates,reference_no,'.$this->certificate->id,
            'name' => 'required|unique:certificates,name,'.$this->certificate->id,
            'duration' => 'required',
        ];
    }
}
