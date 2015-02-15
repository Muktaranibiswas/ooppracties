<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/6/15
 * Time: 5:26 AM
 */

class Student {
    public $firstName;
    public $lastName;
    public $regNo;
    public function getFullName()
    {
        return $this->firstName . " " . $this->lastName;
    }

} 