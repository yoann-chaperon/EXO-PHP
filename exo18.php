<?php  
//$connection = mysqli_connect("nom_hote", "utilisateur", "mot_de_passe", "base_de_donnees");
$connection = mysqli_connect("localhost", "yoann", "guizmo", 'forum');

//conntrôle sur la connexion
if (!$connection){//Si la connexion n'a pas été effectué=false
    die ("$connection");//arrêter le programme avec la fonction die(message)
}
else { // envoyer la requête au serveur
        $requete = mysqli_query($connection,"SELECT * FROM news");

while ($resultat = mysqli_fetch_assoc($requete)) {// lire le résultat dans le tableau $resultat Si on désire uniquement un résultat avec des clefs nommées, on utilisera :" mysqli_fetch_assoc " pour associative
    foreach($resultat as $champ){
    echo $champ.'<br>';
        }
    }
}
?>