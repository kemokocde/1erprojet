<?php

 /**
 * 
 */
namespace App\helpers;
use App\boutique;
	
if (!function_exists('flash')) {
	function flash($message, $type ='success')
	{
		session()->flash('notification.cle', $message);
		session()->flash('notification.type', $type);
	}
}


