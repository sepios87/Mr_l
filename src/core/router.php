<?php
$origin = str_replace(dirname($_SERVER['PHP_SELF']), '', $_SERVER['REQUEST_URI']);

switch ($origin) {
    case '/':
        displayPage('home');
        break;
    case '/contact':
        displayPage('contact');
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
