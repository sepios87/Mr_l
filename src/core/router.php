<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

switch ($page) {
    case 'home':
        displayPage('home');
        break;
    default:
        displayPage('404');
        break;
}

function displayPage($pageName)
{
    require_once 'src/shared/header.php';
    require_once 'src/pages/' . $pageName . '/' . $pageName . '.php';
}
