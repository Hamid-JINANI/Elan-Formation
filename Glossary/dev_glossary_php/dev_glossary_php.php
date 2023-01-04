<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- favicon -->
	<link rel="icon" type="image" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">

    <title>Dev abbreviations</title>

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style_main.css">
    <link rel="stylesheet" href="assets/css/style_mobile.css">
    <link rel="stylesheet" href="assets/css/style_glossary_table.css">
</head>
<body>
    <div id="container">
        <header>
            <p id="title_header">The nine dev.</p>
            <img class="img_header" src="assets/img/tag_Lyon_DSC_0015.png" alt="imgHeader">
        </header>
        <nav>
            <ul class="ul_navigation">
                <li><a href="../index.php" class="home">Home</a></li>
                <li><a href="#" class="blog">Blog</a></li>
                <li><a href="#" class="contact">Contact</a></li>
                <li><a href="../form_glossary/display_glossary_form.php" class="admin">Admin</a></li>
            </ul>
        </nav>
        <main>
            <article>
                <h1 id="title_article">Glossaire PHP</h1>
                <p id="presentation">Petites explication sommaire des différents éléments du code PHP.
                </p>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "dev_tools";

                    // Connect to mysqli
                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    // Verify connexion
                    if (mysqli_connect_errno()) {
                        echo "Impossible de se connecter à MySQL : " .mysqli_connect_error();
                        exit();
                    }

                    // Query
                    $req = "SELECT * FROM dev_abbreviations";
                    $result = $conn->query($req);
                    $num = mysqli_num_rows($result);                
                    
                    if ($num > 0) {

                        echo "<table>
                            <caption>Sigles et acronymes en informatique</caption>
                            <thead>
                                <tr>
                                    <th>Abrev.</th>
                                    <th>Signification</th>
                                    <th>Définition</th>
                                    <th>Type</th>
                                </tr>
                                <thead>
                                <tbody> 
                                <tr>";

                                while($row = mysqli_fetch_assoc($result)) {
                                    $abbreviation = $row['abbreviation'];
                                    $signification = $row['signification'];
                                    $defAbbrev = $row['defAbbrev'];
                                    $typeAbbrev = $row['typeAbbrev'];
                                
                        echo "<td>" . $abbreviation. "</td>
                                <td>" . $signification. "</td>
                                <td>" . $defAbbrev. "</td>
                                <td>" . $typeAbbrev. "</td></tr>";
                                }
                        echo "</table>";
                    } else {
                        echo "0 no results";
                    }  
                     // Free the memory space allocated for this query of the db
                    mysqli_free_result($result);
                    // close db
                    mysqli_close($conn);
                ?>

            </article>
            <aside>
                <div id="zone_author">   
                    <figure id="author">
                        <img src="assets/img/ralmanClasse.png" alt="Freaky Fennec" id="img_author">
                        <figcaption>Freaky Fennec</figcaption>
                        <p class="profession">Sand fox</p>
                    </figure>
                    <p id="presentation_author">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatem optio voluptatum reiciendis ea veritatis corrupti ducimus quae, maxime magnam!</p>
                </div> 
            </aside>
        </main>
        <footer><small>Shapped by "The Stinky Feet Workshop's" © 2022</small></footer>
    </div>
</body>
</html>