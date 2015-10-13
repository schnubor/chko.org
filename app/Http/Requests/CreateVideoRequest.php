<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateVideoRequest extends Request
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
            'youtube_id' => 'required|string|size:11',
            'project_id' => 'required'
        ];
    }
}
