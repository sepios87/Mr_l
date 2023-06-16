
<header class="dashboard-header">
    <img class="dashboard-header__logo" src="<?= getImagePath() ?>/logo.png" alt="Logo du restaurant">
    <h1 class="dashboard-header__title">Panneau d'administration</h1>
</header>

<section class="dashboard-tiles">
    <div class="dashboard-card">
        <p>Bonjour <?= $_SESSION['user'] ?> </p>
        <a href="<?= BASE_URL ?>/src/controllers/auth_controller.php?action=logout" class="button">Se déconnecter</a>
    </div>
    <hr class="dashboard-tiles__divider">
    <div class="dashboard-card dashboard-card--small">
        <p>Administrer les horaires d'ouverture</p>
        <a href="<?= BASE_URL ?>/manage-schedule" class="button dashboard-card__button">Modifier les horaires</a>
    </div>
    <div class="dashboard-card dashboard-card--small">
        <p>Administrer le menu du restaurant</p>
        <a href="<?= BASE_URL ?>/manage-food" class="button dashboard-card__button">Modifier le menu</a>
    </div>
</section>