<header class="manage-food-header">
    <img class="manage-food-header__logo" src="<?= getImagePath() ?>/logo.png" alt="Logo du restaurant">
    <h1 class="manage-food-header__title">Menu</h1>
</header>

<section>
    <p class="manage-food__title">Modifiez le menu : </p>
    <section class="manage-food__container">
        <ul class="manager-food-list">
            <li class="manager-food-list__item">
                <div>
                    <p>Hot dog</p>
                    <p>Sauce cool</p>
                    <p>20€</p>
                </div>
                <button>Modifier</button>
            </li>
            <li class="manager-food-list__item">
                <div>
                    <p>Hot dog</p>
                    <p>Sauce cool</p>
                    <p>20€</p>
                </div>
                <button>Modifier</button>
            </li>
            <li class="manager-food-list__item">
                <form class="manager-food-list__edit-form">
                    <input type="text" placeholder="Nom du plat">
                    <textarea type="text" placeholder="Ingrédients" ari></textarea>
                    <input type="text" placeholder="Prix">
                    <input type="submit" value="Valider">
                </form>
            </li>
        </ul>
    </section>
    <button class="button manage-food__add-button">Ajouter un élément</button>
</section>