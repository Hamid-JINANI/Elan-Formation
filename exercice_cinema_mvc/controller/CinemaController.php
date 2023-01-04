<?php
    namespace Controller;
    use Model\Connect;

    class CinemaController {
        /**
         * Lister les films
         */
        public function listFilms() {

            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
                SELECT titre_film, date_sortie_fr
                FROM film
            ");

            require "view/listFilms.php";
        }

        public function listActeurs() {

            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
            SELECT *,
                CONCAT(p.prenom_personne,\'  \', p.nom_personne) AS nom_acteur
            FROM personne p
            INNER JOIN acteur a
                ON p.id_personne = a.id_personne
            ");

            require "view/listActeurs.php";
        }

        public function detailFilm() {

            if (isset($_GET['id'])) {
                // La variable existe, on la récupére.
                $id = $_GET['id'];
                // echo "L'id du film est : " . $id;
            } else {
                // La variable n'est pas passée, message d'erreur.
                echo "Erreur : l'id du film n'est pas passé";
            }

            $pdo = Connect::seConnecter();
            $requete = $pdo->query("
                SELECT * , 
                CONCAT(p.prenom_personne,\' \', p.nom_personne) AS nom_realisateur
                FROM film f
                INNER JOIN realisateur r
                    ON f.id_realisateur = r.id_realisateur
                INNER JOIN personne p
                    ON r.id_personne = p.id_personne
                WHERE id_film = ' . $id . ''
            ");
        }
    }
