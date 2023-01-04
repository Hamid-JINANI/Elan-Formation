<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        spl_autoload_register(function ($class_name) { // Pour faire des includes. Les noms de fichiers et de classes doivent se correspondre.
            include $class_name . '.php';
        });

        $france = new Pays("FR");

        $kounde = new Joueur("Kounde", "Jules", "1983-07-24", "H", "Paris", $france);

        echo $kounde;

        $espagne = new Pays("ESP");
        $barcelone = new Equipe("FC Barcelona", $espagne);
        echo $barcelone;

        $nante = new Equipe("Nante", $france, $france);
        echo $nante;

        $marseille = new Equipe("OM", $france, $france);

        $carKounde1 = new Carriere($kounde, $barcelone, 2006, 2001);
        echo $carKounde1;

        $carKounde2 = new Carriere($kounde, $nante, 2001, 1999);
        echo $carKounde2;

        $equipesFrance = new Pays($france,$nante, $marseille);

        echo $equipesFrance->afficheEquipesParPays();
    ?>
</body>

</html>