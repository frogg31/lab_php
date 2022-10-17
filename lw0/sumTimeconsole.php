<?php
echo 'ведите первое время: ';
$time1 = trim(fgets(STDIN));
echo 'введите второе время: ';
$time2 = trim(fgets(STDIN));
function sumTime(string $time1=NULL, string $time2=null): string
{
	$colon = [':'];
	$number = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
	$array = str_split($time1.$time2);

	foreach ($array as $char)
	{
		if (!in_array($char, $colon) && !in_array($char, $number))
		{
			return('не правильный ввод');
		}
	}

    $timeFinal = strtotime($time1) + strtotime($time2) ;
    return date('H:i:s', $timeFinal);
}
echo sumTime($time1, $time2);

