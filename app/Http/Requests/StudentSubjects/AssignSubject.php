<?php

namespace App\Http\Requests\StudentSubjects;

use Illuminate\Foundation\Http\FormRequest;
use  Illuminate\Validation\Rule;

class AssignSubject extends FormRequest
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
            'student_id' =>  Rule::unique('student_subjects')->where(function ($query) {
                        // Checking that Is Current Subject is Already Saved or not
                        $query->where(['subject_id' => $this->subject_id]);
                    }) ,
            'subject_id' => 'required',
            
        ];
    }

    public function messages()
{
    return [
        'student_id.unique' => 'Already Assigned!',
        'body.required'  => 'A message is required',
    ];
}
}
