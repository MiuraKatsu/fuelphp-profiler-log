<?php namespace ProfilerLog;

class Debug extends \ProfilerLog
{

	public static function output($output = null){
		
		foreach(static::$conf['output_type'] as $_conf){
			if(!$_conf){
			 	unset($output[$_conf]);
			}
		}
		//paths
		unset($output['paths']);
		unset($output['pathTotals']);

		//files	
		unset($output['files']);
		unset($output['fileTotals']);

		//queries
		//unset($output['queries']);
		//unset($output['queryTotals']);

		//logs
		unset($output['logs']);

		//memory
		//unset($output['memoryTotals']);

		//speed
		//unset($output['speedTotals']);

		//Request毎にUniqueなID
		$profile_id = null;

		$output = array('profile_id' => $profile_id,'output_data'=>$output);

		\Log::debug(print_r($output,true));
		\Log::debug(\Session::key());
	}

	private static function _write($str)
	{

		\Log::debug($str);
	}

}
