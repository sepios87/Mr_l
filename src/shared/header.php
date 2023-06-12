<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Le roi du Hot Dog</title>
    <?php if (isset($pageName)) { ?>
        <link rel="stylesheet" href="src/pages/<?= $pageName; ?>/<?= $pageName; ?>.style.css">
    <?php } ?>
</head>

<body>