<?php
class Product {
    protected $name;
    protected $image;
    protected $price;
    private $category;

    public function __construct(string $_name, string $_image, float $_price)
    {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
    }
    public function setCategory($_category){
        $this->category = $_category;
    }
    public function getCategory(){
        return $this->category;
    }
}
