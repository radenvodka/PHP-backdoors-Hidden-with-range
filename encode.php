<?php
/**
 * @Author: Eka Syahwan
 * @Date:   2017-05-21 21:21:18
 * @Last Modified by:   Eka Syahwan
 * @Last Modified time: 2017-05-21 14:24:02
 */
error_reporting(0);
$c  = 'echo "halo";';
$c  = str_split(stripslashes(($c)));
$r  = range("a", "z"); foreach (range("A", "Z") as $key => $palalu) { $r[] = $palalu;} $r[] = "!";$r[] = "{";$r[] = "}";$r[] = "=";$r[] = "[";$r[] = "'";$r[] = "]";$r[] = " ";$r[] = "@";$r[] = "$";$r[] = "%";$r[] = "_";$r[] = "&";$r[] = "|";$r[] = "(";$r[] = ")";$r[] = '"';$r[] = ';';$r[] = '=';$r[] = ':';$r[] = '/';$r[] = '.';$r[] = '\\';$r[] = '/';$r[] = '\/';
$ck = count($c);
foreach ($c as $key => $x) {
	$f = array_search($x, $r);
	$cs = ($key+1);
	if($cs == $ck){
		$g  .= $f;
	}else{
		$g  .= $f.".";
	}
}
echo $g; // output / result 
