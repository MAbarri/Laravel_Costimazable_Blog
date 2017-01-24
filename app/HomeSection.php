<?php

namespace App;

use App\Base\SluggableModel;

class HomeSection extends SluggableModel
{

    protected $fillable = ['content', 'language_id', 'title'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
