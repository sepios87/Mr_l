<header class="home-header">
    <img class="home-header__logo" src="<?= getImagePath() ?>/logo.png" alt="Logo du restaurant">
    <h1 class="home-header__title">Le hot dog à la saucisse de toulouse</h1>
    <a class="button home-header__button" href="#restaurant-menu" title="Lien pour aller vers la liste des hot-dog">Découvre nos recettes</a>
</header>

<section class="home-supplier">
    <h2 class="home-supplier__title">Des produits <br> frais et locaux</h2>
    <ul class="home-supplier__list">
        <li class="home-supplier-item--explain">
            <h3 class="home-supplier__explain">On prend à coeur de travailler avec un maximum de produits frais et locaux</h3>
        </li>
        <li class="home-supplier-item">
            <figure>
                <p class="home-supplier-item__title">La boulange d'Angéline</p>
                <img class="home-supplier-item__img" src="<?= getImagePath() ?>/suppliers/pain_boulangerie_angeline.jpg" alt="Pain de la boulangerie d'Angéline">
                <figcaption class="home-supplier-item__figcaption">
                    <strong>Pain ultra moelleux</strong>, méga bon. <br>
                    Coeur sur Guillaume et Antoine. <br>
                    37 av. de l'URSS, 31400 Toulouse
                </figcaption>
            </figure>
        </li>
        <li class="home-supplier-item">
            <figure>
                <p class="home-supplier-item__title">Agriculture locale</p>
                <img class="home-supplier-item__img" src="<?= getImagePath() ?>/suppliers/herbe_aromatique_locale.jpg" alt="Herbes aromatiques locales">
                <figcaption class="home-supplier-item__figcaption">
                    Nos herbes fraiches et légumes proviennent de <strong>l'agriculture locale</strong>
                </figcaption>
            </figure>
        </li>
        <li class="home-supplier-item">
            <figure>
                <p class="home-supplier-item__title">Ketchup Sanchon</p>
                <img class="home-supplier-item__img" src="<?= getImagePath() ?>/suppliers/ketchup_sanchon.jpg" alt="Ketchup Sanchon">
                <figcaption class="home-supplier-item__figcaption">
                    Des sauces locales et savoureuses tout droit venues de chez <a class="home-supplier-item__link" href="https://www.marcelsenchou.fr/" target="_blank" title="Lien vers le site des ariègeois">les ariègeois</a>.
                </figcaption>
            </figure>
        </li>
        <li>
            <figure class="home-supplier-item">
                <p class="home-supplier-item__title">Boucherie Côtelette</p>
                <img class="home-supplier-item__img" src="<?= getImagePath() ?>/suppliers/stephane_boucherie_cotelette.jpg" alt="Stéphane de la boucherie Côtelette">
                <figcaption class="home-supplier-item__figcaption">
                    C'est chez Stéphane à la <a class="home-supplier-item__link" href="https://www.instagram.com/boucherie.cotelette/" target="_blank" title="Lien vers l'instagram de Stéphane">boucherie cotelette</a> qu'on chope notre super saucisse de Toulouse. BIG diamêtre pour un BIG kiff. <br>
                    22 av. de l'URSS, 31400 Toulouse <br>
                </figcaption>
            </figure>
        </li>
    </ul>
</section>

<section class="home-restaurant-menu" id="restaurant-menu">
    <h2 class="home-restaurant-menu__title">Une carte avec <br> des recettes cools</h2>
    <h3 class="home-restaurant-menu__explain">Zig zag de moutarde américaine sur nos Hot-dogs à la saucisse de toulouse</h3>
    <div class="home-restaurant-menu__container">
        <div>
            <ul class="home-restaurant-menu__list">
                <?php
                if (isset($_SESSION['foods'])) {
                    foreach ($_SESSION['foods'] as $food) { ?>
                        <li class="home-menu-item <?php if($food->getIsVegetarian()) echo 'home-menu-item--vegetarian';  ?>">
                            <div class="home-menu-item__recipe">
                                <p><?= $food->getName(); ?></p>
                                <ul class="home-menu-item__ingredients">
                                    <?php $ingredient = $food->getIngredients(); 
                                    foreach ($ingredient as $value) { 
                                    ?>
                                       <li> <?= $value ?></li>
                                     <?php  } ?>
                                </ul>
                            </div>
                            <span><?= number_format($food->getPrice(), 1, '.', ''); ?></span>
                        </li>
                    <?php }
                } ?>

            </ul>
            <p class="home-restaurant-menu__note">
                <span>*Petites notes :</span><br>
                - Nos Pains sont artisanaux et locaux<br>
                - Notre saucisse de toulouse vient de chez cotelette (2km)<br>
                - Nos ketchups viennent d'ariège
            </p>
        </div>
        <h2 class="home-restaurant-menu__button"><a href="assets/files/carte_restaurant.pdf" target="_blank" title="Carte du restaurant">Voir la carte</a></h2>
    </div>

</section>

<div class="home-gallery">
    <ul class="home-gallery__list">
        <li class="home-gallery__item">
            <img class="home-gallery__img" src="<?= getImagePath() ?>/gallery/ingredients_hot_dog.jpg" alt="Ingrédients pour faire un hot dog">
        </li>
        <li class="home-gallery__item">
            <img class="home-gallery__img" src="<?= getImagePath() ?>/gallery/hot_dog_toutouyoutou.jpg" alt="Hot dog toutouyoutou">
        </li>
        <li class="home-gallery__item">
            <img class="home-gallery__img" src="<?= getImagePath() ?>/gallery/hot_dog_woaf_the_fuck.jpg" alt="Hot dog woaf the fuck">
        </li>
        <li class="home-gallery__item home-gallery__item--desktop">
            <img class="home-gallery__img" src="<?= getImagePath() ?>/gallery/baby_hot_dogs.jpg" alt="Lots de trois petits hot-dogs">
        </li>
        <li class="home-gallery__item home-gallery__item--desktop">
            <img class="home-gallery__img" src="<?= getImagePath() ?>/gallery/pop_des_sables.jpg" alt="Bâtonnet de pop-corns enrobés de chocolat">
        </li>
        <li class="home-gallery__item home-gallery__item--desktop">
            <img class="home-gallery__img" src="<?= getImagePath() ?>/gallery/nachos-monsieur-l.jpg" alt="Barquette de nachos avec sa sauce">
        </li>
        <li class="home-gallery__item home-gallery__item--desktop">
            <img class="home-gallery__img" src="<?= getImagePath() ?>/gallery/pain_moelleux_boulangerie_angeline.jpg" alt="Pain tressé marbré">
        </li>
    </ul>
</div>

<section class="home-lifestyle">
    <img class="home-lifestyle__mrl" src="<?= getImagePath() ?>/mrl.png" alt="Titre monsieurl">
    <span class="home-lifestyle__slogan">Lifestyle</span>
    <h2 class="home-lifestyle__title">MR.L c'est + que de la street food</h2>
    <div class="home-lifestyle__explain">
        <h3>Viens shopper au resto nos <br> tee-shirts et assiettes</h3>
        <span>
            Au <a href="https://goo.gl/maps/EkaBsxkriKoesbj48" target="_blank" title="Navigations vers 8 rue du Languedoc">8 rue du Languedoc</a>
            <br> Ou par DM sur <a href="https://www.instagram.com/mrl_hotdog/" target="_blank" title="Lien de l'instagram de mr.L">notre insta</a> pour commander
        </span>
    </div>
</section>

<section class="home-tee-shirt">
    <h2 class="home-tee-shirt__title">Nos tee-shirt</h2>
    <ul class="home-tee-shirt__list">
        <li class="home-tee-shirt__item">
            <figure class="home-tee-shirt__figure">
                <img class="home-tee-shirt__img" src="<?= getImagePath() ?>/tee-shirt/tee-shirt_hot_dog.jpg" alt="Tee-shirt hot-dog">
                <figcaption class="home-tee-shirt__caption">
                    <strong>Modèle HOT-DOG</strong><br>
                    Du XS au L<br>
                    29 euros
                </figcaption>
            </figure>
        </li>
        <li class="home-tee-shirt__item">
            <figure class="home-tee-shirt__figure">
                <img class="home-tee-shirt__img" src="<?= getImagePath() ?>/tee-shirt/tee-shirt_stc.jpg" alt="Tee-shirt STC">
                <figcaption class="home-tee-shirt__caption">
                    <strong>Modèle STC</strong><br>
                    Du XS au L <br>
                    29 euros
                </figcaption>
            </figure>
        </li>
        <li class="home-tee-shirt__item">
            <figure class="home-tee-shirt__figure">
                <img class="home-tee-shirt__img" src="<?= getImagePath() ?>/tee-shirt/tee-shirt_trop_bon.jpg" alt="Tee-shirt trop bon">
                <figcaption class="home-tee-shirt__caption">
                    <strong>Modèle Trop Bon</strong><br>
                    Du XS au L <br>
                    29 euros
                </figcaption>
            </figure>
        </li>
    </ul>
</section>

<section class="home-plate">
    <h2 class="home-plate__title">Nos assiettes</h2>
    <p class="home-plate__explain">
        <strong>Assiettes faites à la main</strong><br>
        75 euros la douzaine<br>
        7.5 euros l'unité<br>
        *Quantité très limitée
    </p>
    <ul class="home-plate__list">
        <li class="home-plate__item">
            <img class="home-plate__img" src="<?= getImagePath() ?>/plate/boite_assiettes.jpg" alt="Boite d'assiettes">
        </li>
        <li class="home-plate__item">
            <img class="home-plate__img" src="<?= getImagePath() ?>/plate/exposition_assiettes.jpg" alt="Exposition d'assiettes">
        </li>
    </ul>
</section>