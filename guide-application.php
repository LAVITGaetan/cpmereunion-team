<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPME Team - Guide d'utilisation</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="main-title">Guides et turoriels</h1>

    <script src="app.js"></script>
</body>

<div class="container-guide">
    <div class="guide-card">
        <div class="guide-card_header">
            <img src="assets/dahsboard-icon.svg" class="guide-card_icon">
            <h2 class="guide-card_title">Se connecter au tableau de bord</h2>
        </div>
        <p class="label-row">Lien du tableau de bord :</p>
        <p class="content-row"><a href="https://blog-fr.crowdaa.com/48afec60-e661-47f8-b880-517cbc03c95c/home">https://blog-fr.crowdaa.com</a></p>
        <p class="label-row">Mes identifiants de connexion</p>
        <p class="content-row">Communication@pmereunion.re</p>
        <p class="content-row">55EZ45</p>
    </div>

    <div class="guide-card" id="guide-card_middle">
        <div class="guide-card_header">
            <img src="assets/article-icon.svg" class="guide-card_icon">
            <h2 class="guide-card_title">Ajouter un article dans l'application</h2>
        </div>
        <p class="label-row">Etape 1 :</p>
        <p class="content-row">Dans le tableau de bord, cliquez sur l'onglet <span class="important-text">contenu</span>.</p>
        <p class="label-row">Etape 2 :</p>
        <p class="content-row">Choisissez le <span class="important-text">dossier</span> dans lequel vous souhaitez <span class="important-text">créer l'article.</span></p>
        <p class="label-row">Etape 3 :</p>
        <p class="content-row">Cliquez sur le <span class="important-text">bouton d'ajout</span>.</p>

        <p class="label-row hidden">Etape 4 :</p>
        <p class="content-row hidden">Ajoutez un <span class="important-text">titre et une image</span> pour votre article dans les <span class="important-text">deux premiers champs</span></p>

        <p class="label-row hidden">Etape 5 :</p>
        <p class="content-row hidden"><span class="important-text">Rédigez le contenu</span> de votre article dans le champ prévu à cet effet.</p>
        <p class="label-row hidden">Etape 6 :</p>
        <p class="content-row hidden"><span class="important-text">Enregistrez et publiez</span> votre article.</p>
        <button onclick="showGuideContent('article')" class="guide-card_button" id="guide-card_button0">En savoir plus</button>

    </div>

    <div class="guide-card">
        <div class="guide-card_header">
            <img src="assets/permission-icon.svg" class="guide-card_icon">
            <h2 class="guide-card_title">Gérer les permissions d'un article</h2>
        </div>
        <p class="label-row">En cours de rédaction...</p>
    </div>
</div>
<script src="guide.js"></script>

</html>