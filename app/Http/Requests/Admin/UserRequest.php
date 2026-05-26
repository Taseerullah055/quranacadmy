<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $data = [];
        if($this->isMethod('put')){

            $data =  [
                'id' => 'required',
                'username' => 'required',
                'email' => 'required|email',                
                'user_role' => 'required'
            ];

        }else{


            $data =  [
                'username' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',
                'user_role' => 'required'
            ];

        }

        return $data;

        
        
    }
}
