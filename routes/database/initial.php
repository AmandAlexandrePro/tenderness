<?php
const HOST = "localhost";
const PORT = 3306;
const DB_NAME = "db_tenderness";
const USER = "root";
const PASSWORD = "";

// Fonction permettant de créer et retourner une connexion à la BD
function creerConnexion () : PDO
{
    try
    {
        $connexion = new PDO("mysql:host=" . HOST . ":" . PORT . ";dbname=" . DB_NAME, USER, PASSWORD);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion; // $connexion est une variable de type PDO
    }
    catch (PDOException $error)
    {
        die("Erreur de connexion : " . $error->getMessage());
    }
}