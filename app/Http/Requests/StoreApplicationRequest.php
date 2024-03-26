<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
            'lastname' => 'required|max:100',
            'firstname' => 'required|max:100',
            'jshshir' => 'required|max:100|unique:applications,jshshir',
            'phone' => 'required|max:100|unique:applications,phone',
            'region_id' => 'required|max:100',
            'district_id' => 'required|max:100',
            'quarter_id' => 'required|max:100',
            'street' => 'required|max:100',
            'privilege' => 'required|max:100',
            'fakultet_id' => 'required|max:100',
            'group_id' => 'required|max:100',
            'kurs' => 'required|max:100',
            'privilege_file' => 'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048',

           
            


          
        ];
    }

    public function messages()
    {
        return [
         
            'lastname.required' => 'lastname Bos bolmaw kerek!',
            'firstname.required' =>'firstname Bos bolmaw kerek!',
             'jshshir.required' => 'jshshir Bos bolmaw kerek!',
             
               'phone.required' => 'Bos bolmaw kerek  !',
            'region_id.required' =>'Bos bolmaw kerek!',
          'district_id.required' =>'Bos bolmaw kerek!',
           'quarter_id.required' =>'Bos bolmaw kerek!',
              'street.required' => 'Bos bolmaw kerek!',
           'privilege.required' => 'Bos bolmaw kerek!',
         'fakultet_id.required' => 'Bos bolmaw kerek!',
            'group_id.required' => 'Bos bolmaw kerek!',
                'kurs.required' => 'Bos bolmaw kerek!',
      'privilege_file.mimes' => 'Ruxsat etilgen fayllar: png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:2048KB!',
      'privilege_file.required' => 'Bos bolmaw kerek!',
         
        ];
    }
}
