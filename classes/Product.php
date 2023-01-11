<?php
class Product {
    protected $name;
    protected $image;
    protected $price;
    protected $category;
    protected $icon;

    public function __construct(string $_name, string $_image, float $_price)
    {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
    }
    public function getName(){
        return $this->name;
    }
    public function getImage(){
        return $this->image;
    }
    public function getPrice(){
        return number_format((float)$this->price, 2, '.', '');
    }
    public function setCategory($_category){
        $this->category = $_category;
    }
    public function getCategory(){
        return $this->category;
    }
    public function setIcon() {
        if( strtolower($this->category) === "gatto" ) {
            $this->icon = "https://cdn-icons-png.flaticon.com/512/91/91473.png?w=360";
        } elseif ( strtolower($this->category) === "cane" ) {
            $this->icon = "https://cdn-icons-png.flaticon.com/512/91/91544.png";
        }
    }
    public function getIcon() {
        return $this->icon;
    }
}
