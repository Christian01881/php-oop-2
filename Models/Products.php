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

    public function getImage()
    {
        return "<img class='card-img-top CPM-img    ' src='$this->image' alt=''>";
    }

    public function Icon($animalType)
    {
        if($animalType == 'dog'){
          return '<i class="fa-solid fa-dog"></i>';  
        }
        else{
            return '<i class="fa-solid fa-cat"></i>';
        }
    }
}