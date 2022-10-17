<?php
function sumTime(string $time1, string $time2): string
{
	$colon = [':'];
	$number = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
	
	$arr = str_split($time1.$time2);
	foreach ($arr as $char)
	{
		if (!in_array($char, $colon) && !in_array($char, $number))
		{
			return('ошибка!не правильный ввод');
		}
	}

    $timeFinal = strtotime($time1) + strtotime($time2) ;
    return date('H:i:s', $timeFinal);
}
echo sumTime('12:12:12', '00:30:59');