<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideogame extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {


        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            //
            'name'=>'required|min:5|max:20'

        ];
    }

    public function attributes(){
        return[
            'name'=> 'videogame name'
        ];
    }

    public function messages(){
        return[
            'name.required'=> 'El nombre no puede ser vacio'
        ];
    }
}

