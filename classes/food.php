<?php
 require_once __DIR__ . '/classes/product.php';

 class Food extends Product{
    public $type;
    public $expire_date;
  
    public function __construct($_type, $_expire_date)
    {
        $this->type = $_type;
        $this->expire_date = $_expire_date;
    }
}

?>