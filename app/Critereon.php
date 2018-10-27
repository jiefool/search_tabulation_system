<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Critereon extends Model
{
    protected $table='criteria';
    

    public function category(){
      return $this->belongsTo('App\Category');
    }
}
