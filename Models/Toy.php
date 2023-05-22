<?php

require_once __DIR__. '/Products.php';
require_once __DIR__. '/Category.php';

class Toy extends Products 
{
    public string $color;
    public Category $category;

    public function __construct($color, $name, $brand, $price, $image, Category $animalType)
    {
        parent::__construct($name, $brand, $price, $image);
        $this->color = $color;
        $this->category = $animalType;
    }

}