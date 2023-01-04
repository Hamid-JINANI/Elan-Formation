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

    // Récupére le titre du realisateur
    if (isset($_GET['id'])) {
        // La variable existe, on la récupére.
        $id = $_GET['id'];
        // echo "L'id du realisateur est : " . $id;
    } else {
        // La variable n'est pas passée, message d'erreur.
        echo "Erreur : l'id du realisateur n'est pas passé";
    }


    // Récupère le contenu de la table realisateur
    $sqlQuery = 'SELECT *, 
                    DATE_FORMAT(date_naiss_personne, "%d/%m/%Y") AS date_sortie_fr, 
                    CONCAT(p.prenom_personne,\' \', p.nom_personne) AS nom_realisateur
                FROM realisateur f
                INNER JOIN realisateur r
                    ON f.id_realisateur = r.id_realisateur
                INNER JOIN personne p
                    ON p.id_personne = r.id_personne
                WHERE r.id_realisateur = ' . $id . '';                       // Variable qui contient la requête sql.
                
    $realisateurStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $realisateurStatement->execute();
    $realisateurs = $realisateurStatement->fetchAll();                    // Va chercher les éléments de la requête.


    if ($realisateurs > 0) {

        echo "
        <h1>Détail réalisateur</h1>";

                // On fait une boucle foreach() pour afficher les détails du realisateur.
                foreach ($realisateurs as $realisateur) {

                    echo 
                        "<h2>" . $realisateur['id_realisateur'] . ") " . $realisateur['nom_realisateur'] . "</h2>
                        <p>Date de naissance : " . date('d-m-Y', strtotime($realisateur['date_naiss_personne'])) . "</p>                        
                        <p>Pays de naissance : " . $realisateur['lieu_naiss_personne'] . "</p>
                        <img src=assets/img/img_personnes/" . $realisateur['img_personne'] . " alt='" . $realisateur['alt_img_personne'] . "'></p>";
                    
                }                                 
        echo "</table>";

    } else {

        echo "0 no results";

    }

// Récupère le contenu de la table realisateur
    $sqlQuery = 'SELECT *,
                    titre_film, 
                    DATE_FORMAT(date_sortie_fr, "%d/%m/%Y") AS date_sortie_fr, 
                    CONCAT(p.prenom_personne,\' \', p.nom_personne) AS nom_realisateur
                FROM film f
                INNER JOIN realisateur r
                    ON f.id_realisateur = r.id_realisateur
                INNER JOIN personne p
                    ON p.id_personne = r.id_personne
                WHERE r.id_realisateur = ' . $id . '';                       // Variable qui contient la requête sql.
                
    $realisateurStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $realisateurStatement->execute();
    $realisateurs = $realisateurStatement->fetchAll();                    // Va chercher les éléments de la requête.
    
    if ($realisateurs > 0) {

        echo "
        <h3>Filmographie</h3>";

                // On fait une boucle foreach() pour afficher les détails du realisateur.
                foreach ($realisateurs as $realisateur) {

                    echo 
                        "<p>- " . $realisateur['titre_film'] . " (" . $realisateur['date_sortie_fr'] . ")</p>";
                    
                }                                 
        echo "</table>";

    } else {

        echo "0 no results";

    }

?>