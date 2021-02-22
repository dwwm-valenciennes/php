<?php
// On va inclure le header (le doctype et le menu) sur chaque page
// $title = 'Mon super site';
require 'partials/header.php'; ?>

<!-- Ici, entre les 2 require, on peut intégrer notre page HTML -->
<div class="container">
    <h1>Ma page d'accueil</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate assumenda consequatur perspiciatis tenetur? Excepturi quisquam, enim delectus, incidunt aliquid quis eaque perspiciatis eius temporibus quasi nulla officia aperiam fugit rem!</p>

    <?php
        // On va essayer de récupèrer les catégories de la base de données
        global $db; // Je fais ça pour activer l'autocomplétion
        // Je fais une requête SQL pour récupèrer mes catégories
        $query = $db->query('SELECT * FROM category');
        // Je récupère les résultats de la requête sous forme de tableau
        $categories = $query->fetchAll();
        // Autre solution pour écrire la requête
        $categories = $db->query('SELECT * FROM category')->fetchAll();
        // var_dump($categories);
        // A vous de jouer : Afficher proprement les catégories en parcourant
        // le tableau. On va essayer d'avoir un affichage en "colonne", c'est-à-dire
        // afficher deux catégories par ligne. Soit vous utilisez les colonnes de
        // Bootstrap (ou un flex).

        // 1: Films de gangsters          2: Action
        // 3: Horreur                     4: Science-fiction
        // 5: Thriller
        ?>

        <div class="row">
            <?php foreach ($categories as $category) { ?>
                <div class="col-6">
                    <?= $category['id']; ?> : <?= $category['name']; ?>
                </div>
            <?php } ?>
        </div>
</div>

<?php require 'partials/footer.php'; ?>
