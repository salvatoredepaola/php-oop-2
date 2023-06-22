<?php 

class Gioco extends Prodotto {

    private $materiale;

    public function __construct($name, $price, $categoria = "per tutti", $materiale = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->categoria = $categoria;

        $this->materiale = $materiale;

    }

    public function getMateriale() {
        return $this->materiale;
    }

    public function setMateriale($materiale) {
        $this->materiale = $materiale;
    }
}

?>