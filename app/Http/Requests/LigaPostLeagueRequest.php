<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LigaPostLeagueRequest extends FormRequest
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
            'team_name' => 'required|string',
            'games' => 'required',
            'score' => 'required|integer',
            'Liga_postId' => 'integer'
        ];
    }
}
