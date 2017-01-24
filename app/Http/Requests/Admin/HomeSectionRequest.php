<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class HomeSectionRequest extends Request
{
    public function rules()
    {
        return [
            'content' => 'required',
            'language_id' => 'required|integer',
            'title' => 'required|min:3'
        ];
    }
}
