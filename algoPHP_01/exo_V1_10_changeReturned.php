<!--
    exo_V1_10_changeReturned.php
=============================================
    By AHJ
-->

<h1>exo_V1_10_changeReturned.php</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>

<h2>Résultat</h2>

<?php
    // variables de travail
    $montantAPayer = 152;
    $montantVersé = 200;


    // calcul du reste à rendre
    $resteARendre = $montantVersé - $montantAPayer;


    if ($resteARendre != 0) {
        $resteUnitaire = $resteARendre % 10;
        $nbreDeBilletDix = ($resteARendre - $resteUnitaire)/10;

        $restBilletsCinq = $resteUnitaire % 5;
        $nbrBilletsCinq = ($resteUnitaire - $restBilletsCinq)/5;

        $restePiecesDeux = $restBilletsCinq % 2;
        $nbrePiecesDeDeux = ($restBilletsCinq - $restePiecesDeux)/2;

        $restePiecesUn = $restePiecesDeux % 1;
        $nbrePiecesUn = ($restePiecesDeux - $restePiecesUn)/1;
    }

    echo "<br>Montant à payer : $montantAPayer <br>
        Montant versé : $montantVersé  <br>
        Reste à rendre : $resteARendre <br>
        *********************************** <br>
        Rendu de monnaie :  $nbreDeBilletDix billets de 10 € - $nbrBilletsCinq billet de 5 € - $nbrePiecesDeDeux pièces de 2 € - $nbrePiecesUn pièce de 1 €.<br>";

?>