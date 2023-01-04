<!--
    algoPHP_POO_02_class_index.php
    =============================================
    By AHJ
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    
    <?php
        spl_autoload_register(function ($class_name) { // Pour faire des includes.
            include $class_name . '.php';
        });

        $king = new Author ("Stephen", "KING", "Men", "1947-09-21");

        echo $king->afficherInfos();

        $ca = new Book ("Ca", 1980, 1138, 20, $king);
        $simetierre = new Book ("Simetierre", 1983, 374, 15, $king);
        $le_fleau = new Book ("Le Fléau", 1978, 823, 14, $king);
        $shining = new Book ("Shining ", 1977, 447, 16, $king);

        echo $king->displayBooks();
    ?>

</body>
</html>