<section>
    <form action="<?= BASE_URL ?>/src/controllers/auth_controller.php?action=login" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Mot de passe" required>
        <input type="submit" value="Login">
    </form>
</section>