<?php 

require_once __DIR__ . '/Products.php';
require_once __DIR__. '/Category.php';

class Accessories extends Products{
    public string $material;
    public Category $category;

    public function __construct($material, $name, $brand, $price, $image, Category $animalType)
    {
        parent::__construct($name, $brand, $price, $image);
        $this->material = $material;
        $this->category = $animalType;
    }
}