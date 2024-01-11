<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InternFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required min:8',
            'slug' =>'required min:8',
            'position'=>'required min:8',
            'address'=>'required min:4',
            'type' => 'required min:2',
            'lastdate' =>'required'
        ];
    }
}