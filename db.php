<?php
include_once __DIR__ . "/classes/Product.php";
include_once __DIR__ . "/classes/Food.php";
include_once __DIR__ . "/classes/Game.php";
include_once __DIR__ . "/classes/Kennel.php";
include_once __DIR__ . "/classes/Animal.php";

$dog = new Animal("Cane");
$cat = new Animal("Gatto");

$foods = [
    new Food("Croccantini", "https://www.cicalia.com/it/img/imgproducts/17563/l_17563.jpg", 1.50, "Friskies", "pollo", 500),
    new Food("Biscotti", "https://www.spesaalimentaresardegna.com/wp-content/uploads/PEDIGREE-BISCOTTI-CANE-BISCROK-500g-1-640x640.jpg", 3.89, "Pedigree", "manzo", 500),
];
$foods[0]->setCategory($cat->getName());
$foods[0]->setIcon($cat->getName());
$foods[1]->setCategory($dog->getName());
$foods[1]->setIcon($dog->getName());

$games = [
    new Game("Palline con campanella", "https://cdn.shopify.com/s/files/1/0524/0658/3462/products/set-2-palline-in-plastica-con-campanella-mixed-color.jpg?v=1666543991", 2.00, "Plastica", 120),
    new Game("Corda osso", "https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000", 4.13, "Poliestere", 200),
];
$games[0]->setCategory($cat->getName());
$games[0]->setIcon($cat->getName());
$games[1]->setCategory($dog->getName());
$games[1]->setIcon($dog->getName());

$kennels = [
    new Kennel("Cuccia per gatto", "https://m.media-amazon.com/images/I/51ntZoOc1oL._AC_SX425_.jpg", 69.90, "Plastica", 4),
    new Kennel("Cuccia per cane", "https://m.media-amazon.com/images/I/81pcjpygmzL._AC_SX425_.jpg", 109.32, "Resina", 12.7),
];
$kennels[0]->setCategory($cat->getName());
$kennels[0]->setIcon($cat->getName());
$kennels[1]->setCategory($dog->getName());
$kennels[1]->setIcon($dog->getName());