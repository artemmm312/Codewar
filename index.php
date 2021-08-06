<?php
//Are they the "same"?

function comp($a1, $a2)
{
	if($a1 > 0 && $a2 > 0 && count($a1) == count($a2))
	{
		sort($a1);
		sort($a2);
		$arr = [];
		for ($i = 0, $j = 0, $size1 = count($a1), $size2 = count($a2); $i < $size1, $j < $size2; $i++, $j++)
		{
			if ($a1[$i]**2 == $a2[$j]) $arr[] = 'true';
			else $arr[] = 'false';
		}
		if (in_array('false', $arr)) return false;
		else return true;
	}
	else return false;
}
