<?php

$profiler_conf = array(

	'output'  => false,
	'logging' => true,

	'output_type' => array(
		'logs'			=> true,
		'paths'			=> true,
		'pathTotals'	=> true,
		'files'			=> false,
		'fileTotals'	=> true,
		'memoryTotals'	=> true,
		'queries'		=> true,
		'queryTotals'	=> true,
		'speedTotals'	=> true,
	),

	'driver' => 'debug',

	'drivers' => array(
		'debug' => array(),
	),
);


return $profiler_conf;

