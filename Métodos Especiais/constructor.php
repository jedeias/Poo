<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caneta visibilidade</title>
</head>
<body>

    <pre>

        <?php

            require_once "caneta_construtores.php";

            $caneta = new Caneta("BIC Cristal", "Blue", 0.5);

            print_r($caneta);
        ?>

    </pre>

</body>
</html>