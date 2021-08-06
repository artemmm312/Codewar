<?php
//Build Tower

function tower_builder(int $n): array
{
	if ($n > 0) {
		$tower = [];
		$block = "*";
		$length = $n * 2 - 1;
		for ($i = 1, $j = 1; $i <= $n, $j <= $length; $i++, $j += 2) {
			$floor = str_pad(str_pad($block, $j, "*"), $length, " ", STR_PAD_BOTH);
			$tower[] = $floor;
		}
		return $tower;
	} else echo "The number of floors must be integer and greater than zero";
}

print_r(tower_builder(5));
