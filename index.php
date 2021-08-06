<?php
//Pick peaks

function pickPeaks(array $arr)
{
	$count = count($arr);
	$result = ['pos' => [], 'peaks' => []];

	for ($i = 1; $i < $count - 1; $i++) {
		if ($arr[$i] > $arr[$i - 1] && $arr[$i] > $arr[$i + 1]) {
			array_push($result['pos'], $i);
			array_push($result['peaks'], $arr[$i]);
		} elseif ($i <= $count - 2 && $arr[$i] == $arr[$i + 1] && $arr[$i] > $arr[$i - 1]) {
			array_push($result['pos'], $i);
			array_push($result['peaks'], $arr[$i]);
			while ($i < $count - 1) {
				if ($arr[$i] == $arr[$i + 1])
					$i++;
				else break;
			}
			if ($i == $count - 1 && $arr[$i] >= $arr[$i - 1]) {
				array_pop($result['pos']);
				array_pop($result['peaks']);
			}
			if ($i < $count - 1 && $arr[$i] < $arr[$i + 1]) {
				array_pop($result['pos']);
				array_pop($result['peaks']);
			}
		}
	}
	return $result;
}

print_r(pickPeaks($arr));