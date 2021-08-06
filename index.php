<?php
//Jaden Casing Strings

function toJadenCase($string)
{
	return $string = mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
}

var_dump(toJadenCase($string));
