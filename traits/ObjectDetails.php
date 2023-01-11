<?php

trait ObjectDetails{
    protected $material;
    protected $weight;

    public function getMaterial() {
        return $this->material;
    }
    public function setWeight($float) {
        if( !is_float($float) ) {
            throw new Exception("Per impostare il peso prova ad inserire un decimale con almeno un numero dopo la virgola!");
        }
        $this->weight = $float;
    }
    public function getWeight() {
        return $this->weight;
    }
}