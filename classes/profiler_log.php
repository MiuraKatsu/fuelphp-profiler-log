<?php 

class ProfilerLog
{

	public static $conf = array();

	/**
	 * call by autoloader::load
	 */
	public static function _init()
	{
		\Config::load('profiler', true);
		static::$conf = \Config::get('profiler');

		//regist shutdown event
		\Event::register('shutdown','\ProfilerLog::shutdown');
	}


	public static function set_output()
	{
		\Profiler::set_output(static::$conf['output']);
	}

	public static function shutdown()
	{
		$output_data = \Profiler::get_output_data();

		if( empty(static::$conf['driver']))
		{
			throw new \FuelException('No log driver given or no default log driver set.');
		}

		$class = 'ProfilerLog\\'.ucfirst(static::$conf['driver']);

		try{
			return $class::output($output_data);
		}catch (FuelException $e) {
		}
	}

	public static function output($output = null){
		
		
		foreach(static::$conf['output_type'] as $_conf => $enable){
			if(!$enable){
			 	unset($output[$_conf]);
			}
		}

		$session_id = \Session::key();
		$output = array('session_id' => $session_id,'output_data'=>$output);

		static::_write($output);
	}
}
