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
    <title>Insérer plusieurs membres en PHP </title>
</head>
<body>
<div>
    <h1>Insérer plusieurs membres en PHP sur mon FOFO</h1>
    <h2>clic sur F5 :)  !!!</h2>
    <?php 
        $connection = mysqli_connect("localhost", "yoann", "guizmo", "forum");
            if(!$connection){
                die("!$connection");
            }
    
            /*Si on reprend les détails de la requête INSERT :
                •	On voit qu’elle commence par l’instruction « INSERT »
                •	Puis le nom de la table : « news »
                •	Puis la liste des champs entre parenthèses : (id, titre, contenu)
                •	Puis le mot-clef VALUES
                •	Et enfin les valeurs à ajouter dans l’ordre de la liste des champs.
            */    

            else { //envoyer la requete au serveur
                $query = "INSERT INTO `membres`(`Id`, `pseudo`, `age`, `email`, `password`) 
                VALUES ('NULL','yoann','29','yoyo@to.com','tooto35'),
                        ('NULL','pierre louis','61','prof@to.com','afpato35'),
                        ('NULL','fredo','49','fredy@too.com','tyto35'),
                        ('NULL','Oliv','50','oliv@af.com','fo35300'),
                        ('NULL','Dom','40','dom@fg.com','lm333'),
                        ('NULL','Yas','39','yas45@po.com','kifiran');";
                $requete = mysqli_query($connection, $query);
            }?>
</div>   
</body>
</html>