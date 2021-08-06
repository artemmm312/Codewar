<?php
//Create Phone Number

$numbersArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

function createPhoneNumber($numbersArray)
{
	$result = "(";
	for ($i = 0; $i < 3; $i++) {
		$result .= "$numbersArray[$i]";
	}
	$result .= ") ";
	for ($i = 3; $i < 6; $i++) {
		$result .= "$numbersArray[$i]";
	}
	$result .= "-";
	for ($i = 6; $i < 10; $i++) {
		$result .= "$numbersArray[$i]";
	}
	return $result;
}

echo createPhoneNumber($numbersArray); 


//вариант #2
/* function createPhoneNumber($numbersArray)
{
	return vsprintf("(%d%d%d) %d%d%d-%d%d%d%d", $numbersArray);
}
 */