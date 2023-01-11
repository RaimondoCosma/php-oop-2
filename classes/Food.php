<?php
include_once __DIR__ . "/Product.php";

class Food extends Product{
    protected $brand;
    protected $ingredients;
    protected $grams;

    public function __construct(string $_name, string $_image, float $_price, string $_brand, string $_ingredients, int $_grams)
    {
        parent::__construct($_name, $_image, $_price);
        $this->brand = $_brand;
        $this->ingredients = $_ingredients;
        $this->grams = $_grams;
    }
    public function getGrams() {
        return $this->grams;
    }
    public function getIngredients() {
        return $this->ingredients;
    }
    public function getBrand() {
        return $this->brand;
    }
}