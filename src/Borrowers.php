<?php
/**
 * Created by PhpStorm.
 * User: kwambui
 * Date: 7/7/18
 * Time: 2:05 PM
 */

namespace kelvin;


class Borrowers extends Normal
{
    private $NumberBorrowed;
    private $period;
    public function setNumberBorrowed ($NumberBorrowed){
        $this->NumberBorrowed = $NumberBorrowed;

    }
    public function setPeriod ($days){
        $this->period=$days;
    }
    public function getNumberBorrowed(){
        return $this->NumberBorrowed;
    }
    public function getPeriod(){
        return $this->period;
    }
}