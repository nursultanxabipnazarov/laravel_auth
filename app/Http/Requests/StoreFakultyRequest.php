<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFakultyRequest extends FormRequest
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
            'name' => 'required|max:100|unique:faculties,name',
          
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Fakultet atı bos bolmaw kerek! ',
            'name.unique' =>'Fakultet atı  qaytalanbaw kerek! ',
         
        ];
    }
}
