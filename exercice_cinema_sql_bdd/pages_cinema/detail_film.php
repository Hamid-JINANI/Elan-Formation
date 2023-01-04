<?php
    try {
        // Souvent on identifie cet objet par la variable $conn ou $db
        $mysqlConnection = new PDO(
            'mysql:host=localhost;dbname=cinema_hamid;charset=utf8',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION], // Affiche les requêtes qui comportent des erreurs.
        );
    }
    catch (Exception $e) {
        // En cas d'erreur arrête tout et affiche message
        die('Erreur : ' . $e->getMessage());
    }

    // Si pas d'erreur on continue

    // Récupére le titre du film
    if (isset($_GET['id'])) {
        // La variable existe, on la récupére.
        $id = $_GET['id'];
        // echo "L'id du film est : " . $id;
    } else {
        // La variable n'est pas passée, message d'erreur.
        echo "Erreur : l'id du film n'est pas passé";
    }


    // Récupère le contenu de la table film
    $sqlQuery = 'SELECT * , 
                    CONCAT(p.prenom_personne,\' \', p.nom_personne) AS nom_realisateur
                FROM film f
                INNER JOIN realisateur r
                    ON f.id_realisateur = r.id_realisateur
                INNER JOIN personne p
                    ON r.id_personne = p.id_personne
                WHERE id_film = ' . $id . '';                       // Variable qui contient la requête sql.
                
    $filmStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $filmStatement->execute();
    $films = $filmStatement->fetchAll();                    // Va chercher les éléments de la requête.


    if ($films > 0) {

        echo "
        <h1>Détail du film</h1>";

                // On fait une boucle foreach() pour afficher les détails du film.
                foreach ($films as $film) {

                    echo 
                        "<h2>" . $film['id_film'] . ") " . $film['titre_film'] . "</h2>
                        <p>Date sortie en France : " . date('d-m-Y', strtotime($film['date_sortie_fr'])) . "</p>
                        <p>Durée du film : " . $film['duree_film'] . " mn</p>
                        <p>Réalisateur : " . $film['nom_realisateur'] . "</p>
                        <img src=assets/img/img_affiches_films/" . $film['affiche_film'] . ">
                        <h3>Synopsis : </h3>
                        <p>" . $film['synopsis_film']  . "</p>";
                    
                }                                 
        echo "</table>";

    } else {

        echo "0 no results";

    }

    // Récupère le contenu de la table casting
    $sqlQuery = 'SELECT 
                    CONCAT(p.prenom_personne,\' \', p.nom_personne) AS nom_acteur, 
                    p.genre_personne, 
                    c.id_acteur,
                    r.nom_role
                FROM casting c
                INNER JOIN acteur a
                    ON c.id_acteur = a.id_acteur
                INNER JOIN role r
                    ON c.id_role = r.id_role
                INNER JOIN personne p
                    ON a.id_personne = p.id_personne
                WHERE id_film = ' . $id . '';

    $castingStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $castingStatement->execute();
    $castings = $castingStatement->fetchAll();                    // Va chercher les éléments de la requête.

    if ($films > 0) {

        echo "
        <h3>Casting</h3>";

                // On fait une boucle foreach() pour afficher les détails du film.
                foreach ($castings as $casting) {

                    echo 
                        "
                        <p>" . $casting['nom_acteur'] . " (" . $casting['nom_role'] . ")</p>";
                    
                }                                 
        echo "</table>";

    } else {

        echo "0 no results";

    }


?>