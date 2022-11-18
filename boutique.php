<?php

// Appel de la connexion à la BDD
require_once "init.php";

// Ecriture de ma requête 
$requete = $bdd->prepare("SELECT * FROM produit");

// Execution de la requête 
$requete->execute();

// Récupération des données à l'intérieur de l'objet
$produits = $requete->fetchAll(PDO::FETCH_ASSOC);

// debug($produits);


?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <h1 class="text-center mt-4">Boutique</h1>

    <!-- div.container>div.d-flex.flex-wrap.justify-content-evenly -->
    <div class="container">
        <div class="d-flex flex-wrap justify-content-evenly">

            <!-- Affichage des nos produits -->
            <?php foreach ($produits as $produit) { ?>
                <div class="card my-3" style="width: 16rem;">
                    <img class="card-img-top" src="./photos/<?php echo $produit['photo'] ?>" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produit['titre'] ?></h5>
                        <p class="card-text"><?php echo $produit['description'] ?></p>
                        <span class="fs-5 badge bg-success rounded-pill">€</span>
                    </div>
                </div>

            <?php } ?>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>