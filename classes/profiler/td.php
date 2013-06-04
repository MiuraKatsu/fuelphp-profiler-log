<?php namespace Fluentd\Profiler;

class Td extends \Fluentd\Profiler
{

	public static function output($output = null){
		
		foreach(static::$conf['output_type'] as $_conf){
			if(!$_conf){
			 	unset($output[$_conf]);
			}
		}
		unset($output['files']);
		unset($output['queries']);
		unset($output['logs']);
		\Log::debug(print_r($output,true));
	}

}
