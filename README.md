fuelphp-profiler-log
====================
PHP Quick Profiler for Log Package.
fuelphp$BI8=`$N(BPHP Quick Profiler$B$N%W%m%U%!%$%k>pJs$r(BLog$B=PNO$9$k(Bpackage$B$G$9!#(B  

Installation
------
+ `fuel/packages`$BG[2<$KE83+$7$^$9(B

 `git clone -recursive git://github.com/MiuraKatsu/fuelphp-profiler-log.git profiler-log`

+ `core/classes/profiler.php`$B$r(B`packages/core/classes/profiler.php`$B$H:9$7BX$($^$9!#(B

 `patch -u core/classes/profiler.php < packages/profiler-log/patch/profiler.patch`

+ `config/profiler.php`$B$r@_Dj$7$^$9!#(B

Configration
------
$B2hLLI=<($9$k$+$I$&$+$H%m%.%s%0$9$k$+$I$&$+(B

	'output'  => false,
	'logging' => true,

$B=PNO$9$k(Btype$B$rA*Br$G$-$^$9!#(B

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


$B%i%$%;%s%9(B
----------
Copyright &copy; 2013 @MiuraKatsu
Licensed under the [Apache License, Version 2.0][Apache]
Distributed under the [MIT License][mit].
Dual licensed under the [MIT license][MIT] and [GPL license][GPL].
 
[Apache]: http://www.apache.org/licenses/LICENSE-2.0
[MIT]: http://www.opensource.org/licenses/mit-license.php
[GPL]: http://www.gnu.org/licenses/gpl.html

