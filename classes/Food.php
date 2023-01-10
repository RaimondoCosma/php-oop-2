<?php
include_once __DIR__ . "/Product.php";

class Food extends Product{
    public $brand;
    public $ingredients;
    public $grams;

    public function __construct(string $_name, string $_image, float $_price, string $_brand, string $_ingredients, int $_grams)
    {
        parent::__construct($_name, $_image, $_price);
        $this->brand = $_brand;
        $this->ingredients = $_ingredients;
        $this->grams = $_grams;
    }
}