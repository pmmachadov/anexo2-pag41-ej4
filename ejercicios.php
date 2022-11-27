<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anexo2-pag41-ej4</title>
</head>

<body>
    <?php require_once './funlib.php'; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
        "funlib.php" ?>">
        <fieldset>
            <label for="numero">Introduce un numero del 1 al 10</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Mostrar">
        </fieldset>
</body>
</html>