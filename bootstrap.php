<?php

Autoloader::add_classes(array(

		'ProfilerLog'       => __DIR__.'/classes/profiler_log.php',
		'ProfilerLog\\Debug' => __DIR__.'/classes/profiler_log/debug.php',

));

ProfilerLog::set_output();
