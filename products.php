<?php

class Product {

    private $available;
    private $price;
    private $stock;
    private $brand;

    public function __construct($avail, $price, $stock, $brand){
        $this->available = $avail;
        $this->price = $price;
        $this->stock = $stock;
        $this->brand = $brand;
        return $this;
    }
};

class CatFood extends Product{
    private $name;
    private array $ingrediants;

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setIngrediants($ing) {
        $this->ingrediants = $ing;
        return $this;
    }
}
$lol = new CatFood('true', '12€', 245, 'Purina');
$lol->setName('TopoVivo');
$lol->setIngrediants(['Topo', 'Carote', 'Umani']);
var_dump($lol);