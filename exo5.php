<?php
$etoile= '*';
$nombre= '8';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {background-color: blue; color: white}
    </style>
    <title>le carré d'étoiles</title>
</head>
<body>
    <h1>le carré d'étoiles</h1>
    <div>
    <!--2 premières lignes-->
<pre>
<?php
for ($i =0; $i < 2; $i++) {
    for ($o = 0; $o < $nombre; $o++) {
        echo "$etoile";  
    }
    echo '<br>';
}   
/* 1 et 8 */#
for ($i =0; $i < 3; $i++) {
    for ($o = 0; $o < $nombre; $o++) {
        if ($o==0 || $o == $nombre-1) echo "$etoile";  
        else echo "&nbsp";
    }
    echo '<br>';
}  

/*derniere ligne*/
for ($o = 0; $o < $nombre; $o++) {
    echo "$etoile";  
}  
?>  
</pre>
    </div>   
</body>
</html>