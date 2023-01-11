<?php

trait ObjectDetails{
    protected $material;
    protected $weight;
    
    public function getMaterial() {
        return $this->material;
    }
    public function getWeight() {
        return $this->weight;
    }
}