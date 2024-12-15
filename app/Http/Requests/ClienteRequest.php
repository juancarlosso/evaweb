<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
     	'rfc' => '-RFC-',
		'razon_social' => '-Razon Social-',
		'alias' => '-Alias-',
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
                'rfc' => 'required|unique:clientes,rfc',
                'razon_social' => 'required',
                'alias' => 'required',
            ];
         }
         else{
            return [
				'rfc' => 'unique:clientes,rfc,' .$this->cliente,
                'razon_social' => 'required',
                'alias' => 'required',
            ];
        }
    }
}
