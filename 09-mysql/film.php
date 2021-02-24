<?php

// On va d'abord récupèrer l'id dans l'URL
$id = $_GET['id'] ?? 0;

// On inclus la connexion à la base de données avant
// pour pouvoir afficher le titre du film dans la balise
// title (require_once pour être sûr de ne faire qu'une
// seule connexion)
require_once 'config/database.php';

global $db;
$query = $db->prepare('SELECT * FROM movie WHERE id = :id');
$query->bindValue(':id', $id);
$query->execute(); // Nécessaire si on prépare la requête
$movie = $query->fetch(); // On a une seule ligne de résultat

// J'affiche le titre du film dans la balise title du head
$title = $movie['title'];
require __DIR__.'/partials/header.php';

// Si le film n'existe pas
if (!$movie) {
    require 'partials/404.php';
}
?>

<div class="container my-4">
    <div class="row">
        <div class="col-lg-5">
            <img class="img-fluid" src="uploads/movies/<?= $movie['cover']; ?>" />
        </div>
        <div class="col-lg-7">
            <div class="card shadow">
                <div class="card-body">
                    <h1><?= $movie['title']; ?></h1>
                    <p>Durée: <?= convertToHours($movie['duration']); ?></p>
                    <p>Sorti le <?= formatDate($movie['released_at']); ?></p>

                    <div>
                        <?= $movie['description']; ?>
                    </div>

                    <div class="mt-5">
                        <?php // @todo Jointure entre les films et les acteurs ?>
                        <h5>Avec :</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Al Pacino</a></li>
                            <li><a href="#">Marlon Brando</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card-footer text-muted">
                    <?php
                    // Représente la note du film
                    $note = rand(0, 5);
                    for ($i = 0; $i < 5; $i++) {
                        if ($i < $note) {
                            echo '★';
                        } else {
                            echo '☆';
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'partials/footer.php'; ?>
