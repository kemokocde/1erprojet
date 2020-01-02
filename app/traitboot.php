<?php 

namespace App;

trait traitboot
{
	protected static function boot()
    {
    	parent::boot();
    	static::creating(function($value)
    	{
    		$value->slug = str_slug($value->nom);
    	});
    }
}