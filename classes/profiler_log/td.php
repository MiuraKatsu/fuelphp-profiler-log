<?php namespace ProfilerLog;

class Td extends \ProfilerLog
{

	public static function output($output = null){
		
		foreach(static::$conf['output_type'] as $_conf){
			if(!$_conf){
			 	unset($output[$_conf]);
			}
		}

		self::_write(print_r($output,true));	
	}

	private static function _write($str)
	{

		\Log::debug($str);
	}

}
