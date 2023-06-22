<?php 

require __DIR__ . "/models/Prodotto.php";
require __DIR__ . "/models/Cibo.php";
require __DIR__ . "/models/Gioco.php";
require __DIR__ . "/models/Cuccia.php";

$products = [
    new Cibo ("cibo", 0,"per cani", 80),
    new Gioco ("pallina", 5.99, "per cani", "gomma"),
    new Cuccia("cuccia", 29.99, "per gatti", 40)
];

// TUTTI I PRODOTTI SONO PUBBLICATI

foreach ($products as $product) {
    $product->setPublish();
}

// $products[0]->setUnPublish();

// var_dump($products)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php foreach ($products as $product) { ?>

        <!-- STAMPA SOLO I PRODOTTI PUBBLICATI -->

        <?php if($product->getPublished()) { ?>


        <h1>Nome prodotto <?= $product->getName()?></h1>
        <h3>Prezzo: <?php 
        try {
           echo $product->getPrice();
        } catch (Exception $e) {
           echo "Prezzo non disponibile"; 
        }
        ?> 
        </h3>
        <h3>Categoria <?= $product->getCategoria() ?></h3>
        
        <?php if ($product instanceof Cibo) { ?>
            <h3>Quantità: <?= $product->getQuantita() ?></h3>
        <?php } elseif ($product instanceof Gioco) { ?>
            <h3>Materiale: <?= $product->getMateriale() ?></h3>
        <?php } elseif ($product instanceof Cuccia) { ?>
            <h3>Taglia: <?= $product->getTaglia() ?></h3>
        <?php } ?>


        <?php } ?>
        
        
    <?php } ?>
</body>
</html>