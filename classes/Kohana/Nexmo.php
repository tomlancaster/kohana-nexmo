<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Nexmo {
	
	public static function factory()
	{
		
		if ( ! class_exists('NexmoMessage'))
		{
			require Kohana::find_file('vendor', 'nexmo-php-lib/NexmoMessage');
		}
		$key = kohana::$config->load('nexmo.api_key');
		$secret = kohana::$config->load('nexmo.api_secret');
		return new NexmoMessage($key, $secret);
		
	}
}

