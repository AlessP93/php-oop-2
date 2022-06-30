<?php
require_once __DIR__ . '/product.php';

class House extends Product{
    public $material;
    public $size;
    public $price

    public function __construct($_material, $_size, $_price)
    {
        $this->type = $_material;
        $this->size = $_size;
        $this->price = $_price;
    }
}

?>