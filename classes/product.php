<?php

class Product {
    public $name;
    public $price;
    public $quantity;
    public $aniaml_type;

    public function __construct($_name, $_price, $_quantity, $_aniaml_type)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->aniaml_type = $_aniaml_type;
    }

}

?>