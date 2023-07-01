# Mr.L Hot Dog

## Contexte

Reprise du site vitrine du restaurant Mr.L Hot Dog à Toulouse : 
- Optimisations SEO
- Ajustements graphiques
- Améliorations responsives

## Technologie

- PHP 8.1
- HTML / CSS
- JS

## Déploiement

 1. Créer une base de données
 2. Importer et exécuter le script SQL situé à la racine du projet nommé mrl_script.sql
 3. Créer un utilisateur ayant accès à cette base de données
 4. Modifier le fichier src/core/config.php avec les valeurs souhaitées
 
>     define('BASE_URL', 'http://localhost/mr_l'); // Url de base du site
>     define('DB_HOST', 'localhost'); // Hote pour la base de données 
>     define('DB_NAME', 'mrl'); // Nom de la base de données
>     define('DB_USER', 'root'); // Nom d'utilisateur de la base de données
>     define('DB_PASS', ''); // Mot de passe de l'utilisateur de la base de données
>     define('DB_CHAR', 'utf8mb4_general_ci'); // Type de charcode utilisé dans la base de données
>     define('DB_PORT', '3306'); // Port de la base de données
>     define('ENV', 'dev'); // dev ou prod
 
 5. Déposer ensuite le site sur la racine du serveur
 6. Penser à générer un sitemap.xml après le déploiement du site 
