<?php
include __DIR__. '/data/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header class="d-flex justify-content-center align-items-center style">
        <h1>PetShop</h1>
    </header>

    <main class="container d-flex justify-content-center align-items-center mt-5 flex-wrap gap-3">
        <?php foreach($products as $product) { ?>
        <div class="card text-center CPM-card mt-5">
            <?php echo $product->getImage() ?>
            <div class="card-body">
                <h4 class="card-title"><?php echo $product->name ?></h4>
                <p><?php echo $product->Icon($product->category->animalType) ?></p>
                <p><span><strong>Prezzo: </strong></span><?php echo $product->price ?> €</p>
                <?php  if(is_a($product, 'Food')) { ?>
                    <p><span><strong>Gusto: </strong></span><?php echo $product->taste ?></p>
                <?php } ?>
                <?php  if(is_a($product, 'Toy')) { ?>
                    <p><span><strong>Colore: </strong></span><?php echo $product->color ?></p>
                <?php } ?>
                <?php  if(is_a($product, 'Accessories')) { ?>
                    <p><span><strong>Materiale: </strong></span><?php echo $product->material ?></p>
                <?php } ?>
                <p><span><strong>Marca: </strong><?php echo $product->brand ?></span></p>
                <p><?php if(property_exists($product, 'weight')) { ?>
                    <?php echo  $product->getWeight() ?>
                <?php } ?></p>
            </div>
        </div>      
        <?php } ?>
        
    </main>

    <footer class="d-flex justify-content-center align-items-center mt-5 style ">
        <h4>Made with &hearts; by Christian</h4>
    </footer>


</body>
</html>