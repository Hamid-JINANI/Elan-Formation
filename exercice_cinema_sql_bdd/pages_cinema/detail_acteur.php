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
                    CONCAT(p.prenom_personne,\' \', p.nom_personne) AS nom_acteur
                FROM acteur a
                INNER JOIN personne p
                    ON p.id_personne = a.id_personne
                WHERE a.id_acteur = ' . $id . '';                       // Variable qui contient la requête sql.
                
    $realisateurStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $realisateurStatement->execute();
    $realisateurs = $realisateurStatement->fetchAll();                    // Va chercher les éléments de la requête.


    if ($realisateurs > 0) {

        echo "
        <h1>Détail acteur</h1>";

                // On fait une boucle foreach() pour afficher les détails du realisateur.
                foreach ($realisateurs as $realisateur) {

                    echo 
                        "<h2>" . $realisateur['id_acteur'] . ") " . $realisateur['nom_acteur'] . "</h2>
                        <p>Date de naissance : " . date('d-m-Y', strtotime($realisateur['date_naiss_personne'])) . "</p>                        
                        <p>Pays de naissance : " . $realisateur['lieu_naiss_personne'] . "</p>
                        <img src=assets/img/img_personnes/" . $realisateur['img_personne'] . " alt='" . $realisateur['alt_img_personne'] . "'></p>";
                    
                }                                 
        echo "</table>";

    } else {

        echo "0 no results";

    }

// Récupère le contenu de la table realisateur
    $sqlQuery = 'SELECT 
                    a.id_acteur,
                    p.id_personne,
                    CONCAT(p.prenom_personne,\' \', p.nom_personne) AS nom_acteur,
                    c.id_role,
                    r.nom_role,
                    c.id_film,
                    f.titre_film,
                    DATE_FORMAT(date_sortie_fr, "%d/%m/%Y") AS date_sortie_fr
                FROM personne p
                INNER JOIN acteur a
                    ON p.id_personne = a.id_personne
                INNER JOIN casting c
                    ON a.id_acteur = c.id_acteur
                INNER JOIN film f
                    ON c.id_film = f.id_film
                INNER JOIN role r
                    ON r.id_role = c.id_role
                WHERE a.id_acteur = "' . $id . '"
                ORDER BY f.date_sortie_fr DESC';                     // Variable qui contient la requête sql.
                
    $realisateurStatement = $mysqlConnection->prepare($sqlQuery);  // On prépare la requête (plus de sécurité).

    $realisateurStatement->execute();
    $realisateurs = $realisateurStatement->fetchAll();                    // Va chercher les éléments de la requête.
    
    if ($realisateurs > 0) {

        echo "
        <h3>Filmographie</h3>";

                // On fait une boucle foreach() pour afficher les détails du realisateur.
                foreach ($realisateurs as $realisateur) {

                    echo 
                        "<p>- " . $realisateur['titre_film'] . " (" . $realisateur['date_sortie_fr'] . ") " . $realisateur['nom_role'] . "</p>";
                    
                }                                 
        echo "</table>";

    } else {

        echo "0 no results";

    }

?>