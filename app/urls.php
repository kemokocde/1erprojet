<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urls extends Model
{
	public $timestamps = true;
	public $fillable = ['url','shortened'];
  	public static function shorter()
   	{

	   	$shortened = str_random(5);

	   	if (static::whereShortened($shortened)->count()>0) {
	   		return shorter();
	   	}
   		return $shortened;
   }
}
