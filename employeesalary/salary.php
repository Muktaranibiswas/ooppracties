<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/9/15
 * Time: 8:41 PM
 */

class Salary {
    private $name;
    private $basicAmount;
    private $houseRent;
    private $medical;

    public function setName($name)
    {
        return $this->name= $name;
    }
    public function setBasicAmount($basicAmount)
    {
    return $this->basicAmount= $basicAmount;
    }
    public function setHouseRent($houseRent)
    {
    return $this->houseRent=$houseRent;
    }
    public function setmedical($medical)
    {
    return $this->medical=$medical;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBasicAmount()
    {
        return $this->basicAmount;
    }

    public function getHouseRent()
    {
        return $this->houseRent* $this->basicAmount/100;
    }
    public function getMedical()
    {
        return $this->medical*$this->basicAmount/100;
    }
    public function getTotal()
    {
        return $this->getBasicAmount()+$this->getHouseRent()+$this->getMedical();

    }








} 