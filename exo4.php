<?php
$prix_table = 150;
$prix_armoire = 50;
$Nombre = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .élevé {color: red; font-size:1.2em}
    </style>
    <title>exo4.php</title>
</head>
<body>
    <div>
    <h1 style="color: red;"><em>Voici les prix de nos produits</em></h1>

    <!--prix des tables-->
    <?php $somme_1 = $Nombre * $prix_table ;?>
        <p>Le prix de <?=$Nombre ?> tables est de <?=$somme_1 ?>€.</p>
    <!--prix des armoires-->
    <?php $somme_2 = $Nombre * $prix_armoire ;?>
        <p>Le prix de <?=$Nombre ?> armoires est de <?=$somme_2 ?>€.</p>

    <!--afficher le prix le plus élevé-->
    <?php if ($prix_table > $prix_armoire) :?>
            <p>Le prix le plus élevé est <span class="élevé"><?=$prix_table ?>€</span>.</p>

    <?php else: ?>
        <p>Le prix le plus élevé est <span class="élevé"><?=$prix_armoire ?>€</span>.</p>

    <?php endif ?>
    </div>
</body>
</html>