<?php
//Sum of the first nth term of Series

function series_sum($n)
{
	$sum = 0;
	for ($i = 0, $j = 1; $i < $n; $i++, $j += 3) {
		$sum += (1 / $j);
	}
	$sum = number_format($sum, 2, ".");
	return "$sum";
}

print_r(series_sum(5));
