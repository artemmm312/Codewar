<?php
//Roman Numerals Decoder

function solution($roman)
{
	$number = 0;

	$romNum = [
		'I' => 1,
		'V' => 5,
		'X' => 10,
		'L' => 50,
		'C' => 100,
		'D' => 500,
		'M' => 1000
	];

	$rom = str_split($roman, 1);
	$count = count($rom);
	for ($i = 0, $j = 1; $i < $count; $i++, $j++) {
		if ($j < $count) {
			if ($romNum[$rom[$i]] >= $romNum[$rom[$j]]) $number += $romNum[$rom[$i]];
			else {
				$number += $romNum[$rom[$j]] - $romNum[$rom[$i]];
				$i++;
				$j++;
			}
		} elseif ($j == $count && $count > 1) {
			if ($romNum[$rom[$i - 1]] >= $romNum[$rom[$i]]) $number += $romNum[$rom[$i]];
			else break;
		} else $number += $romNum[$rom[$i]];
	}
	return $number;
}
print_r(solution($roman));
