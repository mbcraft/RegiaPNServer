<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class PlayerNotificationRequest extends Request
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
            "player_id" => "required|integer|exists:tab_players,id,deleted_at,NULL",
            "cliente_id" => "required|integer|exists:tab_players,cliente_id,deleted_at,NULL",
            "security_token" => "string|required|unique:tab_players,security_token",
            "message" => "string"
         ];
    }
}
