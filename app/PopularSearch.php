<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PopularSearch extends Model
{
    protected $fillable = ['value','numberOfSearches'];

}
