
<header class="dashboard-header">
    <img class="dashboard-header__logo" src="<?= getImagePath() ?>/logo.png" alt="Logo du restaurant">
    <h1 class="dashboard-header__title">Modifications des pages</h1>
</header>

<!-- <nav class="dashboard__nav">
    <ul class="dashboard__list">
        <li class="dashboard__item">
            <a href="<?= BASE_URL ?>/dashboard?action=home">Carte</a>
        </li>
        <li class="dashboard__item">
            <a href="<?= BASE_URL ?>/dashboard?action=home">Horaires</a>
        </li>
        <li class="dashboard__item">
            <a href="<?= BASE_URL ?>/dashboard?action=home">Produits</a>
        </li>
    </ul>
</nav> -->


<a href="<?= BASE_URL ?>/src/controllers/auth_controller.php?action=logout" class="button">Se déconnecter</a>