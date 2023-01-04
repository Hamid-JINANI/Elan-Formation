<?php ob_start(); ?>

<p class="">Il y a <?= $requete->rowCount() ?> films</p>

<table class="">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetch_all() as $film) { ?>
                <tr>
                    <td><?= $film["titre_film"] ?></td>
                    <td><?= $film["date_sortie_fr"] ?></td>
                    <td><?= $film["duree_film"] ?></td>
                    <td><?= $film["synopsis_film"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Détail du film";
    $titre_secondaire = "Titre du film (?)";
    $contenu = ob_get_clean();
    require "view/template.php";
?>