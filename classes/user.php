<?php
require_once __DIR__ . '/classes/creditCrad.php';

class User extends CreditCard{
    public $name;
    public $surname;
    public $email;
    public $discount = 0;
    public $credit_card;

    public function __construct($_name, $_surname, $_email, $_discount, $_credit_card)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->credit_card = $_credit_card;
    }
}

?>