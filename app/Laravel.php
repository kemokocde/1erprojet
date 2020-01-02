<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laravel extends Model
{
	
	public $timestamps = false;
	public $fillable = ['nom', 'prenom'];
}
