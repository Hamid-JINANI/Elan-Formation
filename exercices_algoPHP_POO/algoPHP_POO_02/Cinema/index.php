<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <h1>Cinéma</h1>

    <?php
        spl_autoload_register(function ($class_name) { // Pour faire des includes. Les noms de fichiers et de classes doivent se correspondre.
            include $class_name . '.php';
        });

        $georgeLucas = new Director("George", "Lucas", "Man", "1944-05-14");     // On définit une personne.

        echo $georgeLucas->displayInfosPerson();    // On affiche les infos de la personne.

        $sciFi = new Genre("Science Fiction");      // On définit le genre du film.

        // On définit les infos du film plus les instanciations de la personne et du genre.
        $movie = new Movie("Star Wars Episode IV", $georgeLucas, 1977, 121, $sciFi, "Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. (AlloCiné).");

        echo $georgeLucas->displayMovies();     // On affiche les infos du film.

        $aventure = new Genre("Aventure");

        $movie = new Movie("Le aveturiers de l'arche perdu", $georgeLucas, 1981, 115, $aventure, "1936. Parti à la recherche d'une idole sacrée en pleine jungle péruvienne, l'aventurier Indiana Jones échappe de justesse à une embuscade tendue par son plus coriace adversaire : le Français René Belloq. (AlloCiné).");

        $starWarIV = new Movie("Star Wars Episode IV", $georgeLucas, 1977, 121, $sciFi, "Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. (AlloCiné).");

        $hFord = new Actor("Ford", "Harrison", "Man", "1942-07-13",);
        $cFisher = new Actor("Fisher", "Carrie", "Woman", "1956-10-21");

        echo $hFord->displayInfosActor();
        echo $cFisher->displayInfosActor();

        $hanSolo = new Character("Han Solo");
        $princessLeia = new Character("Princess Leia");

        echo $hanSolo->displayInfosCharacter();

        $casting1 = new Casting($starWarIV, $hanSolo, $hFord);          // On instancie le casting avec le nom du film, le rôle et le nom d'un acteur.
        $casting2 = new Casting($starWarIV,  $princessLeia, $cFisher);

        echo $casting1->displayInfosCasting();  // Affiche le titre du film le rôle et l'acteur.

        echo $starWarIV->displayCasting();      // afficher le casting d'un film : acteurs + rôles

        echo $hFord->displayCasting();          // afficher la filmographie d'un acteur : films + rôles


        echo $hanSolo->displayCasting();        // afficher les acteurs ayant incarné un rôle : acteurs + films

        $tYoung = new Director("Terence", "Young", "Man", "1915-06-20");
        echo $tYoung->displayInfosPerson();

        $action = new Genre("action");

        $jBondDrNo = new Movie("James Bond 007 contre Dr No", $tYoung, 1962, 105, $action, "Lorsque deux agents britanniques disparaissent mystérieusement en Jamaïque, le chef des services secrets britanniques, « M », y envoie l'agent spécial 007 James Bond pour enquêter.");

        echo $tYoung->displayMovies();

        echo $jBondDrNo->displayInfosFilm();

        $sConnery = new Actor("Connery", "Sean", "Man", "1930-08-25");
        $uAndress = new Actor("Andress", "Ursula", "Woman", "1936-03-19");

        echo $sConnery->displayInfosActor();
        echo $uAndress->displayInfosActor();

        $jBond007 = new Character("James Bond 007");
        $honey = new Character("Honey");

        echo $jBond007->displayInfosCharacter();
        echo $honey->displayInfosCharacter();

        $casting3 = new Casting($jBondDrNo, $jBond007, $sConnery);
        $casting4 = new Casting($jBondDrNo, $honey, $uAndress);
        echo $casting3->displayInfosCasting();

        $mCampbell = new Director("Campbell", "Martin", "Man", "1943-10-24");
        echo $mCampbell->displayInfosPerson();

        $gEye = new Movie("GoldenEye", $mCampbell, 1995, 130, $action, "L'action débute en 1986 à Arkhangelsk, dans une fabrique d'armes chimiques près d'un impressionnant barrage.");

        echo $mCampbell->displayMovies();

        echo $gEye->displayInfosFilm();
        echo $jBondDrNo->displayCasting();

        $pBrosnan = new Actor("Brosnan", "Pierce", "Man", "1953-05-16");
        echo $pBrosnan->displayInfosActor();

        $casting5 = new Casting($gEye, $jBond007, $pBrosnan); // Affiche les acteurs du film.
        echo $casting5->displayInfosCasting();

        echo $jBond007->displayCasting();       // Affiche tous les acteurs ayant joué le même rôle.
    ?>
</body>

</html>