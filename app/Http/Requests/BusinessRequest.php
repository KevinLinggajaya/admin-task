<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BusinessRequest extends Request
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
        $id = $this->segment(2);
        $rules = [
          'name' => ['required', 'min:3'],
          'contact' => ['required', 'min:5'],
          'email' => 'unique:businesses,email,NULL,id,deleted_at,NULL',
          'line_1' => 'required',
          'city' => 'required',
          'state' => 'required',
          'postcode' => ['required','digits:5'],
        ];
        if($id){
            $rules['email']='unique:businesses,email,'.$id.',id,deleted_at,NULL';
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'line_1.required' => 'The address field is required.'
        ];
    }
}
