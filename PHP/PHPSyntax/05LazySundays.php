//Прилагам две различни решения, защото не се показва последната неделя -31.08.2014 при тест 
//при тест, чрез Test PHP functions online работят 
//ако някой може да открие причината , ще съм много благодарна
<?php

$now=new DateTime('now',new DateTimeZone('Europe/Sofia'));
$start= new DateTime($now->format('m/01/Y'),new DateTimeZone('Europe/Sofia'));//first day
$end= new DateTime($now->format('m/t/Y'),new DateTimeZone('Europe/Sofia'));//last day
$interval=new DateInterval("P1D");//interval - 1day
$period=new DatePeriod($start,$interval,$end,DatePeriod::EXCLUDE_START_DATE);

foreach ($period as $date ) {
	if($date->format('w')==0) {
		echo $date->format('jS F, Y').PHP_EOL;
	}
}
?>

;2
<?php
function getSundays($y, $m)
{
    return new DatePeriod(
        new DateTime("first sundays of $y-$m"),
        DateInterval::createFromDateString('next sunday'),
        new DateTime("last day of $y-$m")
    );
}
foreach (getSundays(2014, 8) as $sunday) {
    echo $sunday->format('jS F, Y').PHP_EOL;
}
?>

