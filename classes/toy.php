<?php

class Toy {
    public $type;
    public $size;

    public function __construct($_type, $_size)
    {
        $this->type = $_type;
        $this->size = $_size;
    }
}

?>