<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 2/9/15
 * Time: 11:39 PM
 */

class Person {
    private $firstName;
    private $middleName;
    private $lastName;
    public function setFirstName($firstName)
    {
        return $this->firstName= $firstName;
    }
    public function setMiddleName($middleName)
    {
        return $this->middleName= $middleName;
    }
    public function setLastName($lastName)
    {
        return $this->lastName=$lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFullName()
    {
        return $this->firstName." ".$this->middleName." ".$this->lastName;
    }
    public function getReverseFullName()
    {
        $fullName = $this->getFullName();
        return strrev($fullName);
    }

} 