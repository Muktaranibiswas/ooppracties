<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 8:21 AM
 */

class Lunchbill{
    public $rice;
    public $vegetable;
    public $fish;
    public $meet;
    public $vat;

    public function getGrossAmount(){

    $TotalBill = $this->rice*20 + $this->vegetable*30 + $this->fish*80 + $this->meet*120;

    return $TotalBill;
    }
    public function getPayableAmount(){

    return ($this->getGrossAmount() * $this->vat )/100 + $this->getGrossAmount();
    }
}
