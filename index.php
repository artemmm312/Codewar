<?php
//Roman Numerals Encoder

function solution($number)
{
	$romNum = [
		'I' => 1,
		'V' => 5,
		'X' => 10,
		'L' => 50,
		'C' => 100,
		'D' => 500,
		'M' => 1000
	];

	$arabNum = str_split((string)$number, 1);
	$count = count($arabNum);
	for ($i = 0; $i < $count; $i++) {
		if ($count - ($i + 1) == 3) $arabNum[$i] *= 1000;
		if ($count - ($i + 1) == 2) $arabNum[$i] *= 100;
		if ($count - ($i + 1) == 1) $arabNum[$i] *= 10;
		if ($count - ($i + 1) == 0) $arabNum[$i] *=1;
	}

	if ($arabNum[count($arabNum) - 1] == 0) array_pop($arabNum);
	$count = count($arabNum);

	$result = "";

	for ($i = 0; $i < $count; $i++) {
		if ($arabNum[$i] >= 1000) {
			for ($value = 1; $value <= ($arabNum[$i] / 1000); $value++) {
				$result .= array_search(1000, $romNum);
			}
		}

		elseif ($arabNum[$i] > 500 && $arabNum[$i] < 900) {
			$result .= array_search(500, $romNum);
			for ($value = 1; $value <= (($arabNum[$i] - 500) / 100); $value++) {
				$result .= array_search(100, $romNum);
			}
		}
		elseif ($arabNum[$i] == 900) $result .= array_search(100, $romNum) . array_search(1000, $romNum);
		elseif ($arabNum[$i] == 500) $result .= array_search(500, $romNum);
		elseif ($arabNum[$i] == 400) $result .= array_search(100, $romNum) . array_search(500, $romNum);
		elseif ($arabNum[$i] < 400 && $arabNum[$i] >= 100) {
			for ($value = 1; $value <= ($arabNum[$i] / 100); $value++) {
				$result .= array_search(100, $romNum);
			}
		}

		elseif ($arabNum[$i] > 50 && $arabNum[$i] < 90) {
			$result .= array_search(50, $romNum);
			for ($value = 1; $value <= (($arabNum[$i] - 50) / 10); $value++) {
				$result .= array_search(10, $romNum);
			}
		}
		elseif ($arabNum[$i] == 90) $result .= array_search(10, $romNum) . array_search(100, $romNum);
		elseif ($arabNum[$i] == 50) $result .= array_search(50, $romNum);
		elseif ($arabNum[$i] == 40) $result .= array_search(10, $romNum) . array_search(50, $romNum);
		elseif ($arabNum[$i] < 40 && $arabNum[$i] >= 10) {
			for ($value = 1; $value <= ($arabNum[$i] / 10); $value++) {
				$result .= array_search(10, $romNum);
			}
		}

		elseif ($arabNum[$i] > 5 && $arabNum[$i] < 9) {
			$result .= array_search(5, $romNum);
			for ($value = 1; $value <= ($arabNum[$i] - 5); $value++) {
				$result .= array_search(1, $romNum);
			}
		}
		elseif ($arabNum[$i] == 9) $result .= array_search(1, $romNum) . array_search(10, $romNum);
		elseif ($arabNum[$i]  == 5) $result .= array_search(5, $romNum);
		elseif ($arabNum[$i] == 4) $result .= array_search(1, $romNum) . array_search(5, $romNum);
		elseif ($arabNum[$i] < 4 && $arabNum >= 1) {
			for ($value = 1; $value <= $arabNum[$i]; $value++) {
				$result .= array_search(1, $romNum);
			}
		}
		else echo "The entered number must be between 1 and 9999";
	}
	return $result;
}
var_dump(solution($number));
