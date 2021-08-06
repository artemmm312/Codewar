<?php
//Ball Upwards

$v0 = 85;

function maxBall($v0)
{
	$h = 0;
	$t = 0.0;
	$v0 = $v0 / 3.6;
	$g = 9.81;
	$arr = [[], []];
	for ($t; $h >= 0; $t += 0.1) {
		$h = $v0 * $t - 0.5 * $g * $t * $t;
		$arr[0][] += $t;
		$arr[1][] +=  $h;
	}
	foreach ($arr[1] as $key => $value) {
		if ($value == max($arr[1]))
			return $arr[0][$key] * 10;
	}
}
echo maxBall($v);