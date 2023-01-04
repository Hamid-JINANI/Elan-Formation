<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des produits</title>
    <link rel="stylesheet" href="assets/css/style_main.css">
    <link rel="stylesheet" href="assets/css/style_appli_table.css">
</head>
<body>
    <div id="container">
        <nav>
            <ul class="ul_navigation">
                <li><a href="index.php" class="accueil">Accueil</a></li>
                <li><a href="#" class="listeProduits">Liste des produits</a></li>
                <li><a href="#" class="recap">Récap</a></li>
                <li><a href="#" class="numRecap">1</a></li>
            </ul>
        </nav>
        <main>
        <?php
            if(!isset($_SESSION["products"]) || empty($_SESSION["products"])) {
                echo "<p class='panierVide'>Aucun produit en session...</p>";
            } else {
                echo "<table>",
                        "<thead>",
                            "<tr>",
                                "<th>#</th>",
                                "<th>Nom</th>",
                                "<th>Prix</th>",
                                "<th>Quantité</th>",
                                "<th>Total</th>",
                                "<th>Catégorie</th>",
                                "<th>Actions</th>",
                            "</tr>",
                        "</thead>",
                        "<tbody>";
                        $totalGeneral = 0;
                        $totalProduits = 0;
                        foreach($_SESSION["products"] as $index => $product) {
                            $total = $product["price"] * $product["qqt"];
                            echo  "<tr>",
                                        "<td>".$index."</td>",

                                        "<td>".$product["name"]."</td>",

                                        "<td>".number_format($product["price"], 2, ",","&nbsp;")."</td>",

                                        "<td class='quantArea'>
                                            <a href='traitement.php?action=down-qtt&id=$index'><input type='image' id='imgMoins' alt='Quantitée moins' src='assets/img/icons/iconMoins.png'></a>
                                            " .$product["qqt"]. "
                                            <a href='traitement.php?action=up-qtt&id=$index'><input type='image' id='imgPlus' alt='Quantitée plus' src='assets/img/icons/iconPlus.png'></a>
                                        </td>",                                       

                                        "<td>".number_format($total, 2, ",","&nbsp;")."</td>",

                                        "<td>".$product["category"]."</td>",

                                        "<td>
                                        <a href='traitement.php?action=delet&id=$index'><input type='image' id='imgCorbeille' alt='Delet' src='assets/img/icons/corbeille.png'></a>
                                        </td>",
                                    "</tr>";
                            $totalGeneral += $total;
                        }
                        $totalProduits += $product["qqt"];
                        echo "<tr>",
                                    "<td colspan = 2>Nombre de produits : " .$totalProduits. "</td>",
                                    "<td colspan = 2>Total général : </td>",
                                    "<td><strong>" .number_format($totalGeneral, 2, ",","&nbsp;") . "&nbsp;</strong></td>",
                                "</tr>",
                                "<tr>",
                                    "<td colspan = 2>
                                        <a href='traitement.php?action=clear'class='boutonVidePanier'>Vider le panier</a>
                                    </td>",
                                "</tr>",
                            "</tbody>",
                        "</table>";

                function viderPanier() {
                    unset($_SESSION["products"]);
                } 
            }
                               
        ?>
        </main>
    </div>
</body>
</html>