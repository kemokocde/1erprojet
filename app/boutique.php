<?php

namespace App;

/*use App\traitgetroute;*/

use Illuminate\Database\Eloquent\Model;

class boutique extends Model
{
	/*use traitgetroute, traitboot;*/

	use traitgetroute;
    protected $fillable = ['nom', 'description'];

    public $timestamps = null;

    use traitboot;
    /*public function getRouteKeyName(){
    	return 'slug';
    }*/
    /*protected static function boot()
    {
    	parent::boot();
    	static::creating(function($value)
    	{
    		$value->slug = str_slug($value->nom);
    	});
    }*/
}
