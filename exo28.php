<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire profil membres</title>
</head>
<body>
    <div>
        <h1>formulaire profil membre</h1>
        <form action="#"method="post">

            <label for="pseudo">pseudo</label>
            <input type="text" name="pseudo"  value="<?php echo $resultat['pseudo']?>"><br>

            <label for="age">age</label>
            <input type="text" name="age" value="<?php echo $resultat ['age']?>"><br>

            <label for="password">password</label>
            <input type="text" name="password" value="<?php echo $resultat['password']?>"><br>

            <label for="email">email</label>
            <input type="text" name="email" value="<?php echo $resultat['email']?>"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>
</html>