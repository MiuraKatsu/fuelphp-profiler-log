<?php

$profiler_conf = array(

	'output'  => true,
	'display'  => false,

	'output_type' => array(
		'all',
		//'logs',
	),

	'driver' => 'td',

	'drivers' => array(
		'td' => array(
			'database' => 'default',
			'host' => 'unix:///var/run/td-agent/td-agent.sock',
			'port' => null,
			//'host' => 'localhost',
			//'port' => 8888,
			//'options' => array(),
			//'packer' => null,
		),
	),
);


return $profiler_conf;

