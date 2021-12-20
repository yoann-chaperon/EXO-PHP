<?php
function calcEtat() {
    $etat = rand(0,2);
    
    if ($etat==0)
      return 'sain';
    elseif ($etat==1)
      return 'porteur';
    elseif ($etat==2)
      return 'malade';
}
$tab = [ 
            [
                'nom' => "CHAPERON",
                'prenom' => "Yoann",
                'age' => 39,
                'code postale' => 35300,
                'ville' => "FOUGERES",
                'état de santé' => calcEtat(),
            ],
            
            [
               'nom' => "JACQUIE",
               'prenom' => "Michel",
               'age' => 45,
               'code postale' => 35800,
               'ville' => "MONT SAINT MICHEL",
               'état de santé' => calcEtat(),
            ],
            [
                'nom' => "MOUSSE",
                'prenom' => "Mickey",
                'age' => 120,
                'code postale' => 35000,
                'ville' => "RENNES",
                'état de santé' => calcEtat(),   
            ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {background-color:#1aa;color:white}
    table {border:5px solid #c58;background-color: blue; color: white;border-radius:15px}
    th, td {border:1px solid #1f2; margin:0; padding:10px;}
  </style>
    <title>Etat de santé en Ille et Vialaine</title>
</head>
<body>
<table>
    <tr>
<?php

echo'<pre>';
print_r($tab);
echo'</pre>';

        echo "<tr>
        <th>nom</th>
        <th>prenom</th>
        <th>age</th>
        <th>code postale</th>
        <th>ville</th>
        <th>état de santé</th>
        </tr>";

        foreach($tab as $tabs)
        {echo '<tr>';
        foreach($tabs as $k =>$v )
            {
            echo'<td>'.$v.'</td>';
            }
         echo '</th>';   
        }
?>
</table>
</body>
</html>