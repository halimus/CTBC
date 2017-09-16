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



        return 1;
    }




}