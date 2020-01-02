<?php 
namespace App\Dossier;
/* oubie       user DateTime */

	class Date 
	{
		public function istime()
		{
			return (new \DateTime)->format('N') >= 6;
		}
		public static function letemp()
	{
		return date('H') >= 20;
	}
		
	}
	
