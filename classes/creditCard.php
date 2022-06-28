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
        $this->number = $_number;
        $this->expire_date = $_expire_date;
        $this->brand = $_brand;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->cvc = $_cvc;
    }
}

?>