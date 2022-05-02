<?php

class User {
    private $userName;
    private $userEmail;
    private array $userCreditCard;

    public function __construct($name, $email, $pay){
        $this->userName = $name;
        $this->userEmail = $email;
        $expires = DateTime::createFromFormat($pay[1]);
        $now = new DateTime();
        if ($expires > $now) {
            $this->userCreditCard = $pay;
            var_dump($expires);
        } else {
            $this->userCreditCard = ['è', 'scaduta'];
        }
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

$obj = new Registred('mirko', 'shary@mirko.it', [3243432432, '02/2009']);
$obj->setPassword('password34');
var_dump($obj);

