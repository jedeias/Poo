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

            require_once "caneta_visb.php";

            $caneta1 = new Caneta();
            
            $caneta1->modelo = "BIC Cristal"; // + atributo publico

            $caneta1->cor = "blue"; // + atributo publico
            
            //$caneta1->ponta = 0.5; // - atributo privado
            
            //$caneta1->carga = 80; // - atributo privado

            //$caneta1->tampada = false; // - atributo privado

            //$caneta1->escrever(); // + metodo publico

            //$caneta1->rabiscar(); // - metodo privado
            
            $caneta1->destampar(); // Este método público altera uma característica de um atributo protegido

            print_r($caneta1);

            $caneta1->escrever();

            $caneta1->tampar(); // Este método público altera uma característica de um atributo protegido


        ?>

    </pre>

</body>
</html>