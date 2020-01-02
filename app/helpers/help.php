<?php

 /**
 * 
 */
namespace App\helpers;
use App\immobil_v;

class help
{
	
	public static function calculchmbr($event)
	{
		if ($event->nb_chmbr_im <= 2) {
			return 2;
		}else{
			return 1;
		}
	}


	public static function calcultlt($event)
	{
		if ($event->isToilet()) {
			return 'pas de toilette';
		}else{
			return $event->nb_toilt_im.'toilete';
		}
	}
}