<?php 

require_once __DIR__. '/Products.php';

class Food extends Products 
{
    public string $taste;

    public function __construct($taste, $name, $brand, $price, $image)
    {
        parent::__construct($name, $brand, $price, $image);
        $this->taste = $taste;
    }
}