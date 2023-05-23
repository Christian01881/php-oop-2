<?php 

include __DIR__. '/../Models/Accessories.php';
include __DIR__. '/../Models/Food.php';
include __DIR__. '/../Models/Toy.php';

$products = [
    new Food('Cibo', 'Pet&Co', 35.50, './img/DogFood.jpg', 'Salmone', new Category('dog')),
    new Food('Cibo', 'PetLover', 25.00, './img/CatFood.jpg', 'Pollo', new Category('cat')),
    new Toy('Verde', 'Gioco', 'Pet&Co', 15.00, './img/DogToy.jpg', new Category('dog')),
    new Toy('Rosso', 'Gioco', 'PetLover', 11.00, './img/CatToy.jpg', new Category('cat')),
    new Accessories('Nylon', 'Accessorio', 'Pet&Co', 14.00, './img/DogAccessory.jpg', new Category('dog')),
    new Accessories('Nylon', 'Accessorio', 'PetLover', 12.50, './img/CatAccessory.jpg', new Category('cat'))       
];

var_dump($products);






