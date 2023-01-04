<?php
    // Verify
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dev_tools";

        $name = $_POST['name'];
        $signification = $_POST['signification'];
        $definition = $_POST['definition'];
        $type = $_POST['type'];

        // Connect to mysqli
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Verify connexion
        if (mysqli_connect_errno()) {
            echo "Impossible de se connecter à MySQL : " .mysqli_connect_error();
            exit();
        }

        // Prepare query
        $statement = $conn->prepare("INSERT INTO  dev_glossary(name, signification, definition, type) VALUES (?, ?, ?, ?)");

        // Bind values and execute insert
        $statement->bind_param("ssss",$name, $signification, $definition, $type);

        if ($statement->execute()) {
            print "C'est okay !";
        } else {
            print $msqli->error;
        }
    }
?>