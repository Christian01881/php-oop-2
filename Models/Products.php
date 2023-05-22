<?php 

class Products {
    public string $name;
    public string $brand;
    public float $price;
    public string $image;


    public function __construct($name, $brand, $price, $image)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->image = $image;
    }
}