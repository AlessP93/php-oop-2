<?php

class CreditCard {
    public $number;
    public $expire_date;
    public $brand;
    public $name;
    public $surname;
    public $cvc;
   
    public function __construct($_number, $_expire_date, $_brand, $_name, $_surname, $_cvc)
    {
        $this->name = $_name;
        $this->price = $_price;
    }
}

?>