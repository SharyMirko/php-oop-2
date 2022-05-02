<?php

class Product {

    private $name;
    private $available;
    private $price;
    private $stock;
    private $brand;

    public function __construct($name, $avail, $price, $stock, $brand){
        $this->name = $name;
        $this->available = $avail;
        $this->price = $price;
        $this->stock = $stock;
        $this->brand = $brand;
        return $this;
    }
};

class CatFood extends Product{
    private array $ingrediants;
    public function setIngrediants($ing) {
        $this->ingrediants = $ing;
        return $this;
    }
}

$lol = new CatFood('TopoVivo', 'true', '12€', 245, 'Purina');
$lol->setIngrediants(['Topo', 'Carote', 'Umani']);

class Games extends Product{
    private array $materials;
    
    public function setMaterials($materials){
        $this->materials = $materials;
    }
}

$gioco = new Games('Giocattolo', 'true', '32€', 32, 'GiochiRischiosi');
$gioco->setMaterials(['curaro', 'pelle', 'acidi']);
var_dump($gioco);