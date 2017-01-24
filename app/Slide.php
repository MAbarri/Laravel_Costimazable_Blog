<?php

namespace App;

use App\Base\SluggableModel;

class Slide extends SluggableModel
{
  protected $fillable = ['description', 'language_id', 'title', 'image'];

  public function language()
  {
      return $this->belongsTo(Language::class);
  }

 public function getImageAttribute($image)
 {
     return !empty($image) ? asset($image) : 'https://ssl.gstatic.com/accounts/ui/avatar_2x.png';
 }
}
