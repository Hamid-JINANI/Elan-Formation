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
                    CONCAT(p.prenom_personne,\' \', p.nom_personne) AS nom_realisateur
                 FROM personne p
                 INNER JOIN realisateur r
                   ON p.id_personne = r.id_personne;';                       // Variable qui contient la requête sql.
                   
    $realisateurStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $realisateurStatement->execute();
    $realisateurs = $realisateurStatement->fetchAll();                    // Va chercher les éléments de la requête.


    if ($realisateurs > 0) {

        echo "
        <h1>Tous les réalisateurs</h1>
        <table>
            <caption>Liste des réalisateurs</caption>
            <thead>
                <tr>
                    <th>Id du réal.</th>
                    <th>Nom</th>
                    <th>Date de naiss</th>
                    <th>Pays de naiss</th>
                </tr>
                <thead>
                <tbody> 
                <tr>";

                // On fait un boucle foreach() pour afficher les realisateurs.
                foreach ($realisateurs as $realisateur) {

                    echo 
                        "<td>" . $realisateur['id_realisateur'] . "</td>
                        <td><a href='detail_realisateur.php?id=" . $realisateur['id_realisateur'] . "' class='lien-pages'>" . $realisateur['nom_realisateur'] . "</a></td>
                        <td>" . date('d-m-Y', strtotime($realisateur['date_naiss_personne'])) . "</td>
                        <td>" . $realisateur['lieu_naiss_personne'] . "</td>
                    </tr>";
                    
                }

        echo "</table>";

    } else {

        echo "0 no results";

    }
?>