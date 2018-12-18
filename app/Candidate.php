<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function full_name(){
      return $this->first_name.' '.$this->last_name;
    }


}
