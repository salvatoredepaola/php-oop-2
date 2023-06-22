<?php 

class Cuccia extends Prodotto {

    private $taglia;

    public function __construct($name, $price, $categoria = "per tutti", $taglia = 0)
    {
        $this->name = $name;
        $this->price = $price;
        $this->categoria = $categoria;

        $this->taglia = $taglia;

    }

    public function getTaglia() {
        return $this->taglia . "cm";
    }

    public function setTaglia($taglia) {
        $this->taglia = $taglia;
    }
}

?>