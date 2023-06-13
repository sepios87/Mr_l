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
    <?php
    if (isset($pageName)) {
        $path = "src/pages/$pageName/$pageName.style.css";
        if (file_exists($path)) {
    ?>
            <link rel="stylesheet" href="<?= $path ?>">
    <?php }
    } ?>

</head>

<body>