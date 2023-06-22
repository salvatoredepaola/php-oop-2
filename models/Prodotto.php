<?php 

require_once __DIR__ . "/../traits/Publishable.php";
class Prodotto {

    use Publishable;

    public $name;
    public $img;
    public $price;
    public $categoria;

    
    public function __construct($nome, $img, $price)
    {
        $this->name = $nome;
        $this->img = $img;
        $this->price = $price;

    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getImg() {
        return $this->img;
    }

    public function setImg($img) {
        $this->img = $img;
    }

    public function getPrice() {

        if ($this->price == 0 ) {
            throw new Exception("prezzo non definito");
        }

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