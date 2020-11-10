<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- wp_head permet d'avoir une balise title dynamique -->
    <? wp_head() ?>
    <link rel="stylesheet" href="<?php bloginfo('assets/styles.css'); ?>">

    <!-- Polices Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bibliothèque Fontawesome -->
    <script src="https://kit.fontawesome.com/743d8e6470.js" crossorigin="anonymous"></script>

    <!-- Bibliothèque Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <!-- Google Maps -->
    <script src="js/geoloc.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDmCf5PuwqxYCyJ5IKqyxNFURbMDKln_w"></script>



</head>
<body>

<header class="navbar navbar-expand-md navbar-light">
    <a href="index.html">
        <img src="img/logos/incamp/logo-accueil.png" alt="Logo" class="navbar-brand" style="width: 200px;">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navigation">
            <span class="navbar-toggler-icon">

            </span>
    </button>

    <div class="collapse navbar-collapse font-weight-bold" id="navigation">
        <nav class="navbar-nav ml-auto">
            <a href="#" class="nav-item nav-link disabled pr-md-2">Accueil</a>
            <a href="initiatives.html" class="nav-item nav-link pr-md-2">Présentation des initiatives </a>
            <a href="guide.html" class="nav-item nav-link pr-md-2">Guides et modes d'emploi</a>
            <a href="tepcv.html" class="nav-item nav-link pr-md-2">TEPCV : c'est quoi ?</a>
            <a href="quiz.html" class="nav-item nav-link pr-md-2">LE QUIZ</a>
        </nav>
    </div>
</header>
