<?php
//Bit Counting 

function countBits($n) 
{
	if ($n > 0)
	{
	$b = decbin($n);
	return substr_count ($b, "1");
	}
	else echo "Number must be whole and non-negative";
}
print_r(countBits(113));
