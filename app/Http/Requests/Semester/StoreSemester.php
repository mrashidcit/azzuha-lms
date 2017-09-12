<?php

namespace App\Http\Requests\Semester;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Validation\Validator; 
class StoreSemester extends FormRequest
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
        return [
            'name' => 'required',
            'year' => 'required',
            'status' => 'required',
        ];
    }

    public function withValidator($validator){
        
        if($validator->fails()){
            $validator->errors()
                ->add('checking', 'Testing Validator');  
        }
    }

    public function messages(){
        return [

        ];
    }
}
