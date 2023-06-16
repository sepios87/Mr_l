<header class="manage-food-header">
    <img class="manage-food-header__logo" src="<?= getImagePath() ?>/logo.png" alt="Logo du restaurant">
    <h1 class="manage-food-header__title">Menu</h1>
</header>

<section>
    <p class="manage-food__title">Modifiez le menu : </p>
    <section class="manage-food__container">
        <ul class="manage-food-list" id="manage-food-list">
            <!-- TODO set id -->
            <li class="manage-food-list__item" id="manage-food-item-1">
                <p id="manage-food-item-name">Hot dog</p>
                <p id="manage-food-item-ingredients">Pain, saucisse, sauce</p>
                <p id="manage-food-item-price">20€</p>
                <!-- TODO set id -->
                <button class="button button--small button--grey" id="manage-food-edit-1" onclick="editFood(this)">Modifier</button>
            </li>
        </ul>
    </section>
    <button id="manage-food-btn-add" class="button manage-food__add-button">Ajouter un élément</button>
</section>

<template id="manage-food-template">
    <form class="manage-food-list__edit-form" action="<?= BASE_URL ?>/src/controllers/food_controller.php?action=update" method="POST">
        <input type="text" placeholder="Nom du plat" id="name" class="manage-food-list__input">
        <input type="text" placeholder="Ingrédients" id="ingredients" class="manage-food-list__input">
        <input type="text" placeholder="Prix" id="price" class="manage-food-list__input">
        <div class="manage-food-list__checkbox">
            <label>Végétarien</label>
            <input type="checkbox" name="vegetarian" value="vegetarien">
        </div>
        <input class="button button--small" type="submit" value="Valider">
    </form>
</template>