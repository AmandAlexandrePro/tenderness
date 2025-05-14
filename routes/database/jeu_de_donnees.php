<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "initial.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "produit_db.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "categorie_db.php";

$connexion = creerConnexion();

foreach ([
    [
        "intituler_categorie" => "Réaliste"
    ],
    [
        "intituler_categorie" => "Viva Piñata"
    ]
] as $categorie) {
    setCategorie($connexion, $categorie["intituler_categorie"]);
}

foreach ([
    [
        "image_produit" => "/shop/realist/alpaga.png",
        "intituler_produit" => "Alpaga",
        "description_produit" => "Originaire des Andes, cet animal calme et sociable est apprécié pour sa laine douce et sa nature bienveillante.",
        "genre_produit" => "le",
        "prix_produit" => 20,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/axolotl.png",
        "intituler_produit" => "Axolotl",
        "description_produit" => "Originaire des lacs mexicains, cet amphibien aquatique garde sa forme juvénile toute sa vie, avec ses branchies externes caractéristiques et son sourire apaisant.",
        "genre_produit" => "le",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/castor.png",
        "intituler_produit" => "Castor",
        "description_produit" => "Ce rongeur ingénieux, célèbre pour ses barrages, vit près des rivières et est reconnu pour son travail acharné et sa queue plate distinctive.",
        "genre_produit" => "le",
        "prix_produit" => 40,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/chat.png",
        "intituler_produit" => "Chat",
        "description_produit" => "Indépendant et affectueux, ce compagnon à quatre pattes est apprécié pour sa curiosité, sa souplesse et ses ronronnements apaisants.",
        "genre_produit" => "le",
        "prix_produit" => 20,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/chevreuil.png",
        "intituler_produit" => "Chevreuil",
        "description_produit" => "Discret et agile, ce petit cervidé vit dans les forêts et les bois, se distinguant par sa grâce et ses sauts élégants.",
        "genre_produit" => "le",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/cygne.png",
        "intituler_produit" => "Cygne",
        "description_produit" => "Symbole de beauté et de grâce, ce grand oiseau au plumage blanc évolue majestueusement sur les lacs et les étangs.",
        "genre_produit" => "le",
        "prix_produit" => 40,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/dauphin.png",
        "intituler_produit" => "Dauphin",
        "description_produit" => "Intelligent et sociable, ce mammifère marin nage avec aisance dans les océans, captivant par sa curiosité et ses acrobaties.",
        "genre_produit" => "le",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/ecureuil.png",
        "intituler_produit" => "Écureuil",
        "description_produit" => "Agile et énergique, cet adorable rongeur grimpe avec aisance aux arbres, collectant des noisettes pour l'hiver.",
        "genre_produit" => "le",
        "prix_produit" => 20,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/hamster.png",
        "intituler_produit" => "Hamster",
        "description_produit" => "Petit et curieux, ce rongeur aime stocker des provisions dans ses joues et explore avec enthousiasme son espace.",
        "genre_produit" => "le",
        "prix_produit" => 10,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/leopard_des_neiges.png",
        "intituler_produit" => "Léopard des Neiges",
        "description_produit" => "Habillant les montagnes enneigées de son pelage tacheté, ce félin discret est réputé pour sa furtivité et sa grande agilité.",
        "genre_produit" => "le",
        "prix_produit" => 40,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/loutre.png",
        "intituler_produit" => "Loutre",
        "description_produit" => "Vivant près des rivières, cet animal aquatique espiègle est connu pour ses jeux sous l'eau et son pelage épais et imperméable.",
        "genre_produit" => "la",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/manchot.png",
        "intituler_produit" => "Manchot",
        "description_produit" => "Adapté aux eaux glacées, cet animal se distingue par sa démarche maladroite et ses plongeons agiles pour pêcher.",
        "genre_produit" => "le",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/panda_roux.png",
        "intituler_produit" => "Panda Roux",
        "description_produit" => "Ce petit mammifère au pelage rouge-orangé, agile et joueur, évolue avec grâce dans les forêts montagneuses de Chine.",
        "genre_produit" => "le",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/panda.png",
        "intituler_produit" => "Panda",
        "description_produit" => "Ce géant paisible, au pelage noir et blanc, se nourrit principalement de bambou et vit dans les forêts montagneuses de Chine.",
        "genre_produit" => "le",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/poisson_clown.png",
        "intituler_produit" => "Poisson Clown",
        "description_produit" => "Vibrant et coloré, ce poisson marin forme une relation symbiotique avec les anémones, où il trouve protection et nourriture.",
        "genre_produit" => "le",
        "prix_produit" => 10,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/putois.png",
        "intituler_produit" => "Putois",
        "description_produit" => "Ce petit carnivore au pelage rayé est connu pour son caractère timide et son puissant jet de défense lorsqu'il se sent menacé.",
        "genre_produit" => "le",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/renard.png",
        "intituler_produit" => "Renard",
        "description_produit" => "Habile et rusé, ce mammifère au pelage flamboyant est un maître de l'adaptation, vivant aussi bien dans les forêts que les milieux urbains.",
        "genre_produit" => "le",
        "prix_produit" => 40,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/realist/tigre.png",
        "intituler_produit" => "Tigre",
        "description_produit" => "Imposant et majestueux, ce grand félin au pelage rayé est un prédateur agile, symbole de puissance et de mystère dans les jungles d'Asie.",
        "genre_produit" => "le",
        "prix_produit" => 40,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 1
    ],
    [
        "image_produit" => "/shop/viva-pinata/blossom_bunbun.png",
        "intituler_produit" => "Blossom Bunbun",
        "description_produit" => "Cette adorable créature au pelage rose et aux oreilles fleuries déborde d’énergie et répand bonheur et éclats de rire partout où elle passe.",
        "genre_produit" => "la",
        "prix_produit" => 20,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/blossombelle.png",
        "intituler_produit" => "BlossomBelle",
        "description_produit" => "Cette renarde au pelage pêche et à la couronne fleurie rayonne de joie, apportant une touche de magie et de douceur à chaque aventure.",
        "genre_produit" => "la",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/blossomfox_breezy.png",
        "intituler_produit" => "Blossomfox Breezy",
        "description_produit" => "Ce renard pétillant à la crinière colorée déborde d’énergie et de malice, apportant joie et réconfort à chaque instant.",
        "genre_produit" => "la",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/dottie_bloomflower.png",
        "intituler_produit" => "Dottie Bloomflower",
        "description_produit" => "Cette créature espiègle au pelage tacheté adore danser parmi les fleurs, répandant joie et bonne humeur autour d’elle.",
        "genre_produit" => "la",
        "prix_produit" => 20,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/dottybun_bunbun.png",
        "intituler_produit" => "Dottybun Bunbun",
        "description_produit" => "Ce lapin enjoué au pelage tacheté déborde d’énergie et de malice, apportant douceur et bonne humeur à chaque instant.",
        "genre_produit" => "le",
        "prix_produit" => 20,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/fizzleblossom.png",
        "intituler_produit" => "Fizzleblossom",
        "description_produit" => "Cette adorable créature au pelage duveteux et à la crinière fleurie rayonne de joie, apportant éclat et fantaisie partout où elle passe.",
        "genre_produit" => "la",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/fizzlepop.png",
        "intituler_produit" => "Fizzlepop",
        "description_produit" => "Éclatante et pétillante, cette adorable créature au pelage doré et aux accents orangés déborde d’énergie et de malice, prête à illuminer chaque instant de bonheur.",
        "genre_produit" => "le",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/fizzlepuff_lionetta.png",
        "intituler_produit" => "Fizzlepuff Lionetta",
        "description_produit" => "Cette lionne pétillante à la crinière colorée répand joie et douceur, prête à accompagner chaque aventure avec malice et tendresse.",
        "genre_produit" => "la",
        "prix_produit" => 40,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/fleurina.png",
        "intituler_produit" => "Fleurina",
        "description_produit" => "Avec sa fourrure multicolore et son esprit vif, elle répand une énergie joyeuse et une touche de magie dans chaque moment passé à ses côtés.",
        "genre_produit" => "la",
        "prix_produit" => 20,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/petalpuff.png",
        "intituler_produit" => "PetalPuff",
        "description_produit" => "Cette créature à la fourrure rose et aux touches florales est un rayon de soleil, apportant beauté et joie à chaque instant avec son sourire éclatant et son regard pétillant.",
        "genre_produit" => "la",
        "prix_produit" => 40,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/pinkyfox_pippa.png",
        "intituler_produit" => "Pinkyfox Pippa",
        "description_produit" => "Cette renarde aux poils doux et au toupet rose incarne la joie et la malice, prêt à répandre des sourires avec sa personnalité enjouée et son regard pétillant.",
        "genre_produit" => "la",
        "prix_produit" => 20,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/rainbow_brightwhisker.png",
        "intituler_produit" => "Rainbow Brightwhisker",
        "description_produit" => "Un éclat de couleurs vives et d’énergie, cette créature rayonnante se distingue par sa fourrure multicolore et son sourire contagieux, prête à égayer tous les cœurs.",
        "genre_produit" => "le",
        "prix_produit" => 40,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/rainbow_park.png",
        "intituler_produit" => "Rainbow Spark",
        "description_produit" => "Un compagnon tout en douceur, au pelage blanc éclatant et aux touches de couleur vive, prêt à répandre bonheur et éclats de rire avec sa personnalité pétillante.",
        "genre_produit" => "le",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/sunny_paws.png",
        "intituler_produit" => "Sunny Paws",
        "description_produit" => "Un adorable compagnon au pelage rose éclatant et aux accents jaunes, toujours prêt à apporter joie et énergie, avec des yeux pétillants et un sourire communicatif.",
        "genre_produit" => "la",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/sweetberry_sunshine.png",
        "intituler_produit" => "Sweetberry Sunshine",
        "description_produit" => "Un compagnon doux et lumineux, avec un pelage crémeux et des accents orange vif, des antennes en forme de cœur et des joues roses, toujours prêt à apporter une dose de douceur et de joie.",
        "genre_produit" => "le",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/twinkle_bloom.png",
        "intituler_produit" => "Twinkle Bloom",
        "description_produit" => "Un compagnon au pelage bleu clair et aux accents joyeux, toujours prêt à illuminer vos journées avec son esprit pétillant et sa douceur réconfortante.",
        "genre_produit" => "la",
        "prix_produit" => 30,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/zappydew.png",
        "intituler_produit" => "ZappyDew",
        "description_produit" => "Un compagnon vif et coloré, avec un pelage jaune éclatant et des accents verts joyeux, apportant énergie et bonheur partout où il va.",
        "genre_produit" => "le",
        "prix_produit" => 20,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ],
    [
        "image_produit" => "/shop/viva-pinata/ziggy_zest.png",
        "intituler_produit" => "Ziggy Zest",
        "description_produit" => "Un piñata plein de couleurs vives avec un motif en zigzag éclatant, alliant rose, jaune et bleu. Ses touffes roses et son regard expressif ajoutent une touche irrésistible de charme et de joie.",
        "genre_produit" => "la",
        "prix_produit" => 40,
        "quantiter_stock_produit" => 500,
        "code_categorie" => 2
    ]
] as $categorie) {
    setProduct($connexion, $categorie["image_produit"], $categorie["intituler_produit"], $categorie["description_produit"], $categorie["genre_produit"], $categorie["prix_produit"], $categorie["quantiter_stock_produit"], $categorie["code_categorie"]);
}