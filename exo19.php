<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table { border-collapse: collapse; margin:auto;}
        table, td, th { border: 1px solid red;}
        td, th { padding: 4px;}
        div { 
            background-color: #aac;
            color : whitesmoke;
            padding: 20px;
            width: 50%;
            margin: auto;
            border: peru 10px ;
            border-style: none solid dotted dashed; 
         }
    
    </style>
    <title>Lire le tableau de naws</title>
</head>
<body>
<div>
    <?php 
        $connection = mysqli_connect("localhost", "yoann", "guizmo", "forum");
            if(!$connection){
                die("!$connection");
            }
            else {
                $requete = mysqli_query($connection, "SELECT * FROM news");
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