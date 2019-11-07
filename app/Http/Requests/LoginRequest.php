<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            //
            'tk'=>'required|email|min:5',
            'mk'=>'required'
        ];
    }

    public function message(){
        return [
            //
            'tk.required'=>'ko dc de trong tk',
            'tk.email'=>'tai khoan phai la email',
            'tk.min'=>'tai khoan khong duoc nho hon 5 ky tu',
            'mk.required'=>'mat khau khong duoc de trong',
        ];
    }
}
