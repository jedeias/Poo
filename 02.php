<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caneta</title>
</head>
<body>
    
    <?php

        require_once "caneta.php";

        $caneta1 = new Caneta();

        $caneta1->cor = "blue";
        
        $caneta1->ponta = 0.5;
        
        $caneta1->destampar();

        $caneta1->rabiscar();

        print_r($caneta1);

        echo"<br><br>";

        $caneta2 = new Caneta();

        $caneta2->cor = "red";
        
        $caneta2->carga = 50;

        $caneta2->destampar();

        $caneta2->rabiscar();
        
        print_r($caneta2);

    ?>

</body>
</html>