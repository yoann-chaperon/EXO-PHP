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
            background-color: #1ac;
            color : whitesmoke;
            padding: 20px;
            width: 50%;
            margin: auto;
            border: #511 10px ;
            border-style: none solid dotted dashed; 
         }
    </style>
    <title>recherche du mot "news" OR (ou) "confinement"</title>
</head>
<body>
<div>
    <?php 
        $connection = mysqli_connect("localhost", "yoann", "guizmo", "forum");
            if(!$connection){
                die("!$connection");
            }
    
            /*Dans ce cas, on affiche   
            la news dont le contenu comporte le mot « confinement »
            OR (OU)
            les news dont le titre possède le mot « news »
            */    

            else {
                $requete = mysqli_query($connection, "SELECT id, titre, contenu FROM news WHERE 
                    contenu LIKE '%confinement%'
                OR
                    titre LIKE'%news%'
                ");
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