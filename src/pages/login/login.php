<header class="login-header">
    <img class="login-header__logo" src="<?= getImagePath() ?>/logo.png" alt="Logo du restaurant">
</header>

<form action="<?= BASE_URL ?>/src/controllers/auth_controller.php?action=login" method="post" class="login-form">

    <label for="email" class="login-form__label">Email
        <input class="login-form__input" type="email" name="email" id="email" placeholder="Email" required>
    </label>

    <label for="password" class="login-form__label">Mot de passe
        <input class="login-form__input" type="password" name="password" id="password" placeholder="Mot de passe" required>
    </label>
    
    <p class="login-form__error">Email ou mot de passe incorrect </p>

    <input type="submit" value="Login" class="button">
</form>