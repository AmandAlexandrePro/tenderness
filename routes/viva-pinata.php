<!-- This Source Code Form is subject to the terms of the Mozilla Public
  License, v. 2.0. If a copy of the MPL was not distributed with this
  file, You can obtain one at http://mozilla.org/MPL/2.0/.
  This Source Code Form is "Incompatible With Secondary Licenses", as
  defined by the Mozilla Public License, v. 2.0. -->
<?php
$titre = "Viva Piñata";
$limit = ($base == $script ? 6 : null);
?>
<div class="container px-8 <?= ($base != $script ? "mb-12" : "") ?>">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
        <?php foreach (
            array_slice(shuffle_return([
                [
                    "nom" => "Blossom Bunbun",
                    "description" => "Cette adorable créature au pelage rose et aux oreilles fleuries déborde d’énergie et répand bonheur et éclats de rire partout où elle passe.",
                    "image" => "/shop/viva-pinata/blossom_bunbun.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 20
                    ]
                ],
                [
                    "nom" => "BlossomBelle",
                    "description" => "Cette renarde au pelage pêche et à la couronne fleurie rayonne de joie, apportant une touche de magie et de douceur à chaque aventure.",
                    "image" => "/shop/viva-pinata/blossombelle.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Blossomfox Breezy",
                    "description" => "Ce renard pétillant à la crinière colorée déborde d’énergie et de malice, apportant joie et réconfort à chaque instant.",
                    "image" => "/shop/viva-pinata/blossomfox_breezy.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Dottie Bloomflower",
                    "description" => "Cette créature espiègle au pelage tacheté adore danser parmi les fleurs, répandant joie et bonne humeur autour d’elle.",
                    "image" => "/shop/viva-pinata/dottie_bloomflower.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 20
                    ]
                ],
                [
                    "nom" => "Dottybun Bunbun",
                    "description" => "Ce lapin enjoué au pelage tacheté déborde d’énergie et de malice, apportant douceur et bonne humeur à chaque instant.",
                    "image" => "/shop/viva-pinata/dottybun_bunbun.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 20
                    ]
                ],
                [
                    "nom" => "Fizzleblossom",
                    "description" => "Cette adorable créature au pelage duveteux et à la crinière fleurie rayonne de joie, apportant éclat et fantaisie partout où elle passe.",
                    "image" => "/shop/viva-pinata/fizzleblossom.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Fizzlepop",
                    "description" => "Éclatante et pétillante, cette adorable créature au pelage doré et aux accents orangés déborde d’énergie et de malice, prête à illuminer chaque instant de bonheur.",
                    "image" => "/shop/viva-pinata/fizzlepop.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Fizzlepuff Lionetta",
                    "description" => "Cette lionne pétillante à la crinière colorée répand joie et douceur, prête à accompagner chaque aventure avec malice et tendresse.",
                    "image" => "/shop/viva-pinata/fizzlepuff_lionetta.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 40
                    ]
                ],
                [
                    "nom" => "Fleurina",
                    "description" => "Avec sa fourrure multicolore et son esprit vif, elle répand une énergie joyeuse et une touche de magie dans chaque moment passé à ses côtés.",
                    "image" => "/shop/viva-pinata/fleurina.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 20
                    ]
                ],
                [
                    "nom" => "PetalPuff",
                    "description" => "Cette créature à la fourrure rose et aux touches florales est un rayon de soleil, apportant beauté et joie à chaque instant avec son sourire éclatant et son regard pétillant.",
                    "image" => "/shop/viva-pinata/petalpuff.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 40
                    ]
                ],
                [
                    "nom" => "Pinkyfox Pippa",
                    "description" => "Cette renarde aux poils doux et au toupet rose incarne la joie et la malice, prêt à répandre des sourires avec sa personnalité enjouée et son regard pétillant.",
                    "image" => "/shop/viva-pinata/pinkyfox_pippa.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 20
                    ]
                ],
                [
                    "nom" => "Rainbow Brightwhisker",
                    "description" => "Un éclat de couleurs vives et d’énergie, cette créature rayonnante se distingue par sa fourrure multicolore et son sourire contagieux, prête à égayer tous les cœurs.",
                    "image" => "/shop/viva-pinata/rainbow_brightwhisker.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 40
                    ]
                ],
                [
                    "nom" => "Rainbow Spark",
                    "description" => "Un compagnon tout en douceur, au pelage blanc éclatant et aux touches de couleur vive, prêt à répandre bonheur et éclats de rire avec sa personnalité pétillante.",
                    "image" => "/shop/viva-pinata/rainbow_park.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Sunny Paws",
                    "description" => "Un adorable compagnon au pelage rose éclatant et aux accents jaunes, toujours prêt à apporter joie et énergie, avec des yeux pétillants et un sourire communicatif.",
                    "image" => "/shop/viva-pinata/sunny_paws.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Sweetberry Sunshine",
                    "description" => "Un compagnon doux et lumineux, avec un pelage crémeux et des accents orange vif, des antennes en forme de cœur et des joues roses, toujours prêt à apporter une dose de douceur et de joie.",
                    "image" => "/shop/viva-pinata/sweetberry_sunshine.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "Twinkle Bloom",
                    "description" => "Un compagnon au pelage bleu clair et aux accents joyeux, toujours prêt à illuminer vos journées avec son esprit pétillant et sa douceur réconfortante.",
                    "image" => "/shop/viva-pinata/twinkle_bloom.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 30
                    ]
                ],
                [
                    "nom" => "ZappyDew",
                    "description" => "Un compagnon vif et coloré, avec un pelage jaune éclatant et des accents verts joyeux, apportant énergie et bonheur partout où il va.",
                    "image" => "/shop/viva-pinata/zappydew.png",
                    "prix" => [
                        "label" => "le",
                        "valeur" => 20
                    ]
                ],
                [
                    "nom" => "Ziggy Zest",
                    "description" => "Un piñata plein de couleurs vives avec un motif en zigzag éclatant, alliant rose, jaune et bleu. Ses touffes roses et son regard expressif ajoutent une touche irrésistible de charme et de joie.",
                    "image" => "/shop/viva-pinata/ziggy_zest.png",
                    "prix" => [
                        "label" => "la",
                        "valeur" => 40
                    ]
                ]
            ]), 0, $limit) as $produit
        ) : ?>
            <div class="group max-w-60 shadow-sm rounded-lg hover:shadow-lg transition-all ease-in-out duration-200">
                <a href="/viva-pinata#<?= $produit["nom"] ?>">
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