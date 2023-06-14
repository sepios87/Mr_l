<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $title ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="<?= $description ?>">
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="Keywords" content="mr l toulouse, hotdog toulouse, hot dog toulouse, monsieur l toulouse, monsieur toulouse, hot dog, le hot dog, monsieur l, hot dog dog, hot dog restaurants">
    <meta name="Copyright" content="Mr.l">
    <meta name="Author" content="Florian TORIBIO / Manon DELEEST">
    <meta name="Identifier-Url" content="https://mrlhotdog.com/">
    <meta name="Reply-To" content="jolimonsieur.l@gmail.com">
    <meta name="Revisit-After" content="15 days">
    <meta name="Robots" content="all">
    <meta name="Rating" content="general">
    <meta name="Distribution" content="global">
    <meta name="Geography" content="Toulouse,France,31000">
    <meta name="robots" content="index, follow, archive">
    <meta property="og:title" content="<?= $description ?>">
    <meta property="og:type" content="siteweb">
    <meta property="og:url" content="https://mrlhotdog.com/">
    <meta property="og:image" content="assets/img/logo.png">

    <link rel="manifest" href="manifest.webmanifest">
    <link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png">
    <link rel="icon" href="assets/ico/favicon.ico">

    <link rel="stylesheet" href="src/style/reset.css">
    <link rel="stylesheet" href="src/style/base.css">
    <link rel="stylesheet" href="src/style/font.css">
    <link rel="stylesheet" href="src/shared/header/header.style.css">
    <link rel="stylesheet" href="src/shared/footer/footer.style.css">
    <?php
    if (isset($pageName)) {
        $path = "src/pages/$pageName/$pageName.style.css";
        if (file_exists($path)) {
    ?>
            <link rel="stylesheet" href="<?= $path ?>">
    <?php }
    } ?>
</head>

<nav class="header-nav">
    <input class="header-nav__checkbox" type="checkbox" id="nav-toggle">
    <label class="header-nav__button" for="nav-toggle">
        <img class="header-nav__burger" src="assets/img/icons/menu.png">
    </label>
    <ul class="header-nav__list">
        <li class="header-nav__item <?php if ($pageName == 'home') echo 'header-nav__item--selected' ?>">
            <a href="http://localhost/mr_l">Accueil</a>
        </li>
        <li class="header-nav__item <?php if ($pageName == 'event') echo 'header-nav__item--selected' ?>">
            <a href="http://localhost/mr_l/event">Evènement</a>
        </li>
        <li class="header-nav__item <?php if ($pageName == 'contact') echo 'header-nav__item--selected' ?>">
            <a href="http://localhost/mr_l/contact">Contact</a>
        </li>
    </ul>
</nav>

<body>

    <?php if (!isset($_SESSION['loading'])) {
        $_SESSION['loading'] = true;
    ?>
        <div class="header-loading">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1275.28 500" xml:space="preserve" class="header-loading__svg">
                <g>
                    <path class="header-loading__pain" d="M762.13,373.19c85.7-85.7,88.6-193.96,51-231.56c-13.3-13.3-35.15-37.56-86.15-15.16
    			c-51,22.4-61.34,79.26-103.38,115.09s-93.74,45.97-126.81,84.77c-26.22,30.76-17.14,69.69-1.38,85.46
    			C542.46,458.82,665.39,469.94,762.13,373.19z" />
                    <path class="header-loading__pain" d="M456.68,298.14c0,0-19.36-52.62,23.56-90.35s60.44-37.79,89.44-67.19s51.69-57.37,75.46-76.5
    			s82.32-6.18,82.32-6.18" />
                    <path class="header-loading__pain" d="M481.33,382.58c0,0-31.79,19.42-51.21,0c-19.42-19.42-4.61-50.22,4.14-61.07
    			c20.9-27.12,66.68-58.92,118.37-95.11s61.5-71.3,111.65-120.95s114.26-80.02,142.66-51.62s-19.76,68.04-19.76,68.04" />
                </g>
                <path class="header-loading__sauce" d="M467.25,376.77c-14.13-57.24-9.44-75.45-1.03-80.12c11.83-6.57,27.49,15.65,44.97,9.82
    		c28.87-9.64,21.24-81.96,43.42-86.32c13.55-2.67,21.78,23.28,36.18,21.19c25.46-3.69,23.78-88.24,52.72-93.56
    		c13.61-2.5,20.43,15.01,33.08,11.89c26.19-6.46,19.98-87.24,39.28-90.45c15-2.5,27.45,44.82,47.04,43.94
    		c15.37-0.7,26.56-30.69,33.6-55.82" />
            </svg>
        </div>
    <?php } ?>