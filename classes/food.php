<?php
 require_once __DIR__ . '/product.php';

 class Food extends Product{
    public $type;
    public $expire_date;
  
    public function __construct(string $_name,  float $_price, int $_quantity, $_type, $_expire_date, string $_animal_type = "")
    {
        parent::__construct($_name, $_price, $_quantity, $_aniaml_type)
        
        $this->type = $_type;
        $this->expire_date = $_expire_date;
    }
}

?>