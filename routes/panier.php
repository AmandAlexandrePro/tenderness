<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "database" . DIRECTORY_SEPARATOR . "initial.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "database" . DIRECTORY_SEPARATOR . "produit_db.php";
$connexion = creerConnexion();
?>
<?php if ((isset($_SESSION["panier"]) == true ? (is_array($_SESSION["panier"]) == true ? empty($_SESSION["panier"]) != true : false) == true : false) == true) : ?>
    <div class="flex flex-col gap-16 <?= ($base != $script ? "mb-12" : "") ?>">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 md:block">
        <?php foreach ($_SESSION["panier"] as $labelPanier => $produitPanier) : ?>
            <?php $produit = getProductByID($connexion, $labelPanier) ?>
            <form action="/add_panier" method="get">
                <input class="hidden" name="produit" id="produit" value="<?= $labelPanier ?>" onchange="this.value = '<?= $labelPanier ?>'">
                <div class="container mb-8 flex flex-col md:flex-row w-60 md:w-full h-full md:h-50 shadow-sm rounded-lg hover:shadow-lg transition-shadow ease-in-out duration-200 md:gap-8">
                    <img class="rounded-t-lg h-50 md:h-full" src="<?= $produit["image_produit"] ?>" alt="Image produit de <?= $produit["intituler_produit"] ?>">
                    <div class="flex flex-grow flex-col gap-4 py-6 px-4 md:px-0">
                        <h1 class="text-2xl font-bold break-all"><?= $produit["intituler_produit"] ?></h1>
                        <p class="flex-grow"><?= $produit["description_produit"] ?></p>
                        <div class="flex flex-row justify-around">
                            <div>
                                <label for="quantiter">quantiter :</label>
                                <input class="text-center" type="number" name="quantiter" id="quantiter" placeholder="Quantiter sélectionné : <?= $produitPanier ?>" value="<?= $produitPanier ?>" min="1" max="<?= $produit["quantiter_stock_produit"] ?>">
                            </div>
                            <a class="transition-all ease-in-out duration-300 self-center hover:bg-black rounded-xl p-2 text-red-500" href="/remove_panier?produit=<?= $labelPanier ?>">Supprimer</a>
                        </div>
                    </div>
                </div>
            </form>
        <?php endforeach; ?>
        </div>
        <a href="#confirmPanier" class="w-full text-center flex-grow cursor-pointer text-white px-2 py-4 text-lg font-semibold transition-all duration-200 ease-in-out shadow-none bg-black rounded-xl hover:shadow-[0_0_15px_2px_rgba(0,0,0,0.55)]">Confirmer votre panier !</a>
    </div>
<?php else : ?>
    <h1>Aucun article dans le panier !</h1>
<?php endif; ?>
<script src="/panier.js"></script>