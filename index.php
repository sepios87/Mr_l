<?php 

// Importer les classes avant de démarrer la session pour la deserialisation
require_once 'src/models/schedule.class.php';
session_start();

require_once 'src/core/config.php';
require_once 'src/core/utils.php';
require_once 'src/core/autoload.php';

// require_once 'src/shared/header.php';
// require_once 'src/pages/home/home.php';
require_once 'src/core/router.php';

?>

<?php
require_once 'src/shared/footer/footer.php';
