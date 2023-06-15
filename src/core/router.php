<?php
$origin = str_replace(dirname($_SERVER['PHP_SELF']), '', $_SERVER['REQUEST_URI']);

switch ($origin) {
    case '/':
        displayPage(
            'home',
            'Hotdog toulouse  - Monsieur L',
            'Découvrez un délicieux paradis des hot-dogs ! Notre restaurant de restauration rapide Mr.L vous propose des hot-dogs préparés avec des ingrédients frais et de qualité.'
        );
        break;
    case '/contact':
        if (!isset($_SESSION['schedules'])) {
            header('Location: '. BASE_URL .'/src/controllers/schedule_controller.php?action=get');
        }
        displayPage(
            'contact',
            'Contactez-nous - Monsieur L',
            'Contactez Mr.L, le roi du hot-dog toulousain ! Envoyez-nous un e-mail, suivez-nous sur notre page Instagram ou appelez-nous directement.'
        );
        break;
    case '/event':
        displayPage(
            'event',
            'Hot dog toulouse, évènement - Monsieur L',
            "Envie d'ajouter une touche savoureuse à votre prochain évènement ? Contactez Monsieur L, expert en hot dogs, pour une expérience inoubliable !",
        );
        break;
    case '/login':
        if (isset($_SESSION['user'])) {
            header('Location: ' . BASE_URL . '/dashboard');
        }
        displayPage(
            'login',
            'Connexion - Monsieur L',
            'Connectez-vous à votre compte Mr.L pour commander votre hot-dog préféré !'
        );
        break;
    case '/dashboard':
        displayPage(
            'dashboard',
            'Administration - Monsieur L',
            "Espace d'administration de Mr.L, le roi du hot-dog toulousain.",
            true,
        );
        break;
    case '/manage-schedule': 
        displayPage(
            'manage-schedule',
            'Gestion des horaires - Monsieur L',
            "Gestion des horaires de Mr.L, le roi du hot-dog toulousain.",
            true,
        );
        break;
    default:
        displayPage(
            '404',
            'Erreur 404 - Oups ! Vous avez déviez de site Monsieur L',
            "Désolé, nous avons égaré votre hot-dog ! Vous êtes tombé sur notre page d'erreur 404. Revenez à notre menu savoureux de hot-dogs artisanaux."
        );
        break;
}

// Display the page
// Arguments are used in the header page
// $pageName: the name of the page to display
// $title: the title of the page
// $description: the description of the page
// $withGuard: if true, the page will be displayed only if the user is logged in
function displayPage($pageName, $title = 'Mr.l - Le roi du Hot Dog', $description = '', $withGuard = false)
{
    if ($withGuard && !isset($_SESSION['user'])) {
        header('Location: ' . BASE_URL . '/login');
    }
    require_once 'src/shared/header/header.php';
    require_once 'src/pages/' . $pageName . '/' . $pageName . '.php';
}
