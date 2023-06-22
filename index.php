<?php 

require __DIR__ . "/models/Prodotto.php";
require __DIR__ . "/models/Cibo.php";
require __DIR__ . "/models/Gioco.php";
require __DIR__ . "/models/Cuccia.php";

$products = [
    new Cibo ("cibo","https://picsum.photos/200", 5.99,"per cani", 80),
    new Gioco ("pallina","https://picsum.photos/200", 5.99, "per cani", "gomma"),
    new Cuccia("cuccia","https://picsum.photos/200", 29.99, "per gatti", 40),
    new Cuccia("cuccia","https://picsum.photos/200", 29.99, "per gatti", 40)
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
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<div id="app">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Prodotti</h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($products as $product) { ?>
            
                <!-- STAMPA SOLO I PRODOTTI PUBBLICATI -->
            
                <?php if($product->getPublished()) { ?>
            
                <div class="col">
                    <div class="card h-100">
                        <img src="<?= $product->getImg() ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nome prodotto: <?= $product->getName()?></h5>

                            <p class="card-text">Categoria:<?= $product->getCategoria() ?></p>
                            
                            <?php if ($product instanceof Cibo) { ?>
                                <p class="card-text">Quantità: <?= $product->getQuantita() ?></p>
                            <?php } elseif ($product instanceof Gioco) { ?>
                                <p class="card-text">Materiale: <?= $product->getMateriale() ?></p>
                            <?php } elseif ($product instanceof Cuccia) { ?>
                                <p class="card-text">Taglia: <?= $product->getTaglia() ?></p>
                            <?php } ?>

                            <h5>Prezzo: <?php 
                            try {
                               echo $product->getPrice();
                            } catch (Exception $e) {
                               echo "Prezzo non disponibile"; 
                            }
                            ?> 
                            </h5>
                        </div>
                    </div>
                </div>
                <?php } ?>               
            <?php } ?>
        </div>
    </div>


</div>

<script src="./js/main.js"></script>

</body>
</html>