<?php 

class Prodotto {

    public $name;
    public $price;
    public $categoria;
    
    public function __construct($nome, $price)
    {
        $this->name = $nome;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price . "$";
    }

    public function setPrice($price) {
        $this->price = $price;
    }
    
    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
}

?>