<?php  
//$connection = mysqli_connect("nom_hote", "utilisateur", "mot_de_passe", "base_de_donnees");
$connection = mysqli_connect("localhost", "yoann", "guizmo", 'forum');

//conntrôle sur la connexion
if (!$connection){//Si la connexion n'a pas été effectué=false
    die ("$connection");//arrêter le programme avec la fonction die(message)
}
else {
    echo "connexion réussie";// Caaa Marche !!!!
}
?>