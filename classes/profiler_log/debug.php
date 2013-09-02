<?php namespace ProfilerLog;

class Debug extends \ProfilerLog
{

	public static function _write($str)
	{
		\Log::debug($str);
	}

}
