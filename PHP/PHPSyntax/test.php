function monthtwotable($month, $calendar_array) {
$ca = 'align="center"';
$res = "<table cellpadding=\"2\" cellspacing=\"1\" style=\"border:solid 1px #000000;font-family:tahoma;font-size:12px;background-color:#ababab\"><tr><td $ca>Mo</td><td $ca>Tu</td><td $ca>We</td><td $ca>Th</td><td $ca>Fr</td><td $ca>Sa</td><td $ca>Su</td></tr>";
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
 
function getDates($year)
{
    $dates = array();

    for($i = 1; $i <= 366; $i++){
        $month = date('m', mktime(0,0,0,1,$i,$year));
        $wk = date('W', mktime(0,0,0,1,$i,$year));
        $wkDay = date('D', mktime(0,0,0,1,$i,$year));
        $day = date('d', mktime(0,0,0,1,$i,$year));

        $dates[$month][$wk][$day] = $wkDay;
    } 

    return $dates;   
}


<?php $dates = getDates(2011); 

$weekdays = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'); ?>
<?php foreach($dates as $month => $weeks) { ?>
<table>
    <tr>
        <th><?php echo implode('</th><th>', $weekdays); ?></th>
    </tr>
    <?php foreach($weeks as $week => $days){ ?>
    <tr>
        <?php foreach($weekdays as $day){ ?>
        <td>
            <?php echo isset($days[$day]) ? $days[$day] : '&nbsp'; ?>
        </td>               
        <?php } ?>
    </tr>
    <?php } ?>
</table>
<?php } ?>

/* $datestart='17-12-2014';
list($d1,$m1,$y1)=explode("-",$datestart);


$date='31-12-2014';
list($d2,$m2,$y2)=explode("-",$date);


function getSundays($y1,$m1,$d1,$y2,$m2,$d2 )
{
    return new DatePeriod(
        new DateTime("first day  of $y1-$m1-$d1"),
        DateInterval::createFromDateString('next mondey'),
        new DateTime("last day of $y2-$m2-$d2")
    );
}
foreach (getSundays($y1,$m1,$d1,$y2,$m2,$d2) as $sunday) {
    echo $sunday->format('jS F, Y').PHP_EOL;
}
?>*/
