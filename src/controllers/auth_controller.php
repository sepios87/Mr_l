<?php

include_once '../core/config.php';
include_once '../repositories/pdo_repository.php';
include_once '../repositories/auth_repository.php';
$auth_repository = new AuthRepository(PdoRepository::getInstance());

enum Auth: string
{
    case Login = 'login';
    case Logout = 'logout';
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = Auth::Logout;
}

switch ($action) {
    case Auth::Login->value:
        if (isset($_POST['email']) && isset($_POST['password'])) {
            if ($auth_repository->login($_POST['email'], $_POST['password'])) {
                header('Location: ' . BASE_URL . '/dashboard');
            } else {
                echo 'login failed';
            }
        } else {
            echo 'login failed';
        }
        break;
    case Auth::Logout->value:
        $auth_repository->logout();
        header('Location: ' . BASE_URL . '/');
        break;
    default:
        echo 'default';
        break;
}
