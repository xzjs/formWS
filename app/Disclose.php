<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disclose extends Model
{
    public function images(){
        return $this->hasMany('App\Image');
    }
}
