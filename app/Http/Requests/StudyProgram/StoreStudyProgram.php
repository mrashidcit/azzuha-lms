<?php

namespace App\Http\Requests\StudyProgram;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudyProgram extends FormRequest
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
            'name' => 'required|unique:study_programs',
            'pre_requisite' => 'required',
            'description' => 'required',
            'duration' => 'required',
            // 'active' => 'required',
            
        ];
    }
}
