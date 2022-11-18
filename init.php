<?php

try {
    $bdd = new PDO("mysql:host=localhost;dbname=meubles", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]);
} catch (\Exception $e) {
    die("ERREUR CONNEXION BDD : " . $e->getMessage());
}

// CREATION DE LA FONCTION DEBUG

function debug($value)
{
    echo "<pre>";
        print_r($value);
    echo "</pre>";
}

// INITIALISATION DES VARIABLES "GLOBALES"
$errorMessage = "";
$successMessage = "";
