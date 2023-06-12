<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

switch ($page) {
    case 'home':
        $style = 'home'; 
        require_once 'src/shared/header.php';
        require_once 'src/pages/home/home.php';
        break;
}
