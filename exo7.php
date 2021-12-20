<?php
$prenoms = [
    "Victor Hugo", 
    "Charles Baudelaire", 
    "Arthur Rimbaud", 
    "Paul Verlaine"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {background-color:#f5c}
    table {border:5px solid green;background-color: blue; color: white;border-radius:15px; padding: 25px}
  </style>  
    <title>tableau n°1</title>
</head>
<body>
    <table>
        <tr>
            <th>
                <h2>Listes des auteurs</h2>
            </th>
        </tr>
        <tr>
            <th>
                <?php 
            foreach($prenoms as $element) {
                echo $element;
                echo'<br>';
        } ?>
            </th>
    </table>
</body>
</html>