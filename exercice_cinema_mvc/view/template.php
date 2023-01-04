<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $titre ?></title>
        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>
        <nav>
            <ul>
                <li>Films</li>
                <li>Acteurs</li>
                <li>Réalisateurs</li>
                <li>Roles</li>
                <li>Genres</li>
            </ul>
        </nav>
        <main>
            <div id="contenu">
                <h1 class="titrePrincipal">PDO Cinema</h1>
                <h2 class="titreSecondaire"><?= $titre_secondaire ?></h2>
                <?= $contenu ?>
            </div>
        </main>
    </body>
</html>