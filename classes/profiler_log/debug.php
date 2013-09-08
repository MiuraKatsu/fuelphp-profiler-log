<?php namespace ProfilerLog;

class Debug extends \ProfilerLog
{

	public static function _write($output)
	{
		\Log::debug(print_r($output,true));
	}

}
