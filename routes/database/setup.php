<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "initial.php";

$connexion = creerConnexion();

echo "\n\n";

foreach ([
    [
        "nom_table" => "produit",
        "champs" => [
            [
                "nom" => "id_produit",
                "type" => "INT",
                "taille_valeurs" => "",
                "index" => "PRIMARY KEY",
                "null" => false,
                "auto_increment" => true
            ],
            [
                "nom" => "image_produit",
                "type" => "VARCHAR",
                "taille_valeurs" => "255",
                "index" => "",
                "null" => false,
                "auto_increment" => false
            ],
            [
                "nom" => "intituler_produit",
                "type" => "VARCHAR",
                "taille_valeurs" => "50",
                "index" => "",
                "null" => false,
                "auto_increment" => false
            ],
            [
                "nom" => "description_produit",
                "type" => "VARCHAR",
                "taille_valeurs" => "255",
                "index" => "",
                "null" => false,
                "auto_increment" => false
            ],
            [
                "nom" => "genre_produit",
                "type" => "VARCHAR",
                "taille_valeurs" => "10",
                "index" => "",
                "null" => false,
                "auto_increment" => false
            ],
            [
                "nom" => "prix_produit",
                "type" => "DECIMAL",
                "taille_valeurs" => "10,0",
                "index" => "",
                "null" => false,
                "auto_increment" => false
            ],
            [
                "nom" => "quantiter_stock_produit",
                "type" => "INT",
                "taille_valeurs" => "",
                "index" => "",
                "null" => false,
                "auto_increment" => false
            ],
            [
                "nom" => "code_categorie",
                "type" => "INT",
                "taille_valeurs" => "",
                "index" => "",
                "null" => false,
                "auto_increment" => false
            ]
        ]
    ],
    [
        "nom_table" => "categorie",
        "champs" => [
            [
                "nom" => "code_categorie",
                "type" => "INT",
                "taille_valeurs" => "",
                "index" => "PRIMARY KEY",
                "null" => false,
                "auto_increment" => true
            ],
            [
                "nom" => "intituler_categorie",
                "type" => "VARCHAR",
                "taille_valeurs" => "50",
                "index" => "",
                "null" => false,
                "auto_increment" => false
            ]
        ]
    ]
] as $table) {
    // Pratique dangereuse (TEST) !!!
    $requete = "CREATE TABLE {$table['nom_table']} (";
    $indexs = [];
    foreach ($table["champs"] as $idx => $champ) {
        $requete = $requete . "{$champ["nom"]} {$champ["type"]}" . (empty($champ["taille_valeurs"]) != true ? "({$champ["taille_valeurs"]})" : "") . ($champ["null"] != true ? " NOT" : "") . " NULL" . ($champ["auto_increment"] == true ? " AUTO_INCREMENT " : "") . ($idx >= (count($table["champs"]) - 1) ? "" : ", ");
        if (empty($champ["index"]) != true) {
            if (isset($indexs[$champ["index"]]) != true) $indexs[$champ["index"]] = [];
            array_push($indexs[$champ["index"]], $champ["nom"]);
        }
    }
    foreach ($indexs as $index => $champs) {
        $requete = $requete . " , $index (";
        foreach ($champs as $idx => $champ) {
            $requete = $requete . "$champ" . ($idx >= (count($champs) - 1) ? "" : ", ");
        }
        $requete = $requete . ")";
    }
    $requete = $requete . ") ENGINE = InnoDB;";
    $requetePDO = $connexion->prepare($requete);
    echo $requete . "\n\n";
    $requetePDO->execute();
}

foreach ([
    [
        "nom_table" => "produit",
        "nom_constraint" => "FK_categorie",
        "keys" => [
            "code_categorie"
        ],
        "references" => [
            "nom_table" => "categorie",
            "keys" => [
                "code_categorie"
            ]
        ],
        "on_delete" => "RESTRICT",
        "on_update" => "RESTRICT"
    ]
] as $foreign_key) {
    // Pratique dangereuse (TEST) !!!
    $requete = "ALTER TABLE {$foreign_key["nom_table"]} ADD CONSTRAINT {$foreign_key["nom_constraint"]} FOREIGN KEY (";
    foreach ($foreign_key["keys"] as $idx => $key) {
        $requete = $requete . "$key" . ($idx >= (count($foreign_key["keys"]) - 1) ? "" : ", ");
    }
    $requete = $requete . ") REFERENCES {$foreign_key["references"]["nom_table"]} (";
    foreach ($foreign_key["references"]["keys"] as $idx => $key) {
        $requete = $requete . "$key" . ($idx >= (count($foreign_key["references"]["keys"]) - 1) ? "" : ", ");
    }
    $requete = $requete . ") ON DELETE {$foreign_key["on_delete"]} ON UPDATE {$foreign_key["on_update"]};";
    $requetePDO = $connexion->prepare($requete);
    echo $requete . "\n\n";
    $requetePDO->execute();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . "jeu_de_donnees.php";