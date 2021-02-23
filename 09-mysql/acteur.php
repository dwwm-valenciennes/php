<?php

// On va d'abord récupèrer l'id dans l'URL
$id = $_GET['id'] ?? 0;

$title = 'Acteur '.$id;
require __DIR__.'/partials/header.php';

// On va récupèrer l'acteur dont l'ID est dans l'URL
global $db;
// On prépare la requête pour éviter des problèmes de sécurité (Injection SQL)
$query = $db->prepare('SELECT * FROM actor WHERE id = :id');
$query->bindValue(':id', $id);
$query->execute(); // Nécessaire si on prépare la requête
$actor = $query->fetch(); // On a une seule ligne de résultat

// On vérifie ici si l'acteur existe dans la base
// Sinon on renvoie une 404
if (!$actor) {
    require 'partials/404.php';
}
?>

<div class="container">
    <h1>L'acteur <?= $actor['firstname'].' '.$actor['name']; ?></h1>
    <!-- La date est au format 1950-11-18 dans la BDD -->
    <!-- Né le 18 novembre 1950 -->
    <p>Né le <?= date('d F Y', strtotime($actor['birthday'])); ?></p>
    <p>Pour formater la date en français</p>
    <?php setlocale(LC_ALL, 'fr.utf-8'); ?>
    <p><?= strftime('%d %B %Y', strtotime($actor['birthday'])); ?></p>
</div>

<?php require 'partials/footer.php'; ?>
