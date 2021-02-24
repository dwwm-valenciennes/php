<?php require 'partials/header.php'; ?>

<h1>Ajouter une catégorie</h1>

<form method="POST">
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>

    <button class="btn btn-primary">Ajouter</button>
</form>

<?php require 'partials/footer.php'; ?>
