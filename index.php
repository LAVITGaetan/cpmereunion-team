<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPME Team</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- MENU -->
    <div class="menu">
    <img src="assets/menu.svg" alt="Icone de navigation" class="menu-icon">

    </div>

    <!-- TITRE -->
    <h1 class="main-title">Accueil</h1>


    <div class="container-index">

        <!-- CARTE : VOITURE -->
        <div onclick="document.location.assign('voiture.php')" class="index-card">
            <img class="index-card_svg" src="assets/car-icon.svg" alt="Icone de voiture">
            <h2 class="index-card_title">Voitures de service</h2>
        </div>

        <!-- CARTE : APPLICATION MOBILE -->
        <div onclick="document.location.assign('application-mobile.php')" class="index-card">
            <img class="index-card_svg" src="assets/mobile-icon.svg" alt="Icone d'application mobile">
            <h2 class="index-card_title">Application mobile</h2>
        </div>

        <!-- CARTE : FICHES TEMPS -->
        <div class="index-card">
            <img class="index-card_svg" src="assets/time-icon.svg" alt="Icone de fiche temps">
            <h2 class="index-card_title">Fiches temps</h2>
        </div>

    </div>
</body>

</html>