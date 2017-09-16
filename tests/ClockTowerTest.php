<?php

/**
 * Created by PhpStorm.
 * User: Halim
 * Date: 9/16/2017
 * Time: 1:57 AM
 */

namespace TDD\Test;
//Import autolaod file in order to use PHPUnit
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';

use PHPUnit\Framework\TestCase; //Import PHPUnit core class TestCase
use TDD\ClockTower;

class ClockTowerTest extends TestCase {

    /**
     * testCase1
     */
    public function testCase1(){
        $clockTower = new ClockTower();
        $this->assertEquals(5, $clockTower->countBells('2:00', '3:00'), 'countBells = 5');
    }

    /**
     * testCase2
     */
    public function testCase2(){
        $clockTower = new ClockTower();
        $this->assertEquals(60, $clockTower->countBells('4:00', '11:59'), 'countBells = 60');
    }

    /**
     * testCase3
     */
    public function testCase3(){
        $clockTower = new ClockTower();
        $this->assertEquals(156, $clockTower->countBells('2:00', '1:00'), 'countBells = 156');
    }

    /**
     * testCase4
     */
    public function testCase4(){
        $clockTower = new ClockTower();
        $this->assertEquals(159, $clockTower->countBells('15:00', '15:00'), 'countBells = 158');
    }

}