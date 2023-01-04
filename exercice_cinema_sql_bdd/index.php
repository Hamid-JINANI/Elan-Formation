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

    // Page tous les films
    
?>        

<h1>Index cinéma (sql & bdd)</h1>
<a href="pages_cinema/tous_les_films.php" class="lien-pages">Tous les films</a><br>                  <!-- Affiche les titre des films -->
<a href="pages_cinema/tous_les_realisateurs.php" class="lien-pages">Tous les réalisateurs</a><br>    <!-- Affiche les titre des films -->
<a href="pages_cinema/tous_les_acteurs.php" class="lien-pages">Tous les acteurs</a><br>              <!-- Affiche les titre des films -->
        
