<?php
//Find the divisors!

function divisors(int $value)
{
	$arr = [];
	if ($value > 1) {
		for ($i = 2; $i <= (int)($value / 2); $i++) {
			//$num = $value % $i;
			if (($value % $i) == 0) $arr[] = $i;
		}
		if (count($arr) > 0) return $arr;
		else echo "$value is prime";
	} else echo "the value must be integer and greater than zero";
}

print_r(divisors(81));
