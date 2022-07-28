<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name"=> 'required|string|min:5|max:100',
            "id_number"=> 'required|unique:users_crud',
            "lastname"=> 'required|string|min:5|max:100',
            "country"=> 'required',
            "email"=> 'required|email|max:150|unique:users_crud',
            "direction"=> 'required|max:180',
            "phone"=> 'required|numeric',
            "category_id"=> 'required'
        ];
    }
}
