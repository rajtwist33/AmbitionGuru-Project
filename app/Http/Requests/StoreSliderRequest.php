<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
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
            'image'=>'required|image',
            'status'=>'nullable|numeric',
            'from_date'=>'required|date|after:yesterday',
            'to_date'=>'required|date|after_or_equal:from_date'
        ];
    }
}
