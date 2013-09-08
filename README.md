fuelphp-profiler-log
====================
PHP Quick Profiler for Log Package.  
fuelphp標準のPHP Quick Profilerのプロファイル情報をLog出力するpackageです。  

Installation
------
+ `fuel/packages`配下に展開します

 `git clone -recursive git://github.com/MiuraKatsu/fuelphp-profiler-log.git profiler-log`

+ `core/classes/profiler.php`を`packages/core/classes/profiler.php`と差し替えます。

 `patch -u core/classes/profiler.php < packages/profiler-log/patch/profiler.patch`

+ `config/profiler.php`を設定します。

Configration
------
画面表示するかどうかとロギングするかどうか

	'output'  => false,
	'logging' => true,

出力するtypeを選択できます。

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


ライセンス
----------
Copyright &copy; 2013 @MiuraKatsu
Licensed under the [Apache License, Version 2.0][Apache]
Distributed under the [MIT License][mit].
Dual licensed under the [MIT license][MIT] and [GPL license][GPL].
 
[Apache]: http://www.apache.org/licenses/LICENSE-2.0
[MIT]: http://www.opensource.org/licenses/mit-license.php
[GPL]: http://www.gnu.org/licenses/gpl.html

