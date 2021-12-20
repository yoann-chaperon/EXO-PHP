<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table { border-collapse: collapse; margin:auto;}
        table, td, th { border: 1px solid greenyellow;}
        td, th { padding: 4px;}
        div { 
            background-color: #12ac;
            color : whitesmoke;
            padding: 20px;
            width: 50%;
            margin: auto;
            border: #5ff 10px ;
            border-style: none solid dotted dashed; 
         }
    </style>
    <title>Lire le tableau de news</title>
</head>
<body>
<div>
    <?php 
        $connection = mysqli_connect("localhost", "yoann", "guizmo", "forum");
            if(!$connection){
                die("!$connection");
            }
    
            /*Nous voulons afficher uniquement les news dont le id est supérieur ou égal à 3 : */    

            else {
                $requete = mysqli_query($connection, "SELECT id, titre, contenu FROM news WHERE id >='3'");
    ?>
    <table>
        <?php     
            while ($resultat = mysqli_fetch_assoc($requete)) {
                echo'<tr>';
                foreach($resultat as $champ) {
                    echo '<td>'.$champ.'</td>';
                }
                    echo '</tr>';
            }
        }
        ?>
    </table> 
</div>
    
</body>
</html>