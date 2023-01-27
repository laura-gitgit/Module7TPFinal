<?php
    $id_restaurant = $_GET['idRestaurant'];
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
    <?php
        require_once 'modele/ModeleRestaurant.php';
        require_once 'modele/AccesDonnees.php';
        $restaurant = new ModeleRestaurant();
    ?>
<div class="menu">
    <ul>
        <li><a href="index.php">Restaurants Préférés</a></li>
        <li><a href="">Contact</a></li>
    </ul>

</div>
<h1></h1>
<div class="restaurants">
    <?php

    $donnees = $restaurant->getRestaurant($id_restaurant);
    echo '<h1>'.$donnees['nom'].'</h1>';
    echo '<p>'.$donnees['adresse'].'</p>';
    echo '<p>'.$donnees['cp']." ".$donnees['ville'].'</p>';
    echo '<p>'.$donnees['telephone'].'</p>';
    echo '<h2>Description</h2>';
    echo '<p>'.$donnees['description'].'</p>';
    echo '<h1>Avis</h1>';
    echo '<p>'.$donnees['auteur']." : ".$donnees['note'].'</p>';
    echo '<p>'.$donnees['commentaire'].'</p>';


    ?>
</div>
</body>
</html>
