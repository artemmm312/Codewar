<?php
//Exes and Ohs

function XO($s)
{
	$o = substr_count($s, "o");
	$O = substr_count($s, "O");
	$x = substr_count($s, "x");
	$X = substr_count($s, "X");
	$oO = $o + $O;
	$xX = $x + $X;
	if ($oO == $xX || $oO == 0 && $xX == 0) return true;
	else return false;
}
print_r(XO($s));

#2
/* function XO($s) {
	$lower = strtolower($s);
	return substr_count($lower, 'x') === substr_count($lower, 'o');
} */
