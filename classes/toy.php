<?php
require_once __DIR__ . '/product.php';

class Toy extends Product{
    public $type;
    public $size;

    public function __construct($_type, $_size)
    {
        $this->type = $_type;
        $this->size = $_size;
    }
}

?>