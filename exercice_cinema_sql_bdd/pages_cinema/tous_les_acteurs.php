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

    // Récupére le contenu de la table realisateur
    $sqlQuery = 'SELECT *,
                    CONCAT(p.prenom_personne,\'  \', p.nom_personne) AS nom_acteur
                 FROM personne p
                 INNER JOIN acteur a
        ON p.id_personne = a.id_personne;';                         // Variable qui contient la requête sql.

    $realisateurStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $realisateurStatement->execute();
    $realisateurs = $realisateurStatement->fetchAll();             // Va chercher les éléments de la requête.


    if ($realisateurs > 0) {

        echo "
        <h1>Tous les acteurs</h1>
        <table>
            <caption>Liste des acteurs</caption>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Pays de naissance</th>
                </tr>
                <thead>
                <tbody> 
                <tr>";

                // On fait un boucle foreach() pour afficher les realisateurs.
                foreach ($realisateurs as $realisateur) {

                    echo 
                        "<td><a href='detail_acteur.php?id=" . $realisateur['id_acteur'] . "' class='lien-pages'>" . $realisateur['nom_acteur'] . "</a></td>
                        <td>" . date('d-m-Y', strtotime($realisateur['date_naiss_personne'])) . "</td>
                        <td>" . $realisateur['lieu_naiss_personne'] . "</td>
                    </tr>";   // Affiche les realisateurs
                    
                }

        echo "</table>";

    } else {

        echo "0 no results";

    }
?>