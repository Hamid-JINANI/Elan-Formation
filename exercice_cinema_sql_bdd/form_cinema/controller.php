<?php
    // Verify
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cinema_hamid_02";

        $nom_personne = $_POST['nom_personne'];
        $prenom_personne = $_POST['prenom_personne'];
        $date_naiss_personne = $_POST['date_naiss_personne'];
        $lieu_naiss_personne = $_POST['lieu_naiss_personne'];
        $genre_personne = $_POST['genre_personne'];

        // Connect to mysqli
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Verify connexion
        if (mysqli_connect_errno()) {
            echo "Impossible de se connecter à MySQL : " .mysqli_connect_error();
            exit();
        }

        // Prepare query
        $statement = $conn->prepare("INSERT INTO  dev_glossary(nom_personne, prenom_personne, date_naiss_personne, lieu_naiss_personne, genre_personne) 
                                    VALUES (?, ?, ?, ?, ?)");

        // Bind values and execute insert
        $statement->bind_param("ssss",$nom_personne, $prenom_personne, $date_naiss_personne, $lieu_naiss_personne, $genre_personne);

        if ($statement->execute()) {
            print "C'est okay !";
        } else {
            print $msqli->error;
        }
    }
?>