<?php

// CRUD avec la table produit

// Fonction permettant de récupérer tous les produits
function getAllProductsByCategorie (PDO $connexion, int $code) : mixed {
    $requete = "SELECT * FROM produit WHERE code_categorie = :code";
    $requetePDO = $connexion->prepare($requete);
    $requetePDO->execute([
        "code" => $code
    ]);
    $resultatsRecherche = $requetePDO->fetchAll(PDO::FETCH_ASSOC);
    return $resultatsRecherche;
}

// Fonction permettant de récupérer un produit grâce à son ID
function getProductByID (PDO $connexion, int $id) : mixed {
    $requete = "SELECT * FROM produit WHERE id_produit = :id";
    $requetePDO = $connexion->prepare($requete);
    $requetePDO->execute([
        "id" => $id
    ]);
    $resultatsRecherche = $requetePDO->fetch(PDO::FETCH_ASSOC);
    return $resultatsRecherche;
}

// Fonction permettant de mettre à jour la quantiter de stock d'un produit grâce à son ID
function updateQuantiterProduit (PDO $connexion, int $id, int $quantiter) : mixed {
    $requete = "UPDATE produit SET quantiter_stock_produit = :quantiter WHERE id_produit = :id";
    $requetePDO = $connexion->prepare($requete);
    return $requetePDO->execute([
        "id" => $id,
        "quantiter" => $quantiter
    ]);
}

// Fonction permettant de créer un nouveau produit
function setProduct (PDO $connexion, string $image, string $intituler, string $description, string $genre, float $prix, int $quantiter_stock, int $code_categorie) : mixed {
    $requete = "INSERT INTO produit(image_produit,intituler_produit, description_produit, genre_produit, prix_produit,quantiter_stock_produit,code_categorie) VALUES (:image,:intituler,:description,:genre,:prix,:quantiter_stock,:code_categorie)";
    $requetePDO = $connexion->prepare($requete);
    return $requetePDO->execute([
        "image" => $image,
        "intituler" => $intituler,
        "description" => $description,
        "genre" => $genre,
        "prix" => $prix,
        "quantiter_stock" => $quantiter_stock,
        "code_categorie" => $code_categorie
    ]);
}