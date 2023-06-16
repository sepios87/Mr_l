<?php

// Importer les classes avant de démarrer la session pour la deserialisation
require_once 'src/models/schedule.class.php';
require_once 'src/models/food.class.php';

// Define the session lifetime
ini_set('session.gc_maxlifetime', 3600);
session_start();

require_once 'src/core/config.php';
require_once 'src/core/utils.php';
require_once 'src/core/autoload.php';

require_once 'src/core/router.php';

?>

<?php
require_once 'src/shared/footer/footer.php';
