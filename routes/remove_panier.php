<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "database" . DIRECTORY_SEPARATOR . "initial.php";
require_once __DIR__ . DIRECTORY_SEPARATOR . "database" . DIRECTORY_SEPARATOR . "produit_db.php";

$location = "/";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $location = "javascript://history.go(-1)";
    if (isset($_GET["produit"]) == true) {
        $id = intval($_GET["produit"]);
        if ((is_int($id) == true ? (empty($id) != true ? $id > 0 : false) == true : false) == true) {
            $connexion = creerConnexion();
            $produit = getProductByID($connexion, $id);
            if ((isset($produit) == true ? (is_array($produit) == true ? (empty($produit) != true ? (isset($_SESSION["panier"]) == true ? (is_array($_SESSION["panier"]) == true ? (empty($_SESSION["panier"]) != true ? (isset($_SESSION["panier"][$id]) == true ? (is_integer($_SESSION["panier"][$id]) == true ? $_SESSION["panier"][$id] > 0 : false) == true : false) == true : false) == true : false) == true : false) == true : false) : false) == true : false) == true) {
                if (updateQuantiterProduit($connexion, $id, ($produit["quantiter_stock_produit"] + $_SESSION["panier"][$id])) == true) $location = "/panier";
                unset($_SESSION["panier"][$id]);
            }
        }
    }
}