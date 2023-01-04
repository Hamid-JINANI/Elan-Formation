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

    // Récupère le contenu de la table film
    $sqlQuery = 'SELECT * 
                 FROM film';                       // Variable qui contient la requête sql.

    $filmStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $filmStatement->execute();
    $films = $filmStatement->fetchAll();                    // Va chercher les éléments de la requête.


    if ($films > 0) {

        echo "
        <h1>Tous les films</h1>
        <table>
            <caption>Liste des films</caption>
            <thead>
                <tr>
                    <th>Id du film</th>
                    <th>Titre du film</th>
                    <th>Date de sortie fr</th>
                    <th>Durée</th>
                </tr>
                <thead>
                <tbody> 
                <tr>";

                // On fait un boucle foreach() pour afficher les films.
                foreach ($films as $film) {

                    echo 
                        "<td>" . $film['id_film'] . "</td>
                        <td><a href='detail_film.php?id=" . $film['id_film'] . "' class='lien-pages'>" . $film['titre_film'] . "</a></td>
                        <td>" . date('d-m-Y', strtotime($film['date_sortie_fr'])) . "</td>
                        <td>" . $film['duree_film'] . "</td>
                    </tr>";   // Affiche les films
                    
                }

        echo "</table>";

    } else {

        echo "0 no results";

    }
?>