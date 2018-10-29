<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hero_image extends Model
{

  protected $table = 'hero_image';
  public function image(){
    return $this->belongsToMany("App\Image");
  }
}
