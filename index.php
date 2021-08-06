<?php
//Convert string to camel case

function toCamelCase($str)
{
	trim($str);
	$arr = str_split($str, 1);
	$count = count($arr);
	$newStr = "";
	for ($i = 0; $i < $count; $i++) {
		if ($arr[$i] != "_" && $arr[$i] != "-") $newStr .= $arr[$i];
		else {
			$i++;
			$newStr .= strtoupper($arr[$i]);
			continue;
		}
	}
	return $newStr;
}
echo toCamelCase($str);
