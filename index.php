<?php
//Moving Zeros To The End

function moveZeros(array $items): array
{
	$count = count($items);
	$result = [];
	for ($i = 0; $i < $count; $i++) {
		if ($items[$i] !== 0 && $items[$i] !== 0.0) array_push($result, $items[$i]);
	}
	$count2 = count($result);
	if ($count > $count2) {
		$odds = $count - $count2;
		for ($i = 0; $i < $odds; $i++) {
			array_push($result, 0);
		}
	}
	return $result;
}

print_r(moveZeros($items));


// #2 вариант
/* function moveZeros(array $items): array
{
	return array_pad(array_filter($items, function ($x) {return $x !== 0 and $x !== 0.0;}), count($items), 0);
} */