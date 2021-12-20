<?php
    $connection = mysqli_connect("localhost", "yoann", "guizmo", "forum");
        
        if (!$connection){
            die ("connection impossble");
        }
        
    //envoyer la requête au serveur
    $requete = mysqli_query($connection, "SELECT *FROM news");

    //ouvrir une session
    $_SESSION['membre_id'] = 3 ;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Lire une table News</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            
            <!-- Liens pour créer une news avec passage de paramètres -->
            <a href="formNews.php?membre_id=<?php echo $_SESSION['membre_id'];?>&action=insert&statut=création d'une news" class="href">Créer une nouvelle news</a>

            <table class="table">
                <tr>
                    <th></th>
                    <th></th>
                    <th>id</th>
                    <th>titre</th>
                    <th>contenu</th>
                    <th>id membre</th>
                </tr>
                <?php
                    //lire chaque ligne de la table dans le tableau $resultat
                    while($resultat = mysqli_fetch_assoc($requete)){
                        echo '<tr>';

                        //liens pour modification
                        echo '<td>
                        <a href="formNews.php?membre_id ='.$_SESSION['membre_id'].'&action=update&statut=modifier une news&id='.$resultat['id'].'">modifier</a>
                        </td>';

                        //liens pour suppression
                        echo '<td>
                        <a href="formNews.php?membre_id='.$_SESSION['membre_id'].'&action=delete&statut=Supprimer une news&id='.$resultat['id'].'">Supprimer</a>  
                        </td>';

                        echo'<td>'.$resultat['id'].'</td>';
                        echo'<td>'.$resultat['titre'].'</td>';
                        echo'<td>'.$resultat['contenu'].'</td>';
                        echo'<td>'.$resultat['membre_id'].'</td>';
                        echo '<tr>';
                    }
                    ?>
            </table>

        
        </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>