<?php
$note = 
[
    5,
    12,
    8,
    20,
    10,
];

$note[] =9;
$note[1] = 18;
$somme = 0;
$not10 = 0;
?>

<!--afficher le tableau-->
<?php
echo '<pre>';
    print_r ($note);
echo '</pre>';
//  ou comme ça !!! 
foreach($note as $k => $v)
    echo'<p>'.$k.' : '.$v.'</p>';

//  taille tableau

$tailleNote = sizeof($note);
    echo $tailleNote;

//  Calculer  la  moyenne
    for ($i=0; $i <count($note ); $i++)
    {
        $somme= $somme + $note[$i];
        }
        $moyenne = $somme/count($note);
        echo '<p>La moyenne vaut: '.$moyenne.'</p>'."\n";
// note au dessus de 10 
foreach($note as $data)
{
        if($data >= 10)
        {
            $not10++;
        }
    }
        echo '<p>Il y a '.$not10.' supérieurs ou égaux à 10 !</p>';
    
//  Teste si la note 20 est présente ou non
        if (in_array(20, $note, true))
        {
            echo '<p> la note de 20 est dans le tableau.</p>'."\n";
        }
// meilleure note
rsort($note);
echo 'La meilleure note est '.$note[0];
?>

