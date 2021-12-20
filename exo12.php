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
    <title>Etat de santé en Ille et Vialaine</title>
</head>
<body>
<pre>
<?php
echo "Etat de santé en Ille et Vialaine<br>";


foreach($tab as $tabs)
{
  foreach($tabs as $k =>$v )
    {
      echo'<p>'.$k.':'.$v.'</p>';
    }
       echo'<br>';
}
?>
</pre>
</body>
</html>