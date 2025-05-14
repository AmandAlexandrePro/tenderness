<?php

// CRUD avec la table categorie

// Fonction permettant de récupérer tous les produits
function getAllCategories (PDO $connexion) : mixed {
    $requete = "SELECT * FROM categorie";
    $requetePDO = $connexion->prepare($requete);
    $requetePDO->execute();
    $resultatsRecherche = $requetePDO->fetchAll(PDO::FETCH_ASSOC);
    return $resultatsRecherche;
}

// Fonction permettant de récupérer une catégorie avec un code catégorie
function getCategoryByID (PDO $connexion, int $code) : mixed {
    $requete = "SELECT intituler_categorie FROM categorie WHERE code_categorie = :code";
    $requetePDO = $connexion->prepare($requete);
    $requetePDO->execute([
        "code" => $code
    ]);
    $resultatsRecherche = $requetePDO->fetchColumn();
    return $resultatsRecherche;
}

// Fonction permettant de créer un nouveau produit
function setCategorie (PDO $connexion, string $intituler) : mixed {
    $requete = "INSERT INTO categorie(intituler_categorie) VALUES (:intituler)";
    $requetePDO = $connexion->prepare($requete);
    return $requetePDO->execute([
        "intituler" => $intituler
    ]);
}