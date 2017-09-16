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

    public function testCase1(){
        $clockTower = new ClockTower();
        $this->assertEquals(5, $clockTower->countBells('2:00', '3:00'), 'countBells = 5');
    }

    public function testCase2(){
        $clockTower = new ClockTower();
        $this->assertEquals(60, $clockTower->countBells('4:00', '11:59'), 'countBells = 60');
    }

    public function testCase3(){
        $clockTower = new ClockTower();
        $this->assertEquals(156, $clockTower->countBells('2:00', '1:00'), 'countBells = 156');
    }

    public function testCase4(){
        $clockTower = new ClockTower();
        $this->assertEquals(158, $clockTower->countBells('15:00', '15:00'), 'countBells = 158');
    }

}