<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table { border-collapse: collapse; margin:auto;}
        table, td, th { border: 2px solid greenyellow;}
        td, th { padding: 4px;}
        h1, h2 { text-align: center; }
        div { 
            background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
            background-size: 400% 400%;
            color : whitesmoke;
            padding: 20px;
            width: 100%;
            margin: auto;
            border: #511 10px ;
            border-style: none solid dotted dashed; 
            animation: change 10s ease-in-out infinite;
         }
         @keyframes change {
             0%{background-position: 0 50%}
             50%{background-position: 100% 50%}
             100%{background-position: 0 50%}
         }
    </style>
    <title>Les relations en PHP afficher en HTML</title>
</head>
<body>
<div>
    <?php 
        $connection = mysqli_connect("localhost", "yoann", "guizmo", "forum");

            if(!$connection){
                die("!$connection");
            }
            else { //envoyer la requete au serveur
                $query = "SELECT news.titre, membres.pseudo
                FROM news
                LEFT JOIN membres
                ON news.membre_id = membres.id;";

                $requete = mysqli_query($connection, $query);
                //echo $query; en cas de soucis enleve les /
    ?>
    <h1>Les relations en PHP afficher en HTML</h1>
    <table>
        <?php
                //lire chaque ligne de la table dans le tableau $resultat
            while($resultat = mysqli_fetch_assoc($requete)){
                    echo '<tr>';
                //extraire chaque élément du tableau dans la variable $champp et aussi afficher chaque ligne de la table
                foreach ($resultat as $champ){
                    echo"<td>$champ</td>";
                }
                echo"<br>";
                }    
            }
            ?>
            </table>
    </div>   
</body>
</html>