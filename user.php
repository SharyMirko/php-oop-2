<?php

class User {
    private $userName;
    private $userEmail;
    private array $userCreditCard;

    public function __construct($name, $email, $pay){
        $this->userName = $name;
        $this->userEmail = $email;
        $this->userCreditCard = $pay;
        return $this;
    }
};

class Registred extends User {
    private $password;
    private $discount = 20;

    public function setPassword($pass) {
        $this->password = $pass;
    }
}

$obj = new Registred('mirko', 'shary@mirko.it', [3243432432, '02/28']);
$obj->setPassword('password34');
var_dump($obj);