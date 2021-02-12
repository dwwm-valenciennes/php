<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux</title>
</head>
<body>

    <?php
        // Les tableaux en PHP

        // Un tableau simple contient des chaines
        $contacts = ['Toto titi', 'Tata titi'];

        // <?= équivaut à <?php echo
        // <?php $contact;

        // Pour stocker des données plus "complexes", on peut utiliser un
        // tableau multidimensionnel. C'est un tableau qui contient des tableaux.
        // Un tableau peut contenir N dimensions.
        // Ici, on en a 3: Les contacts, Le contact, Les adresses.
        $contactMultis = [
            ['nom' => 'Titi', 'prenom' => 'Toto', 'adresses' => ['A', 'B']],
        ];
    ?>

    <?php foreach ($contactMultis as $contact) { ?>

        <div>
            <h1 class="blue"><?= $contact['prenom']; ?></h1>
            <ul>
                <?php foreach ($contact['adresses'] as $adresse) { ?>
                    <li><?= $adresse; ?></li>
                <?php } ?>
            </ul>
        </div>

    <?php } ?>
    
    <div>
        <h1>Toto Titi</h1>
        <ul>
            <li>18, rue de la Paix, Paris</li>
            <li>17, avenue du Palais, Cambrai</li>
        </ul>
    </div>

    <div>
        <h1>Tata Titi</h1>
        <ul>
            <li>18, rue de la Paix, Paris</li>
        </ul>
    </div>

</body>
</html>
