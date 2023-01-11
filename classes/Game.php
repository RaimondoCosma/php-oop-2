<?php
include_once __DIR__ . "/Product.php";

class Game extends Product{
    protected $material;
    protected $weight;

    public function __construct(string $_name, string $_image, float $_price, string $_material, int $_weight)
    {
        parent::__construct($_name, $_image, $_price);
        $this->material = $_material;
        $this->weight = $_weight;
    }
    public function getMaterial() {
        return $this->material;
    }
    public function getWeight() {
        return $this->weight;
    }
}