<?php 

$oggetiNelCarrello = file_get_contents('./js/dati.json');
$products = json_decode($oggetiNelCarrello, true);

$oggetiNelCarrello = json_encode($products);

echo $oggetiNelCarrello;

?>