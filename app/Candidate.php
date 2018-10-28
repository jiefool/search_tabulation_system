<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function full_name(){
      return $this->first_name.' '.substr($this->middle_name, 0, 1).'. '.$this->last_name;
    }


}
