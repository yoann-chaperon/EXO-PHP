<?php
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

    if (isset($_POST['submit'])) {
        $connection = mysqli_connect("localhost", "yoann", "guizmo", "forum");

        //Alors lancer la requte SQL pour sauvegarder
        //Les données en base de données
        $query = "INSERT INTO membres (id, pseudo, age, email, password)
                  VALUES (NULL, '".$_POST['pseudo']."', '".$_POST['age']."', '".$_POST['email']."', '".$_POST['password']."');";
        $requete = mysqli_query($connection, $query);
        header("Location: exo31.php");// renvoi vres la liste des membres
        echo $query;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>formulaire profil membre en B4</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <boby>
  <div class="container">
        <div>
            <h1>Formulaire profil membre</h1>
            <form action="#" method="post">
        
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" class="form-text" 
            value="<?php if (isset($resultat['pseudo'])) echo $resultat ['pseudo']?>"><br>
        </div>

        <div class="form-group">
            <label for="age">age</label>
            <input type="text" name="age" class="form-text" value="<?php if (isset($resultat['age'])) echo $resultat ['age']?>"><br>
        </div>

        <div class="form-group">
            <label for="password">password</label>
            <input type="text" name="password" class="form-text" value="<?php if (isset($resultat['password'])) echo $resultat ['password']?>"><br>
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" class="form-text" value="<?php if (isset($resultat['email'])) echo $resultat ['email']?>"><br>
        </div>
        <input type="submit" name="submit" value="submit">
        </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </boby>
</html>