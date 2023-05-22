<?php 

require_once __DIR__. '/Products.php';
require_once __DIR__. '/Category.php';


class Food extends Products
{
    public string $taste;
    public Category $category;

    public function __construct($name, $brand, $price, $image, $taste, Category $animalType)
    {
        parent::__construct($name, $brand, $price, $image);
        $this->taste = $taste;
        $this->category = $animalType;
    }
}