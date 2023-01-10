<?php
include_once __DIR__ . "/classes/Product.php";
include_once __DIR__ . "/classes/Cat.php";
include_once __DIR__ . "/classes/Dog.php";

$prova = new Product("prova", "http//prova", 24.5);
$prova->setCategory("Cane");
var_dump($prova);