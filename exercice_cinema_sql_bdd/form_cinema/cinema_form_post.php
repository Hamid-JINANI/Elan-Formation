<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
	<link rel="icon" type="image" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <title>Form Glossary</title>
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style_main.css">
    <link rel="stylesheet" href="assets/css/style_mobile.css">
</head>
<body>
    <div id="container">
        <header>
            <p id="title_header">The nine dev</p>
            <img class="img_header" src="assets/img/tag_Lyon_DSC_0015.png" alt="imgHeader">
        </header>
        <nav>
            <ul class="ul_navigation">
                <li><a href="../index.php" class="home">Home</a></li>
                <li><a href="#" class="blog">Blog</a></li>
                <li><a href="#" class="contact">Contact</a></li>
                <li><a href="#" class="admin">Admin</a></li>
            </ul>
        </nav>
        <main>
            <article>
                <h1 id="title_article">Formulaire cinéma</h1>
                
                <form method="post" action="controller.php">
                    <fieldset id="fieldsetText">
                        <div>
                            <label for="nom_personne" id="inputTextLabel">Nom</label>
                            <input type="text" id="inputText" name="nom_personne" required minlength="2" maxlength="100"><br>
                            
                            <label for="prenom_personne" id="inputTextLabel">Prenom</label>
                            <input type="text" id="inputText" name="prenom_personne" required minlength="2" maxlength="100"><br>
                                            
                            <label id="inputTextLabel" for="date_naiss_personne">Date de naissance</label>
                            <input type="date" id="inputText" name="date_naiss_personne" required minlength="4" maxlength="100" size="20"></input><br>

                            <label id="inputTextLabel" for="lieu_naiss_personne">Lieu de naissance</label>
                            <input type="text" id="inputText" name="lieu_naiss_personne" required minlength="4" maxlength="100" size="20"></input><br>

                            <label id="inputTextLabel" for="genre_personne">Genre</label>
                            <select name="genre_personne" id="genre_personne">
                                <option value="H">Homme</option>
                                <option value="F">Femme</option>
                                <option value="Y">Yel</option>
                            </select><br><br>

                            <p>Qualitée :</p>
                            <input type="radio" id="type" name="type" value="Sigle" class="choiceType">
                            <label for="realisateur">Réalisateur</label><br>

                            <input type="radio" id="type" name="type" value="Acronyme" class="choiceType">
                            <label for="acteur">Acteur</label><br>

                        </div>
                    </fieldset>
                    <fieldset id="fieldsetText">
                        <div>                    
                            <label id="inputTextLabel" for="titre_film">Titre</label>
                            <input type="text" id="inputText" name="titre_film" required minlength="2" maxlength="20" size="20"></input><br>
                                            
                            <label id="inputTextLabel" for="date_sortie_fr">Date sortie fr</label>
                            <input type="date" id="inputText" name="date_sortie_fr" required minlength="4" maxlength="100" size="20"></input><br>

                            <label id="inputTextLabel" for="duree_film">Durée</label>
                            <input type="text" id="inputText" name="duree_film" required minlength="4" maxlength="100" size="20"></input><br>
                                           
                            <label id="textAreaLabel" for="synopsis_film">Synopsis</label>
                            <textarea type="text" id="textArea" name="synopsis_film" required rows="3" cols="33"></textarea><br>

                            <label id="inputTextLabel" for="affiche_film">Affiche</label>
                            <input type="text" id="inputText" name="affiche_film" required minlength="4" maxlength="100" size="20"></input><br>

                            <label id="inputTextLabel" for="note_film">Note</label>
                            <input type="text" id="inputText" name="note_film" required minlength="4" maxlength="100" size="20"></input><br>

                            <label id="inputTextLabel" for="id_realisateur">Id réalisateur</label>
                            <input type="text" id="inputText" name="id_realisateur" required minlength="4" maxlength="100" size="20"></input><br>
                            
                            <label id="inputTextLabel" for="type_genre_film">Genre</label>
                            <select name="type_genre_film" id="type_genre_film">
                                <option value="animation">Animation</option>
                                <option value="aventure">Aventure</option>
                                <option value="biopic">Biopic</option>
                                <option value="comedie">Comédie</option>
                                <option value="documentaire">Documentaire</option>
                                <option value="drame">Drame</option>
                                <option value="erotique">Erotique</option>
                                <option value="espionnage">Espionnage</option>
                                <option value="fantastique">Fantastique</option>
                                <option value="historique">Historique</option>
                                <option value="horreur">Horreur</option>
                                <option value="musique">Musique</option>
                                <option value="navet">Navet</option>
                                <option value="policier">Policier</option>
                                <option value="sci-fi">Sci-fi</option>
                                <option value="thriller">Thriller</option>
                            </select><br>
                            
                        </div>
                    </fieldset>
                    
                    <button type="submit">Submit</button>
                </form>

            </article>
            <!--<aside>
                <div id="zone_author">
                    <figure id="author">
                        <img src="assets/img/ralmanClasse.png" alt="Freaky Fennec" id="img_author">
                        <figcaption>Freaky Fennec</figcaption>
                        <p class="profession">Sand fox</p>
                    </figure>
                    <p id="presentation_author">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptatem optio voluptatum reiciendis ea veritatis corrupti ducimus quae, maxime magnam!</p>
                </div>
            </aside>-->
        </main>
        <footer><small>Shapped by "The Stinky Feet Workshop's" © 2022</small></footer>
    </div>
</body>
</html>