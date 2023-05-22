<?php 

require_once __DIR__ . '/Products.php';

class Accessories extends Products{
    public string $material;

    public function __construct($material, $name, $brand, $price, $image)
    {
        parent::__construct($name, $brand, $price, $image);
        $this->material = $material;
    }
}