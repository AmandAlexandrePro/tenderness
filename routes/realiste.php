<!-- This Source Code Form is subject to the terms of the Mozilla Public
  License, v. 2.0. If a copy of the MPL was not distributed with this
  file, You can obtain one at http://mozilla.org/MPL/2.0/.
  This Source Code Form is "Incompatible With Secondary Licenses", as
  defined by the Mozilla Public License, v. 2.0. -->
<?php
$titre = "Réaliste";
$limit = ($base == $script ? 6 : null);
?>
<div class="container px-8 <?= ($base != $script ? "mb-12" : "") ?>">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
        <?php foreach (
            array_slice(shuffle_return([
                [
                    "nom" => "Alpaga",
                    "description" => "Originaire des Andes, cet animal calme et sociable est apprécié pour sa laine douce et sa nature bienveillante.",
                    "image" => "/shop/realist/alpaga.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 20
                    ]
                ],
                [
                    "nom" => "Axolotl",
                    "description" => "Originaire des lacs mexicains, cet amphibien aquatique garde sa forme juvénile toute sa vie, avec ses branchies externes caractéristiques et son sourire apaisant.",
                    "image" => "/shop/realist/axolotl.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Castor",
                    "description" => "Ce rongeur ingénieux, célèbre pour ses barrages, vit près des rivières et est reconnu pour son travail acharné et sa queue plate distinctive.",
                    "image" => "/shop/realist/castor.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 40
                    ]
                ],
                [
                    "nom" => "Chat",
                    "description" => "Indépendant et affectueux, ce compagnon à quatre pattes est apprécié pour sa curiosité, sa souplesse et ses ronronnements apaisants.",
                    "image" => "/shop/realist/chat.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 20
                    ]
                ],
                [
                    "nom" => "Chevreuil",
                    "description" => "Discret et agile, ce petit cervidé vit dans les forêts et les bois, se distinguant par sa grâce et ses sauts élégants.",
                    "image" => "/shop/realist/chevreuil.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Cygne",
                    "description" => "Symbole de beauté et de grâce, ce grand oiseau au plumage blanc évolue majestueusement sur les lacs et les étangs.",
                    "image" => "/shop/realist/cygne.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 40
                    ]
                ],
                [
                    "nom" => "Dauphin",
                    "description" => "Intelligent et sociable, ce mammifère marin nage avec aisance dans les océans, captivant par sa curiosité et ses acrobaties.",
                    "image" => "/shop/realist/dauphin.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Écureuil",
                    "description" => "Agile et énergique, cet adorable rongeur grimpe avec aisance aux arbres, collectant des noisettes pour l'hiver.",
                    "image" => "/shop/realist/ecureuil.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 20
                    ]
                ],
                [
                    "nom" => "Hamster",
                    "description" => "Petit et curieux, ce rongeur aime stocker des provisions dans ses joues et explore avec enthousiasme son espace.",
                    "image" => "/shop/realist/hamster.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 10
                    ]
                ],
                [
                    "nom" => "Léopard des Neiges",
                    "description" => "Habillant les montagnes enneigées de son pelage tacheté, ce félin discret est réputé pour sa furtivité et sa grande agilité.",
                    "image" => "/shop/realist/leopard_des_neiges.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 40
                    ]
                ],
                [
                    "nom" => "Loutre",
                    "description" => "Vivant près des rivières, cet animal aquatique espiègle est connu pour ses jeux sous l'eau et son pelage épais et imperméable.",
                    "image" => "/shop/realist/loutre.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Manchot",
                    "description" => "Adapté aux eaux glacées, cet animal se distingue par sa démarche maladroite et ses plongeons agiles pour pêcher.",
                    "image" => "/shop/realist/manchot.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Panda Roux",
                    "description" => "Ce petit mammifère au pelage rouge-orangé, agile et joueur, évolue avec grâce dans les forêts montagneuses de Chine.",
                    "image" => "/shop/realist/panda_roux.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Panda",
                    "description" => "Ce géant paisible, au pelage noir et blanc, se nourrit principalement de bambou et vit dans les forêts montagneuses de Chine.",
                    "image" => "/shop/realist/panda.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Poisson Clown",
                    "description" => "Vibrant et coloré, ce poisson marin forme une relation symbiotique avec les anémones, où il trouve protection et nourriture.",
                    "image" => "/shop/realist/poisson_clown.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 10
                    ]
                ],
                [
                    "nom" => "Putois",
                    "description" => "Ce petit carnivore au pelage rayé est connu pour son caractère timide et son puissant jet de défense lorsqu'il se sent menacé.",
                    "image" => "/shop/realist/putois.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Renard",
                    "description" => "Habile et rusé, ce mammifère au pelage flamboyant est un maître de l'adaptation, vivant aussi bien dans les forêts que les milieux urbains.",
                    "image" => "/shop/realist/renard.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 40
                    ]
                ],
                [
                    "nom" => "Tigre",
                    "description" => "Imposant et majestueux, ce grand félin au pelage rayé est un prédateur agile, symbole de puissance et de mystère dans les jungles d'Asie.",
                    "image" => "/shop/realist/tigre.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 40
                    ]
                ]
            ]), 0, $limit) as $produit
        ) : ?>
            <div class="group max-w-60 shadow-sm rounded-lg hover:shadow-lg transition-all ease-in-out duration-200">
                <a href="/realiste#<?= $produit["nom"] ?>">
                    <div class="flex flex-col h-full">
                        <img class="rounded-t-lg h-50" src="<?= $produit["image"] ?>" alt="Image produit de <?= $produit["nom"] ?>">
                        <div class="flex flex-col p-6 gap-3 h-full">
                            <h2 class="text-2xl font-bold break-all"><?= $produit["nom"] ?></h2>
                            <p class="flex-grow"><?= $produit["description"] ?></p>
                            <div class="text-center relative w-full cursor-pointer overflow-hidden">
                                <p class="relative text-lg font-semibold transition-opacity ease-in-out duration-300 opacity-100 group-hover:opacity-0"><?= $produit["prix"]["valeur"] ?>€</p>
                                <p class="absolute top-0 left-0 w-full text-lg font-semibold transition-opacity ease-in-out duration-300 opacity-0 group-hover:opacity-100 text-white bg-black rounded-xl">Adopter <?= $produit["prix"]["label"] ?> !</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>