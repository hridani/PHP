<?php
$number=247;
$countNumbers=preg_match_all("/[0-9]/",$number);
if($countNumbers<3){
	echo "no";
} else {
	$end=min(987,$number);
	for ($i=102; $i <= $end; $i++) { 
		$arr=preg_split("//", strval($i));
        //array_filter-ще изчисти празните елементи
		if(count(array_unique($arr))==4){
		echo $i.' ';
		}
	}
}
?>