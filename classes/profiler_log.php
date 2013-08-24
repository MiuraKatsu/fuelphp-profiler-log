<?php 

class ProfilerLog
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
		\Event::register('shutdown','\ProfilerLog::shutdown');
	}


	public static function display()
	{
		//var_dump(__FUNCTION__);
		\Profiler::$display = static::$conf['display'];
	}

	public static function shutdown()
	{
		//var_dump(__FUNCTION__);
		$output_data = null;
		if(static::$conf['output']){
			$output_data = \Profiler::get_output_data();
		}

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

	public static function output($output_data)
	{
	}

}
