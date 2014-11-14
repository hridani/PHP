<?php
date_default_timezone_set("Europe/Sofia");
$lastSundayOfMarch = strtotime("last Sunday of March");
$startSummerTime = mktime(1, 0, 0, 3, date('d', $lastSundayOfMarch), date('Y'));
$lastSundayOfOctober = strtotime("last Sunday of October");
$endSummerTime = mktime(1, 0, 0, 10, date('d', $lastSundayOfOctober), date('Y'));
$today=time();

$calculation=((mktime(23,59,59,12,31,2014)-$today)/3600);
if ($startSummerTime <= $today && $today <= $endSummerTime) {
      $calculation--;
}
$today=getdate();
$hours=(int)$calculation;
$minutes=(int)($hours * 60 + (59 -$today['minutes']));
$seconds=(int)($minutes *60 + (59 -$today['seconds']));

$dtF = new DateTime("@0");
$dtT = new DateTime("@$seconds");
echo "Hours until new year : $hours \n";
echo "Minutes until new year : $minutes \n";
echo "Seconds until new year : $seconds \n";
echo $dtF->diff($dtT)->format("Days:Hours:Minutes:Seconds: %a:%h:%i:%s");
?>


