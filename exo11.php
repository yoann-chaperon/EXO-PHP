<?php
  $tabYo['nom'] = "CHAPERON";
  $tabYo['prenom'] = "Yoann";
  $tabYo['age'] = 39;
  $tabYo['code postale'] = 35300;
  $tabYo['ville'] = "FOUGERES";
  $etat = rand(0,2);
if ($etat==0)
  $tabYo['état de santé'] ="sain";
elseif ($etat==1)
  $tabYo['état de santé'] ="porteur";
elseif ($etat==2)
  $tabYo['état de santé'] ="malade";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage du contenu d'un tableau</title>
</head>
<body>
    
<pre>
<?php
echo "Affichage du contenu d'un tableau<br>";

  foreach($tabYo as $k => $v)
    {
      echo'<p>'.$k.' : '.$v.'</p>';
    }
?>
</pre>
</body>
</html>