<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGroupRequest extends FormRequest
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
            'name.required'=>'Group atı bos bolmaw kerek! ',
            'name.unique' =>'Group atı  qaytalanbaw kerek! ',
         
        ];
    }
}
