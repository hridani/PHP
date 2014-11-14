<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Awesome Calendar</title>

</head>

<?php
function monthtwotable($month, $calendar_array) {
$ca = 'align="center"';
$res = "<table cellpadding=\"2\" cellspacing=\"1\" 
style=\"border:solid 1px #000000;font-family:tahoma;font-size:12px;background-color:#ababab\">
<tr><td $ca>Mo</td><td $ca>Tu</td><td $ca>We</td><td $ca>Th</td><td $ca>Fr</td><td $ca>Sa</td><td $ca>Su</td></tr>";
foreach ($calendar_array[$month] as $month=>$week) {
  $res .= '<tr>';
  foreach ($week as $day) {
    $res .= '<td align="right" width="20" bgcolor="#ffffff">' . ($day ? $day : '&nbsp;') . '</td>';
    }
  $res .= '</tr>';
  }
$res .= '</table>';
return $res;
}

function yeartwoarray($year) {
    $res = $year >= 1970;
    if ($res) {
      // this line gets and sets same timezone, don't ask why :)
      date_default_timezone_set(date_default_timezone_get());

      $dt = strtotime("-1 day", strtotime("$year-01-01 00:00:00"));
      $res = array();
      $week = array_fill(1, 7, false);
      $last_month = 1;
      $w = 1;
      do {
        $dt = strtotime('+1 day', $dt);
        $dta = getdate($dt);
        $wday = $dta['wday'] == 0 ? 7 : $dta['wday'];
        if (($dta['mon'] != $last_month) || ($wday == 1)) {
          if ($week[1] || $week[7]) $res[$last_month][] = $week;
          $week = array_fill(1, 7, false);
          $last_month = $dta['mon'];
          }
        $week[$wday] = $dta['mday'];
        }
      while ($dta['year'] == $year);
      }
    return $res;
    }
$calarr=yeartwoarray(2014);
echo monthtwotable(1,$calarr);
echo monthtwotable(2,$calarr);
echo monthtwotable(3,$calarr);
echo monthtwotable(4,$calarr);
?>

