<?php
/**
 * @Author: Eka Syahwan
 * @Date:   2017-05-21 21:21:18
 * @Last Modified by:   Eka Syahwan
 * @Last Modified time: 2017-05-21 14:24:02
 */
$fcKey = "4.2.7.14.59.68.7.0.11.14.68.69"; // key encode
$r  = range("a", "z"); foreach (range("A", "Z") as $key => $palalu) { $r[] = $palalu;} $r[] = "!";$r[] = "{";$r[] = "}";$r[] = "=";$r[] = "[";$r[] = "'";$r[] = "]";$r[] = " ";$r[] = "@";$r[] = "$";$r[] = "%";$r[] = "_";$r[] = "&";$r[] = "|";$r[] = "(";$r[] = ")";$r[] = '"';$r[] = ';';$r[] = '=';$r[] = ':';$r[] = '/';$r[] = '.';$r[] = '\\';$r[] = '/';$r[] = '\/';$r[] = "
";
$keys = explode(".", $fcKey);
foreach ($keys as $key => $value) {
	$k .= "$r[$value]";
}
eval(base64_decode(base64_encode($k)));
