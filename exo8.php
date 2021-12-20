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
    body {background-color:#1f5}
    table {border:5px solid #824;background-color: blue; color: white;border-radius:15px}
    td, h2 {border:1px solid #2ff; margin:0; padding:10px;}
  </style>  
    <title>tableau n°2</title>
</head>
<body>
    <table>
        <tr>
            <th>
                <h2>Listes des auteurs</h2>
            </th>
        </tr>
                <?php 
            foreach($prenoms as $element) 
                {echo '<tr><td>'.$element .'</td></tr>';
        }  ?>
    </table>
</body>
</html>