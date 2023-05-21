<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <pre>

        <?php 
        
            require_once ("animal.php");
            require_once ("mamifero.php");
            require_once ("lobo.php");
            require_once ("cachorro.php");

            $mamifero["mamifero"] = new Mamifero();
            $mamifero["mamifero"]->emitirSon();

            echo"<br><br>";

            $mamifero["lobo"] = new Lobo();
            $mamifero["lobo"]->emitirSon();

            echo"<br><br>";

            $mamifero["cachorro"] = new Cachorro();
            $mamifero["cachorro"]->emitirSon();

        ?>

    </pre>
</body>
</html>