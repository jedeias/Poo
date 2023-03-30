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

            require_once "caneta_metodos.php";

            $caneta = new Caneta();

            $caneta->setModelo("BIC Cristal");

            $caneta->setPonta(0.5);

            echo("Eu tenho uma caneta {$caneta->getModelo()}, de ponta {$caneta->getPonta()}");

            
        ?>

    </pre>

</body>
</html>