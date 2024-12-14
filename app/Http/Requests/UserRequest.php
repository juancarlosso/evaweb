<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * Determine the name of the attributes for the request.
     *
     * @return array
     */
    public function attributes(){
     return [
      'email' => '-Email-',
      'name' => '-Nombre-',
      'perfil' => '-Perfil-',
      'status' => '-Estado-',
     ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if($this->getMethod() == "POST") {
            return [
                'email' => 'required|email|unique:users,email|max:255',
                'name' => 'required|max:255',
                'perfil' => 'required',
                'status' => 'required',
            ];
         }
         else{
            return [
                'name' => 'required|max:255',
                'perfil' => 'required',
                'status' => 'required',
                'email' => 'unique:users,email,' .$this->usuario,
            ];
        }
    }
}
