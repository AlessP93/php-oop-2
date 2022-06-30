<?php

class Product {
    public $name;
    public $price;
    public $quantity;
    public $animal_type;

    public function __construct(string $_name,  float $_price, int $_quantity, string $_animal_type = "")
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->aniaml_type = $_aniaml_type;
    }
}

?>