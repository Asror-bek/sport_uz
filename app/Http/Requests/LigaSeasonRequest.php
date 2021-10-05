<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LigaSeasonRequest extends FormRequest
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
            'result' => 'required|string',
            'team_name' => 'required|string',
            'game' => 'required|integer',
            'logo' => "required",
            'win' => 'required|integer',
            'draw' => 'required|integer',
            'defeat' => 'required|integer',
            'team_goals' => 'required|integer',
            'score' => 'required|integer',
            'footballer_name' => 'required|string',
            'footballer_goals' => 'required|integer',
            'penalti' => 'required|integer',
            'pas' => 'required|integer',
            'golpas' => 'required|integer',
        ];
    }
}
