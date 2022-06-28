<?php
require_once __DIR__ . '/classes/creditCrad.php';

class User extends CreditCard{
    public $discount = 20;


    public function __construct($discount)
    {
        $this->discount = $_discount;
    }
}

?>