<?php ob_start(); ?>

<p class="">Il y a <?= $requete->rowCount() ?> acteurs</p>

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
                    <td><?= $film["prenom_personne"] ?></td>
                    <td><?= $film["nom_personne"] ?></td>
                    <td><?= $film["date_naiss_personne"] ?></td>
                    <td><?= $film["lieu_naiss_personne"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Liste des acteurs";
    $titre_secondaire = "Liste des acteurs";
    $contenu = ob_get_clean();
    require "view/template.php";
?>