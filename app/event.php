<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    public $timestamps = false;
	public $fillable = ['nom', 'prenom','dte'];
	protected $dates = ['dte'];
	protected $casts = [
		'dte' => 'DateTime'];
	public function getIdAttribute($value)
	{
		return $value+ 7;
	}
	public function getIdnomAttribute($value)
	{	
		return $this->attributes['id'].' '.$this->attributes['nom'];
	}

	public function setNomAttribute($value)
	{	
		return $this->attributes['nom'] = $value.'  test';
	}
}