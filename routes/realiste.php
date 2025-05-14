<!-- This Source Code Form is subject to the terms of the Mozilla Public
  License, v. 2.0. If a copy of the MPL was not distributed with this
  file, You can obtain one at http://mozilla.org/MPL/2.0/.
  This Source Code Form is "Incompatible With Secondary Licenses", as
  defined by the Mozilla Public License, v. 2.0. -->
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "database" . DIRECTORY_SEPARATOR . "initial.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "database" . DIRECTORY_SEPARATOR . "categorie_db.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "database" . DIRECTORY_SEPARATOR . "produit_db.php";
$connexion = creerConnexion();
$titre = getCategoryByID($connexion, 1);
$limit = ($base == $script ? 6 : null);
?>
<div class="container px-8 <?= ($base != $script ? "mb-12" : "") ?>">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
        <?php foreach (
            array_slice(shuffle_return(getAllProductsByCategorie($connexion, 1)), 0, $limit) as $produit
        ) : ?>
            <div class="group max-w-60 shadow-sm rounded-lg hover:shadow-lg transition-all ease-in-out duration-200">
                <a href="/add_panier?produit=<?= $produit["id_produit"] ?>">
                    <div class="flex flex-col h-full">
                        <img class="rounded-t-lg h-50" src="<?= $produit["image_produit"] ?>" alt="Image produit de <?= $produit["intituler_produit"] ?>">
                        <div class="flex flex-col p-6 gap-3 h-full">
                            <h2 class="text-2xl font-bold break-all"><?= $produit["intituler_produit"] ?></h2>
                            <p class="flex-grow"><?= $produit["description_produit"] ?></p>
                            <div class="text-center relative w-full cursor-pointer overflow-hidden">
                                <p class="relative text-lg font-semibold transition-opacity ease-in-out duration-300 opacity-100 group-hover:opacity-0"><?= $produit["prix_produit"] ?>€</p>
                                <p class="absolute top-0 left-0 w-full text-lg font-semibold transition-opacity ease-in-out duration-300 opacity-0 group-hover:opacity-100 text-white bg-black rounded-xl"><?= (intval($produit["quantiter_stock_produit"]) >= 1 ? "Adoptez {$produit["genre_produit"]}" : "Rupture de stock") ?> !</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>