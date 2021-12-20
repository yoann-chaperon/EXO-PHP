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
    <title>Les ALias</title>
</head>
<body>
<div>
    <h1>Les Alias</h1>
    <?php 
        $connection = mysqli_connect("localhost", "yoann", "guizmo", "forum");

            if(!$connection){
                die("!$connection");
            }
            else { //envoyer la requete au serveur
                $query = "SELECT n.titre, m.pseudo
                FROM news n
                LEFT JOIN membres m
                ON n.membre_id = m.id;";

                $requete = mysqli_query($connection, $query);
                echo $query; 
            }?>
    
    </div>   
</body>
</html>