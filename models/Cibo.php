<?php 

class Cibo extends Prodotto {

    public $kcal = 0;

    function __construct($name, $img, $price, $categoria = "per tutti", $kcal = 0)
    {
        $this->name = $name;
        $this->img = $img;
        $this->price = $price;
        $this->categoria = $categoria;

        $this->kcal = $kcal;

    }

    public function getQuantita() {
        return $this->kcal . "kcal";
    }

    public function setQuantita($kcal) {
        $this->kcal = $kcal;
    }

    public function getKcal() {
        return $this->kcal;
    }

    public function setKcal($kcal) {
        $this->kcal = $kcal;
    }
}

?>