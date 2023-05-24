<?php 

require_once __DIR__. '/Products.php';
require_once __DIR__. '/Category.php';
require_once __DIR__. '/../Traits/Weight.php';


class Food extends Products
{
    use Weight; 
    public string $taste;
    public Category $category;

    public function __construct($name, $brand, $price, $image, $taste, Category $animalType, $weight, $unit)
    {
        parent::__construct($name, $brand, $price, $image);
        $this->taste = $taste;
        $this->category = $animalType;
        try {
            $this->setWeight($weight, $unit);
        } catch (Exception $e) {
           echo 'Errore: '.$e->getMessage();
        }
    }
}