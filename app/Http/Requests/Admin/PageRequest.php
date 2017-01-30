<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class PageRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function all()
    {
        $data = parent::all();
        $data['active'] = $this->input('active', "0");
        $data['isHTMLPage'] = $this->input('isHTMLPage', "0");
        $data['parent_id'] = $this->input('parent_id') == "" ? null : $this->input('parent_id');
      return $data;
    }

    public function rules()
    {
        return [
            'content'     => 'required|string',
            'description' => 'required|string|max:160',
            'isHTMLPage'  => 'boolean',
            'language_id' => 'required|integer',
            'title'       => 'required|string|max:200',
        ];
    }
}
