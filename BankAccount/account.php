<?php

class Account {
    private $account_no;
    private $customer_name;
    private $balance;

    public function __construct($account_no, $cusomer_name) {
        $this->account_no = $account_no;
        $this->customer_name = $cusomer_name;
    }

    public function get_customer_name()
    {
        return $this->customer_name;
    }

    public function set_customer_name($customer_name)
    {
        $this->customer_name = $customer_name;
    }
    public function get_account_no()
    {
        return $this->account_no;
    }

    public function set_account_no($account_no)
    {
        $this->account_no = $account_no;
    }


    function deposit($amount)
    {
        $this->balance = $this->balance + $amount;
        return "Deposited";
    }

    function get_balance()
    {
        return $this->balance;
    }

    function withdraw($amount)
    {
        if ($this->balance - $amount >= 0)
        {
            $this->balance = $this->balance - $amount;
            return "withdrawn";
        }
        else {
            return "Insufficient balance";
        }
    }
}
?>