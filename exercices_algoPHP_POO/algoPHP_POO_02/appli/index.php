<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
    <link rel="stylesheet" href="assets/css/style_main.css">
    <link rel="stylesheet" href="assets/css/style_form.css">
</head>
<body>
    <div id="container">
        <nav>
            <ul class="ul_navigation">
                <li><a href="index.php" class="accueil">Accueil</a></li>
                <li><a href="#" class="listeProduits">Liste des produits</a></li>
                <li><a href="recap.php" class="recap">Récap</a></li>
                <li><a href="#" class="numRecap">1</a></li>
            </ul>
        </nav>
        <main>
            <form action="traitement.php?action=add" method="POST" enctype="multipart/form-data">
                <fieldset id="fieldsetText">
                    <div id="inputArea">
                        <div>
                            <label id="inputTextLabel" for="">Nom du produit :</label>
                            <input id="inputText" type="text" name="name" size="20">
                        </div>
                                            
                        <div>
                            <label id="inputTextLabel" for="">Prix du produit :</label>
                            <input id="inputText" type="number" step="any" name="price" size="20">
                        </div>
                                            
                        <div>
                            <label id="inputTextLabel" for="">Quantité désirée :</label>
                            <input id="inputText" type="number" step="qqt" name="qqt" value="1" size="20">
                        </div>                       
                        <div>
                            <label id="inputTextLabel" for="">Catégorie :</label>
                            <select id="inputText" type="select" name="category">
                                <option value="Fruits">Fruits</option>
                                <option value="Legumes">Légumes</option>
                                <option value="Féculents">Féculents</option>
                            </select>
                        </div>                       
                    </div>                   
                </fieldset>
                
                <input id="ajoutProduit" type="submit" name="submit" value="Ajouter"><br>
                <div>
                    <?php
                    session_start();
                        if(isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                            unset ($_SESSION['message']);
                        }
                    ?>
                </div>                
            </form>
        </main>
    </div>
</body>
</html>