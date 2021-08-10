<?php
//Human readable duration format (https://www.codewars.com/kata/52742f58faf5485cae000b9a)

//Вариант 1

/* $seconds = 157680345;
function format_duration($seconds)
{
	$time = [
		'second' => 1,
		'minute' => 60,
		'hour' => 3600,
		'day' => 86400,
		'year' => 31536000
	];
	$result = "";
	if ($seconds < 0) return $result .= "seconds cannot be negative";
	elseif ($seconds == 0) return $result .= "now";
	elseif (in_array($seconds, $time)) return $result .= $seconds / $seconds . " " . array_search($seconds, $time);
	else {
		if ($seconds > $time['year']) {
			$year = intdiv($seconds, $time['year']);
			$seconds %= $time['year'];
			$result .= $year > 1 ? "$year years" : "$year year";
			if ($seconds == 0) return $result;
		}
		if ($seconds >= $time['day'] && $seconds < $time['year']) {
			$day = intdiv($seconds, $time['day']);
			$seconds %= $time['day'];
			if ($seconds == 0 && $result != "") return $result .= " and " . ($day > 1 ? "$day days" : "$day day");
			elseif ($seconds != 0 && $result != "") $result .= ", " . ($day > 1 ? "$day days" : "$day day");
			elseif ($seconds == 0) return $result .= $day > 1 ? "$day days" : "$day day";
			else $result .= $day > 1 ? "$day days" : "$day day";
		}
		if ($seconds >= $time['hour'] && $seconds < $time['day']) {
			$hour = intdiv($seconds, $time['hour']);
			$seconds %= $time['hour'];
			if ($seconds == 0 && $result != "") return $result .= " and " . ($hour > 1 ? "$hour hours" : "$hour hour");
			elseif ($seconds != 0 && $result != "") $result .= ", " . ($hour > 1 ? "$hour hours" : "$hour hour");
			elseif ($seconds == 0) return $result .= $hour > 1 ? "$hour hours" : "$hour hour";
			else $result .= $hour > 1 ? "$hour hours" : "$hour hour";
		}
		if ($seconds >= $time['minute'] && $seconds < $time['hour']) {
			$minute = intdiv($seconds, $time['minute']);
			$seconds %= $time['minute'];
			if ($seconds == 0 && $result != "") return $result .= " and " . ($minute > 1 ? "$minute minutes" : "$minute minute");
			elseif ($seconds != 0 && $result != "") $result .= ", " . ($minute > 1 ? "$minute minutes" : "$minute minute");
			elseif ($seconds == 0) return $result .= $minute > 1 ? "$minute minutes" : "$minute minute";
			else $result .= $minute > 1 ? "$minute minutes" : "$minute minute";
		}
		if ($seconds >= $time['second'] && $seconds < $time['minute']) {
			$second = $seconds;
			if ($result != "") return $result .= " and " . ($second > 1 ? "$second seconds" : "$second second");
			else return $result .= $second > 1 ? "$second seconds" : "$second second";
		}
	}
}
echo format_duration($seconds);
 */

//Вариант 2

$seconds = 15731080;
function format_duration($seconds)
{
	$result = "";
	if ($seconds == 0) return $result .= "now";

	$year = intdiv($seconds, 31536000);
	$seconds %= 31536000;
	$day = intdiv($seconds, 86400);
	$seconds %= 86400;
	$hour = intdiv($seconds, 3600);
	$seconds %= 3600;
	$minute = intdiv($seconds, 60);
	$second = $seconds %= 60;
	$time = [
		[$year, $year > 1 ? 'years' : 'year'],
		[$day, $day > 1 ? 'days' : 'day'],
		[$hour, $hour > 1 ? 'hours' : 'hour'],
		[$minute, $minute > 1 ? 'minutes' : 'minute'],
		[$second, $second > 1 ? 'seconds' : 'second']
	];
	$newTime = [];
	for ($i = 0; $i < 5; $i++) {
		if ($time[$i][0] != 0) $newTime[] = $time[$i];
	}
	$count = count($newTime);
	for ($i = 0; $i < $count; $i++) {
		if ($i == 0) $result .= $newTime[$i][0] . " " . $newTime[$i][1];
		elseif ($i == $count - 1) $result .= " and " . $newTime[$i][0] . " " . $newTime[$i][1];
		else $result .= ", " . $newTime[$i][0] . " " . $newTime[$i][1];
	}
	return $result;
}

echo format_duration($seconds);
