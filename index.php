<?php
 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurants</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="index.php">Restaurants Préférés</a></li>
            <li><a href="">Contact</a></li>
        </ul>

    </div>
    <h1>Vos restaurants préférés</h1>
    <?php
        require_once 'modele/ModeleRestaurant.php';
        require_once 'modele/AccesDonnees.php';
        $listeRestaurant = new ModeleRestaurant();
    ?>
    <div class="restaurants">
        <?php
        foreach ($listeRestaurant->getRestaurants() as $item) {
            echo '<a href="restaurant.php?idRestaurant='.$item['idRestaurant'].'">'.$item['nom'].'</a>';
            echo '<p>'.$item['ville'].'</p>';
            echo '<p>'.$item['description'].'</p>';
        }
        ?>
    </div>
</body>
</html>