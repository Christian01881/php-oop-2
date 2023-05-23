<?php 

require_once __DIR__. '/Products.php';

class Category
{
    public string $animalType;
    public string $icon;


    public function __construct($animalType)
    {
        $this->animalType = $animalType;
        $this->icon = $this->Icon($animalType);
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

