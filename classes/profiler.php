<?php namespace Fluentd;

class Profiler
{

	public static $conf = array();

	/**
	 * call by autoloader::load
	 */
	public static function _init()
	{
		///var_dump(__FUNCTION__);
		\Config::load('profiler', true);
		static::$conf = \Config::get('profiler');
		//regist shutdown event
		\Event::register('shutdown','\Fluentd\Profiler_Td::shutdown');
	}


	public static function display()
	{
		//var_dump(__FUNCTION__);
		\Profiler::$display = static::$conf['display'];
	}

	public static function shutdown()
	{
		//var_dump(__FUNCTION__);
		$output = null;
		if(static::$conf['output']){
			$output = \Profiler::get_output_data();
		}
		self::output($output);
	}

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
