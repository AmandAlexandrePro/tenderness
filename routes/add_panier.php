<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "database" . DIRECTORY_SEPARATOR . "initial.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "database" . DIRECTORY_SEPARATOR . "produit_db.php";

$location = "/";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    print_r($_SERVER["REQUEST_URI"]);
    $location = "javascript://history.go(-1)";
    if (isset($_GET["produit"]) == true) {
        $id = intval($_GET["produit"]);
        if ((is_int($id) == true ? (empty($id) != true ? $id > 0 : false) == true : false) == true) {
            $connexion = creerConnexion();
            $produit = getProductByID($connexion, $id);
            if ((isset($produit) == true ? (is_array($produit) == true ? empty($produit) != true : false) == true : false) == true) {
                if (isset($_GET["quantiter"]) == true) {
                    $quantiter = intval($_GET["quantiter"]);
                    if ((is_int($quantiter) == true ? $quantiter < 0 || $quantiter > 0 : false) != true) $quantiter = 1;
                } else $quantiter = 1;
                if ((isset($_SESSION["panier"]) == true ? is_array($_SESSION["panier"]) == true : false) == true) {
                    if (empty($_SESSION["panier"]) == true) $_SESSION["panier"] = [];
                    else {
                        $existPanierProduit = (isset($_SESSION["panier"][$id]) == true);
                        if (($existPanierProduit == true ? (is_integer($_SESSION["panier"][$id]) == true ? $_SESSION["panier"][$id] > 0 : false) == true : false) == true) $quantiter += $_SESSION["panier"][$id];
                    }
                    if ($quantiter <= $produit["quantiter_stock_produit"]) {
                        if ($existPanierProduit == true) $qtt = ($quantiter - $_SESSION["panier"][$id]);
                        else $qtt = $quantiter;
                        $_SESSION["panier"][$id] = $quantiter;
                        if (updateQuantiterProduit($connexion, $id, ($produit["quantiter_stock_produit"] - $qtt)) == true) $location = "/panier";
                    }
                }
            }
        }
    }
}