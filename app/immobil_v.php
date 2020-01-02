<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class immobil_v extends Model
{
    public $timestamps = false;

    public function isToilet(){
    	return $this->nb_toilt_im <= 1;
    }
}
