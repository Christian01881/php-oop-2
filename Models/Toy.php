<?php

require_once __DIR__. '/Products.php';

class Toy extends Products 
{
    public string $color;

    public function __construct($color, $name, $brand, $price, $image)
    {
        parent::__construct($name, $brand, $price, $image);
        $this->color = $color;
    }

}