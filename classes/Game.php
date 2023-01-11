<?php
include_once __DIR__ . "/Product.php";
include_once __DIR__ . "/../traits/ObjectDetails.php";

class Game extends Product{
    use ObjectDetails;

    public function __construct(string $_name, string $_image, float $_price, string $_material)
    {
        parent::__construct($_name, $_image, $_price);
        $this->material = $_material;
    }
}