<header class="manage-food-header">
    <a href="<?= BASE_URL ?>/dashboard" alt="Retour à l'accueil" title="Retour à l'accueil">
        <img class="manage-food-header__logo" src="<?= getImagePath() ?>/logo.png" alt="Logo du restaurant">
    </a>
    <h1 class="manage-food-header__title">Menu</h1>
</header>

<section>
    <p class="manage-food__title">Modifiez le menu : </p>
    <section class="manage-food__container">
        <ul class="manage-food-list" id="manage-food-list">
            <?php
            if (isset($_SESSION['foods'])) {
                foreach ($_SESSION['foods'] as $food) {
                    $itemClass = 'manage-food-list__item ';
                    $itemClass = $food->getIsVegetarian() == 1 ? $itemClass .= 'manage-food-list__item--vegetarian' : $itemClass;
                    echo '<li class="'.$itemClass.'" id="manage-food-item-' . $food->getId() . '">';
                    echo '<p id="manage-food-item-name">' . $food->getName() . '</p>';
                    echo '<p id="manage-food-item-ingredients">' . $food->getStringIngredients() . '</p>';
                    echo '<p id="manage-food-item-price">' . $food->getPrice() . '€</p>';
                    echo '<div>';
                    echo '<button class="button button--small button--grey" id="manage-food-edit-' . $food->getId() . '" onclick="editFood(this)">Modifier</button>';
                    echo '<a href="' . BASE_URL . '/src/controllers/food_controller.php?action=delete&id=' . $food->getId() . '" class="manage-food-delete-button">
                    <img src="' . getImagePath() . '/icons/delete.png" alt="Supprimer">
                    </a>';
                    echo '</div>';
                    echo '</li>';
                }
            } ?>
        </ul>
    </section>
    <button id="manage-food-btn-add" class="button manage-food__add-button">Ajouter un élément</button>
</section>

<template id="manage-food-template">
    <form class="manage-food-list__edit-form" action="<?= BASE_URL ?>/src/controllers/food_controller.php?action=update" method="POST">
        <input required type="text" placeholder="Nom du plat" id="name" class="manage-food-list__input" name="name">
        <input required type="text" placeholder="Ingrédients" id="ingredients" class="manage-food-list__input" name="ingredients">
        <input required min="0" step=".01" type="number" placeholder="Prix" id="price" class="manage-food-list__input" name="price">
        <div class="manage-food-list__checkbox">
            <label>Végétarien</label>
            <input type="checkbox" name="vegetarian" value="vegetarian" id="vegetarian">
        </div>
        <input class="button button--small" type="submit" value="Valider">
    </form>
</template>