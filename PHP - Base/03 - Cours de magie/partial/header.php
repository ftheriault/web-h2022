<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $pageTitle ?> | Cours de magie</title>
        <link rel="stylesheet" href="css/global.css">
    </head>
    <body>
        <main>
            <header>
                <div class="title">Cours de magie</div>
                <ul>
                    <li><a href="index.php" class="<?= $pageTitle == "Accueil" ? "selected" : "" ?>">Accueil</a></li>
                    <li><a href="cours.php" class="<?= $pageTitle == "Cours" ? "selected" : "" ?>">Cours</a></li>
                    <li><a href="inscription.php" class="<?= $pageTitle == "Inscription" ? "selected" : "" ?>">Inscription</a></li>
                </ul>
            </header>
            <div class="container">
                <h1><?= $pageTitle ?></h1>