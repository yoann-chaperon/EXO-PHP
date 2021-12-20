<?php  
$connection = mysqli_connect("localhost", "yoann", "guizmo", "forum");

        if(!$connection){
            die("connection impossible");
        }
        //====================================================================
        echo '<pre>';
        print_r($_POST);//========ceci est pour affiché le tableau ==========>
        echo '</pre>';
        //====================================================================
        if(isset ($_POST['submit'])){//tester la présence du bouton « Submit » avec la fonction isset(nom de variable)
        
        //====================================================================
        //UPDATE nom de la table
        //SET champ1='valeur'
        //et champ 2 3 4
        //WHERE condition
        $query = "UPDATE membres                         
                SET pseudo ='".$_POST['pseudo']."',
                    age = '".$_POST['age']."',
                    password = '".$_POST['password']."',
                    email = '".$_POST['email']."'
                    WHERE id ='".$_POST['id']."';";
                    echo $query;
        $requete = mysqli_query($connection, $query); 
        header("Location: exo35.php");
        exit();           
        }
        //else n'est pas utile car en cas de non connexion, le script s'arrête avec die()
        // la suite du code n'est pas exécuté.
        //envoyer la requête au serveur
        $id = $_GET['id'];
        $query = "SELECT *FROM membres
        WHERE id = '".$id."'";
        print_r($query);
        $requete = mysqli_query($connection, $query);
        //lire les données renvoyées par le serveur dans le tableau $resultat
        //il n'y a qu'une seule ligne de table = un seul membre
        //donc pas de boucle while
        $resultat = mysqli_fetch_assoc($requete);
        print_r($resultat)
        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulaire profil membre</title>
    <style>
      h1 { text-align: center;}
      body { 
            background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
            background-size: 400% 400%;
            color : whitesmoke;
            padding: 200px;
            animation: change 10s ease-in-out infinite;
         }
         @keyframes change {
             0%{background-position: 0 50%}
             50%{background-position: 100% 50%}
             100%{background-position: 0 50%}
         }
      .box {position: absolute; 
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 40px;
            background: rgba(0, 0, 0, .4);
            box-sizing: border-box;
            box-shadow: 0 15px 25px ;
            border-radius :10px;
            }
       .box .inputBox {
           position: relative;
            }
            .box .inputBox input {
                width: 100%;
                padding: 10px 10px;
                font-size: 16px;
            }
  </style>
  <title>Formulaire profil membre</title>
</head>
<body>
    <div class="box">
         <h1> Formulaire profil membre</h1>
         <form action="#" method="post"> 
            <input type="hidden" name="id" value="<?php echo $resultat['id']?>"> 

            <div class="inputBox">
            <input type="text" name="pseudo" value="<?php echo $resultat['pseudo']?>">
            <label for="pseudo">Pseudo</label><br>
            </div>

            <div class="inputBox">
            <input type="text" name="age" value="<?php echo $resultat['age']?>">
            <label for="age">Age</label><br>
            </div>

            <div class="inputBox">
            <input type="text" name="password" value="<?php echo $resultat['password']?>">
            <label for="password">Password</label><br>
            </div>

            <div class="inputBox">
            <input type="text" name="email" value="<?php echo $resultat['email']?>">
            <label for="email">Email</label><br>
            </div>

            <input type="submit" name="submit" value="envoyer">
         </form>
            </div>
        </body>
        </html>