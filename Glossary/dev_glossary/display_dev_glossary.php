<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
	<link rel="icon" type="image" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <title>Dev. Glossary</title>
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
                <h1 id="title_article">Glossaire du développeur</h1>
                <p id="presentation">Petite définition.<br>
                    Une abréviation est un groupe de lettres qui représente un mot ou un groupe de mots.<br>
                    Quand on peut lire l'abréviation comme un mot (ex.: Unicef) on parle d'un acronyme et si l'on ne peut que l'épeler (ex.: EDF) alors c'est un sigle.
                </p>
                <?php
                    // variables de travail
                    $dev_glossary = [
                        [
                            "Abreviation" => "DNS",
                            "Signification" => "Domain Name System",
                            "Definition" => "Répertoire qui contient les noms des domaines avec leur identifiants (adresses IP).",
                            "Type" => "S"
                        ],
                        [
                            "Abreviation" => "IP",
                            "Signification" => "Internet Protocol",
                            "Definition" => "Identifiant numérique attribué à un périphérique relié à un réseau informatique.",
                            "Type" => "S"
                        ],
                        [
                            "Abreviation" => "VPN",
                            "Signification" => "Virtual Private Network",
                            "Definition" => "Système qui cache l'adresse IP d'un client.",
                            "Type" => "S"
                        ],
                        [
                            "Abreviation" => "WEP",
                            "Signification" => "Wired Equivalent Privacy",
                            "Definition" => "Protocole pour sécuriser les réseaux sans fil.",
                            "Type" => "A"
                        ],
                        [
                            "Abreviation" => "UX",
                            "Signification" => "User eXperience",
                            "Definition" => "On parle d'UX design, il sert à rendre le site plus agréable et plus intuitif. Mots clés : comppréhension, optimisation, satisfaction.",
                            "Type" => "S"
                        ],
                        [
                            "Abreviation" => "UI",
                            "Signification" => "User Interface",
                            "Definition" => "L'UI design, fait partie de UX, il sert à améliorer l'interaction de l'utilisateur avec le produit. Plus centré sur le visuel pour garder l'utilisateur sur la page.",
                            "Type" => "S"
                        ],
                        [
                            "Abreviation" => "BOM",
                            "Signification" => "Byte Order Mark",
                            "Definition" => "Série d'octets au début d'un fichier texte, pour définir l'encodage du contenu. Si encodage UTF-8 alors sans BOM",
                            "Type" => "A"
                        ],
                        [
                            "Abreviation" => "PHP",
                            "Signification" => "Hypertext Preprocessor",
                            "Definition" => "Langage informatique (de script). Principalement utilisé pour concevoir des sites dynamiques.",
                            "Type" => "S"
                        ],
                        [
                            "Abreviation" => "",
                            "Signification" => "",
                            "Definition" => ".",
                            "Type" => ""
                        ],
                        [
                            "Abreviation" => "",
                            "Signification" => "",
                            "Definition" => ".",
                            "Type" => ""
                        ]
                    ];

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
                            <tbody>";
                
                    function displayGlossaryElements($dev_glossary) {
                        
                        echo '<tr>';
                        foreach($dev_glossary as $element) {
                            foreach($element as $key => $value) {
                                echo '<td>' .$value. '</td>';
                            }
                            echo '</tr>';
                        }                        
                    }
                    displayGlossaryElements($dev_glossary);
                    echo "</tbody></table>";

                    // Se souvenir de la fonction array_splice($tab, 0, array('item', 'item'))
                
                
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