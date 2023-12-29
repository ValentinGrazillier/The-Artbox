<!-- Appel du fichier oeuvres.php -->
<?php
    require 'oeuvres.php';
?>

<!-- Intégration du header.php -->
<?php include('header.php'); ?>

<!-- ID -->
<?php 
    $identifiant = $_GET ['id'];
    $oeuvre = $oeuvres [$identifiant];
?>

<!-- Zone correspondant à l'oeuvre -->
<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?= $oeuvre[0];?>" alt="<?= $oeuvre[1];?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= $oeuvre[1];?></h1>
        <p class="description"><?= $oeuvre[2];?></p>
        <p class="description-complete"><?= $oeuvre[3];?></p>
    </div>
</article>

<!-- Intégration footer.php -->
<?php include('footer.php'); ?>