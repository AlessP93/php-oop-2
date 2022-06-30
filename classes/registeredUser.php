<?php


class registeredUser extends user{
    public $discount = 20;


    public function __construct($discount)
    {
        $this->discount = $_discount;
    }
}

?>