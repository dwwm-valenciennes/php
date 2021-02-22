<?php require 'partials/header.php';

// Requête SQL pour les films
global $db;
$movies = $db->query('SELECT * FROM movie')->fetchAll();
?>

<div class="container">
    <h1>Les films</h1>

    <div class="row">
        <?php foreach ($movies as $movie) { ?>
            <div class="col-3">
                <div class="card mb-4">
                    <img class="card-img-top" src="uploads/movies/<?= $movie['cover']; ?>" />
                    <div class="card-body">
                        <h2 class="card-title"><?= $movie['title']; ?></h2>
                        <p class="card-text">
                            Sorti en <?= substr($movie['released_at'], 0, 4); ?>
                        </p>
                        <p class="card-text">
                            <?= $movie['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require 'partials/footer.php'; ?>
