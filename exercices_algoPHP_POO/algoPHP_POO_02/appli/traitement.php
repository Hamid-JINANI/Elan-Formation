<?php
    session_start();
?>

<?php

    if(isset($_GET["action"])) {             

        switch($_GET["action"]) {

            // AJOUTER UN PRODUIT
            case "add":

                if(isset($_POST["submit"])) {   // Vérifie si la clé submit du tableau $_POST correspond au name de l'input "submit".

                    // On vérifie l'intégrité des valeurs transmises dans le tableau $_POST.
                    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);   // FILTER_SANITIZE_STRING is deprecated (c'était censé supprimer tous caractères spéciaux et balises html, éviter l'injection de code).
                    $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                    $qqt = filter_input(INPUT_POST, "qqt", FILTER_VALIDATE_INT);
                    $category = filter_input(INPUT_POST, "category", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                    // Vérifie si tous les filtres ont fonctionnés.
                    if($name && $price && $qqt) {
                        $product = [
                            "name" => $name,
                            "price" => $price,
                            "qqt" => $qqt,
                            "total" => $price * $qqt,
                            "category" => $category
                        ];
                        
                        $_SESSION["products"][] = $product;

                        $_SESSION['message'] = "<p>Produit ajouté</p>"; 
                        header("Location: index.php");
                        die;
                    }                       
                }

                

            // SUPPRIMER UN PRODUIT
            case "delet":

                // Supprimer un item de l'array
                unset($_SESSION["products"][$_GET["id"]]);

                header("Location: recap.php");
                break;
                
            // VIDER LE PANIER
            case "clear":

                // Vider l'array de produit en session
                unset($_SESSION["products"]);
                header("Location: recap.php");
                die();                                  // Termine le script courant comme exit().
                break;

            // AUGMENTER LA QUANTITE
            case "up-qtt":

                // Augmente la valeur quantité
                $_SESSION["products"][$_GET["id"]]["qqt"]++;

                header("Location: recap.php");
                break;
            // DIMINUER LA QUANTITE
            case "down-qtt":
                
                // Diminue la valeur quantité
                $_SESSION["products"][$_GET["id"]]["qqt"]--;

                if($_SESSION["products"][$_GET["id"]]["qqt"] == 0) {
                    unset($_SESSION["products"][$_GET["id"]]);
                    header("Location: recap.php");
                    die();                         
                }
                header("Location: recap.php");
                break;
            // AFFICHER LE DETAIL
            case "detail":
        }        
    }
    header("Location:recap.php");   // Autrement retourne à la page index de toutes
?>