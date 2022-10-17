<?php
echo 'ведите первое время: ';
$argv1 = trim(fgets(STDIN));
echo 'введите второе время: ';
$argv2 = trim(fgets(STDIN));
function sumTime(string $arvg1=NULL, string $argv2=null): string
{
	$colon = [':'];
	$number = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
	$array = str_split($arv1.$time2);

	foreach ($array as $char)
	{
		if (!in_array($char, $colon) && !in_array($char, $number))
		{
			return('не правильный ввод');
		}
	}

    $timeFinal = strtotime($argv1) + strtotime($argv2) ;
    return date('H:i:s', $timeFinal);
}
echo sumTime($argv1, $argv2);

