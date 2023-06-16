<header class="manage-schedule-header">
    <img class="manage-schedule-header__logo" src="<?= getImagePath() ?>/logo.png" alt="Logo du restaurant">
    <h1 class="manage-schedule-header__title">Horaires</h1>
</header>

<form action="<?= BASE_URL ?>/src/controllers/schedule_controller.php?action=update" method="POST"  class="manage-schedule">
    <p class="manage-schedule__title">Précisez les horaires pour chaque jour de la semaine : </p>
    <ul>
        <?php
        if (isset($_SESSION['schedules'])) {
            foreach ($_SESSION['schedules'] as $schedule) {?>
                <li class="manage-schedule__item">
                    <label for="day<?= $schedule->getId() ?>" class="manage-schedule__label"> <?= $schedule->getDay() ?></label>
                    <input class="manage-schedule__input" type="day<?= $schedule->getId() ?>" name="day<?= $schedule->getId() ?>" id="day<?= $schedule->getId() ?>" placeholder="Horaires" value="<?= $schedule->getHourly() ?>" required>
                </li>
            <?php }
        } ?>
    </ul>

    <input type="submit" value="Enregistrer" class="button manage-schedule__btn">
</form>


