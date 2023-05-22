<?php 

include __DIR__. '/../Models/Accessories.php';
include __DIR__. '/../Models/Food.php';
include __DIR__. '/../Models/Toy.php';

$products = [
    new Food('Cibo', 'Pet&Co', 35.50, '', 'Salmone', new Category('dog')),
    new Food('Cibo', 'PetLover', 25.00, '', 'Pollo', new Category('cat')),
    new Toy('Verde', 'Gioco', 'Pet&Co', 15.00, '', new Category('dog')),
    new Toy('Rosso', 'Gioco', 'PetLover', 11.00, '', new Category('cat')),
    new Accessories('Nylon', 'Accessorio', 'Pet&Co', 14.00, '', new Category('dog')),
    new Accessories('Nylon', 'Accessorio', 'PetLover', 12.50, '', new Category('cat'))       
];

var_dump($products);






