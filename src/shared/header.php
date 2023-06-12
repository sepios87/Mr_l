<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Le roi du Hot Dog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    
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