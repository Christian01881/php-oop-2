<?php 

require_once __DIR__. '/Products.php';

class Category extends Products
{
    public string $animalType;
    public string $icon;


    public function __construct($animalType, $icon, $name, $brand, $price, $image)
    {
        parent::__construct($name, $brand, $price, $image);
        $this->animalType = $animalType;
        $this->icon = $icon;
    }
}