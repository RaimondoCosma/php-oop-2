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
</head>
<body>
    <ul>
        <?php foreach($foods as $food) { ?>
            <li>
                <?php echo "<img src=\"{$food->image}\"/>" ?>
                <h2><?php echo $food->name ?></h2>
                <h4><?php echo $food->brand ?></h4>
            </li>
        <?php } ?>
    </ul>
</body>
</html>