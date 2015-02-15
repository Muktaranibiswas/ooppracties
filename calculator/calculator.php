<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 7:42 AM
 */

class Calculator {
    public $principalAmount;
    public $anualInterest;
    public $timePeriod;
    public function calculateTotalAmount(){
    $totalAmount=($this->anualInterest*$this->principalAmount*$this->timePeriod)/100;
        return $this->principalAmount+$totalAmount;
    }
}