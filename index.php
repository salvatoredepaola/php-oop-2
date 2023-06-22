<?php 

require __DIR__ . "/models/Prodotto.php";
require __DIR__ . "/models/Cibo.php";
require __DIR__ . "/models/Gioco.php";
require __DIR__ . "/models/Cuccia.php";

$cibo = new Cibo ("cibo", 9.99);
$cibo->setCategoria("per cani");
$cibo->setQuantita(80);

var_dump($cibo);

$pallina = new Gioco ("pallina", 5.99);
$pallina->setCategoria("per gatti");
$pallina->setMateriale("lana");

var_dump($pallina);

$cuccia = new Cuccia("cuccia", 29.99);
$cuccia->setTaglia(20);

var_dump($cuccia);

$prodotti = [$cibo, $pallina, $cuccia]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php foreach ($prodotti as $prodotto) { ?>
        <h1>Nome prodotto <?= $prodotto->getName()?></h1>
        <h3>Prezzo <?= $prodotto->getPrice() ?> </h3>
        <h3>Categoria <?= $prodotto->getCategoria() ?></h3>
        
        <?php if ($prodotto instanceof Cibo) { ?>
            <h3>Quantità: <?= $prodotto->getQuantita() ?></h3>
        <?php } elseif ($prodotto instanceof Gioco) { ?>
            <h3>Materiale: <?= $prodotto->getMateriale() ?></h3>
        <?php } elseif ($prodotto instanceof Cuccia) { ?>
            <h3>Taglia: <?= $prodotto->getTaglia() ?></h3>
        <?php } ?>
        
        
    <?php } ?>
</body>
</html>