<?php
include_once __DIR__ . "/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <ul class="container">
        <?php foreach($foods as $food) { ?>
            <li>
                <div class="card">
                    <?php echo "<img src=\"{$food->getImage()}\"/>" ?>
                </div>
                <h2 class="product-name"><?php echo $food->getName() ?></h2>
                <h4>Marca: <?php echo $food->getBrand() ?></h4>
                <h4>Confezione da: <?php echo $food->getGrams() ?>g</h4>
                <h4>Ingredienti: <?php echo $food->getIngredients() ?></h4>
                <h4>Prezzo: <?php echo "<span style=\"color: green;\">{$food->getPrice()}</span>" ?>€</h4>
                <div class="icon">
                    <?php echo "<img src=\"{$food->getIcon()}\"/>" ?>
                </div>
            </li>
        <?php } ?>
        <?php foreach($games as $game) { ?>
            <li>
                <div class="card">
                    <?php echo "<img src=\"{$game->getImage()}\"/>" ?>
                </div>
                <h2 class="product-name"><?php echo $game->getName() ?></h2>
                <h4>Materiale: <?php echo $game->getMaterial() ?></h4>
                <h4>Peso prodotto: <?php echo $game->getWeight() ?>g</h4>
                <h4>Prezzo: <?php echo "<span style=\"color: green;\">{$game->getPrice()}</span>" ?>€</h4>
                <div class="icon">
                    <?php echo "<img src=\"{$game->getIcon()}\"/>" ?>
                </div>
            </li>
        <?php } ?>
        <?php foreach($kennels as $kennel) { ?>
            <li>
                <div class="card">
                    <?php echo "<img src=\"{$kennel->getImage()}\"/>" ?>
                </div>
                <h2 class="product-name"><?php echo $kennel->getName() ?></h2>
                <h4>Materiale: <?php echo $kennel->getMaterial() ?></h4>
                <h4>Peso prodotto: <?php echo $kennel->getWeight() ?>Kg</h4>
                <h4>Prezzo: <?php echo "<span style=\"color: green;\">{$kennel->getPrice()}</span>" ?>€</h4>
                <div class="icon">
                    <?php echo "<img src=\"{$kennel->getIcon()}\"/>" ?>
                </div>
            </li>
        <?php } ?>
    </ul>
</body>
</html>