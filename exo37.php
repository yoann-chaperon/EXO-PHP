<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La méthode GET "liens"</title>
</head>
<body>
    <h1>La méthode GET "liens"</h1>
    <div class="container">

    <!-- liens pour céer une news -->
    <a href="formNews.php" class="href">Créer une nouvelle news</a><br>

    <!-- lien pour créer une nens avec passage de paramètres "membre_id=3" -->
    <a href="formNews.php?membre_id=3" class="href">Créer une nouvelle news"membre_id=3"</a><br>

    <!-- lien pour créer une nens avec passage de paramètres = valeur  -->
    <a href="formNews.php?membre_id=3&action=insert&statut=création d'une news" class="btn btn-primary btn-sm active" role="button">Créer une nouvelle news</a>
        

</div>
</body>
</html>