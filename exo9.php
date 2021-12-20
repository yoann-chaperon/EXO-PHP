<?php
$prenoms = [
    "Victor Hugo", 
    "Charles Baudelaire", 
    "Arthur Rimbaud", 
    "Paul Verlaine"
];
$taillePrenoms = sizeof($prenoms)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {background-color:#1aa}
    table {border:5px solid #a11;background-color: blue; color: white;border-radius:15px}
    th, td {border:1px solid #1d5; margin:0; padding:10px;}
  </style>  
    <title>tableau n°3</title>
</head>
<body>
    <table>
        <tr>
    <thead>
        <tr>
            <th colspan="2">Listes des auteurs</th>
        </tr>

        </tr>
                <?php 
            for($i =0; $i<$taillePrenoms; $i++) 
            {
                echo'<tr>
                <td>'.$i.'</td>
                <td> '.$prenoms [ $i ],'</td>
                </tr>';
            } ?>
    </table>
</body>
</html>