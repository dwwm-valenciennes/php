<?php
    require __DIR__.'/../config/functions.php';
    // Le chemin est relatif à index.php
    // require 'config/config.php';
    // On peut utiliser le chemin absolu pour que ce soit plus parlant
    // __DIR__ renvoie C:\wamp64\www\php\08-includes\partials
    require __DIR__.'/../config/config.php';
    // On va inclure la connexion à la BDD
    require_once __DIR__.'/../config/database.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/scss/index.css">

    <?php
    // On vérifie si le développeur a ajouté un fichier CSS
    // pour la page
    if (isset($stylesheet)) { ?>
        <link rel="stylesheet" href="<?= $stylesheet; ?>">
    <?php } ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">Mon super site</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item <?= $page === 'index.php' ? 'active' : ''; ?>">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item <?= $page === 'contact.php' ? 'active' : ''; ?>">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item <?= $page === 'films.php' ? 'active' : ''; ?>">
                            <a class="nav-link" href="films.php">Films</a>
                        </li>
                        <li class="nav-item <?= $page === 'acteurs.php' ? 'active' : ''; ?>">
                            <a class="nav-link" href="acteurs.php">Acteurs</a>
                        </li>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                Nos catégories
                            </a>

                            <?php
                                // On récupère les catégories de la base pour les afficher dans le dropdown
                                global $db;
                                $categories = $db->query('SELECT * FROM category')->fetchAll();
                            ?>

                            <ul class="dropdown-menu">
                                <?php foreach ($categories as $category) { ?>
                                    <li><a class="dropdown-item" href="./categorie.php?id=<?= $category['id']; ?>">
                                        <?= $category['name']; ?>
                                    </a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div> <!-- Fin du container -->
        </nav>
    </header>
