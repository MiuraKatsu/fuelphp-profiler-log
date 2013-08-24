<?php

//require_once __DIR__.'/vendor/Fluent/Autoloader.php';

Autoloader::add_classes(array(

		'ProfilerLog'       => __DIR__.'/classes/profiler_log.php',
		//'ProfilerLog\\Td'   => __DIR__.'/classes/profiler_log/td.php',
		'ProfilerLog\\Debug' => __DIR__.'/classes/profiler_log/debug.php',

));

ProfilerLog::display();
