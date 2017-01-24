<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class SlideRequest extends Request
{
    public function rules()
    {
        return [
            'description' => 'required',
            'image'   => 'sometimes|max:2048|image',
            'language_id' => 'required|integer',
            'title' => 'required|min:3'
        ];
    }
}
