<?php session_start();
$_SESSION['id'] = 2;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPME Team - Voiture</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="main-title">L'application mobile</h1>

    <script src="app.js"></script>
</body>

<div class="container-mobile">
    <div class="mobile-card">
        <img src="assets/mobile-write.svg" alt="" class="mobile-card_image">
        <h2 class="mobile-card_title">Rédiger un contenu</h2>
        <p class="mobile-card_text">Créer un article avec une mise en
            forme et récupérer le code à
            insérer dans l’application.</p>
        <div class="mobile-card_footer">
            <img src="assets/arrow-right.svg" alt="" class="mobile-card_footerIcon">
        </div>
    </div>

    <div class="mobile-card">
        <img src="assets/mobile-give.svg" alt="" class="mobile-card_image">
        <h2 class="mobile-card_title">Proposer un article</h2>
        <p class="mobile-card_text">Déposer un texte ou autre contenu
            et faire rédiger l’article par quelqu’un
            d’autre.</p>
        <div class="mobile-card_footer">
            <img src="assets/arrow-right.svg" alt="" class="mobile-card_footerIcon">
        </div>
    </div>

    <div class="mobile-card" onclick="document.location.assign('guide-application.php')">
        <img src="assets/mobile-info.svg" alt="" class="mobile-card_image">
        <h2 class="mobile-card_title">Guide d'utilisation</h2>
        <p class="mobile-card_text">Tutoriels pour prendre en main
            l’ application. Créations d’articles,
            gestion des badges ...
        </p>
        <div class="mobile-card_footer">
            <img src="assets/arrow-right.svg" alt="" class="mobile-card_footerIcon">
        </div>
    </div>
</div>

</html>