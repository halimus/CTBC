<?php
/**
 * Created by PhpStorm.
 * User: Halim
 * Date: 9/16/2017
 * Time: 1:34 AM
 */

include 'src/ClockTower.php';

echo '<br>startTime='.$startTime = '2:00'; echo '<br>endTime='.$endTime = '3:00';
//echo '<br>startTime='.$startTime = '14:00'; echo '<br>endTime='.$endTime = '15:00';
//echo '<br>startTime='.$startTime = '14:23'; echo '<br>endTime='.$endTime = '15:42';
//echo '<br>startTime='.$startTime = '23:00'; echo '<br>endTime='.$endTime = '1:00';
//echo '<br>startTime='.$startTime = '16:00'; echo '<br>endTime='.$endTime = '16:00';
//echo '<br>startTime='.$startTime = '3:01'; echo '<br>endTime='.$endTime = '03:59';

$clockTower  = new ClockTower();
$countBells = $clockTower->countBells($startTime, $endTime);

echo '<br>countBells='.$countBells;