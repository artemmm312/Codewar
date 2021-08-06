<?php
//WeIrD StRiNg CaSe

function toWeirdCase($string)
{
	trim($string);
	$arr = str_split($string, 1);
	$count = count($arr);
	$newStr = "";
	for ($i = 0, $j = 1; $i <= $count; $i += 2, $j += 2) {
		if ($arr[$i] !== " ") {
			$newStr .= strtoupper($arr[$i]);
			$newStr .= strtolower($arr[$j]);
		} elseif ($j == $count) $newStr .= strtoupper($arr[$i]);
		else {
			$newStr .= $arr[$i];
			$i -= 1;
			$j -= 1;
			continue;
		}
	}
	return $newStr;
}
echo toWeirdCase($string);
