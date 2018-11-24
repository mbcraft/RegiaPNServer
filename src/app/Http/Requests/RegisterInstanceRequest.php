<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class RegisterInstanceRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function validate()
    {
        throw new \Exception("Test validation error!");
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
            "registration_code" => "required|string|unique:tab_players,registration_code"
        ];
    }
}
