<?php

require_once __DIR__.'/vendor/Fluent/Autoloader.php';

Autoloader::add_classes(array(
		'Fluentd\\Log'         => __DIR__.'/classes/log.php',
		'Fluentd\\Log\\Copy'   => __DIR__.'/classes/log/copy.php',
		'Fluentd\\Log\\File'   => __DIR__.'/classes/log/file.php',
		'Fluentd\\Log\\Td'     => __DIR__.'/classes/log/td.php',

		'Fluentd\\Observer_Td' => __DIR__.'/classes/observer/td.php',

		'Fluentd\\Profiler'     => __DIR__.'/classes/profiler.php',
		'Fluentd\\Profiler\\Td' => __DIR__.'/classes/profiler/td.php',

));

\Fluentd\Profiler::display();
