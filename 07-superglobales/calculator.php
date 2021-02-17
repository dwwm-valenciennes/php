<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <?php
            $number1 = $_GET['number1'] ?? '';
            $number2 = $_GET['number2'] ?? '';
        ?>

        <form method="get" action="">
            <label for="number1">Nombre 1</label>
            <input type="text" name="number1" id="number1" class="form-control" value="<?= $number1; ?>">
            <label for="number2">Nombre 2</label>
            <input type="text" name="number2" id="number2" class="form-control" value="<?= $number2; ?>">

            <button class="btn btn-primary">Calculer</button>
        </form>

        <?php
            if (!empty($_GET)) { // On vérifie que le formulaire est soumis
                // Ici, on fait le calcul
                $result = $number1 + $number2;
                echo "Le résultat de $number1 + $number2 = $result";
            }
        ?>
    </div>

</body>
</html>
