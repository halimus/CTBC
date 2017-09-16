<?php
/**
 * Created by PhpStorm.
 * User: Halim
 * Date: 9/16/2017
 * Time: 1:35 AM
 */
class ClockTower {

    /**
     * ClockTower constructor.
     */
    public function __construct() {
    }

    /**
     * @param $startTime
     * @param $endTime
     * @return int
     */
    public function countBells($startTime, $endTime) {

        // Make sure the Format of time is correct HH:mm or H:mm
        if (!preg_match("/^(2[0-3]|[01]?[0-9]):[0-5][0-9]$/", $startTime)) {
            //die("The startTime: $startTime is not a validate Time!");
            return -1;
        } elseif (!preg_match("/^(2[0-3]|[01]?[0-9]):[0-5][0-9]$/", $endTime)) {
            //die("The endTime: $endTime is not a validate Time!");
            return -1;
        }

        $startTime = strtotime($startTime);
        $endTime   = strtotime($endTime);
        $timeDiff  = ($endTime - $startTime) / 3600;

        if($timeDiff > 0){ //$timeDiff positive
            $startHour = date('H', $startTime);
            $endHour = date('H', $endTime);

            $startMinute = date('i', $startTime);

            if($startMinute == '00'){ // Example: $startTime = 14:00
                $dif = ($endHour - $startHour)+1;
                $array = $this->rangeHours($startHour, $dif);
                $count = array_sum($array);
                return $count;
            }
            else{
                if($endHour - $startHour == 0){
                    $count = 0;
                    return $count;
                }
                else{
                    if($startMinute != '00'){ // round the hour, Example 14:23 become 15
                        $startHour++;
                    }
                    $dif = ($endHour - $startHour)+1;
                    $array = $this->rangeHours($startHour, $dif);
                    $count = array_sum($array);
                    return $count;
                }
            }
        }
        else{ // $timeDiff negative
            $startHour = date('H', $startTime);
            $endHour = date('H', $endTime);

            $startMinute = date('i', $startTime);
            if($startMinute != '00'){
                $startHour++;
            }

            $array1 = $this->rangeHours($startHour, 23);
            $array2 = $this->rangeHours(0, $endHour+1);

            $count = array_sum($array1) + array_sum($array2);
            return $count;
        }

        return 0;
    }

    /**
     * @param $offset
     * @param int $length
     * @return array
     */
    private function rangeHours($offset, $length=1){
        $hours = array(
            0 => 12,
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6,
            7 => 7,
            8 => 8,
            9 => 9,
            10 => 10,
            11 => 11,
            12 => 12,
            13 => 1,
            14 => 2,
            15 => 3,
            16 => 4,
            17 => 5,
            18 => 6,
            19 => 7,
            20 => 8,
            21 => 9,
            22 => 10,
            23 => 11
        );

        $array = array_slice($hours, $offset, $length);
        return $array;
    }

}