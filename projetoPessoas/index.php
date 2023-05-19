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
        
            require_once ("alunos.php");
            require_once ("pessoas.php");
            require_once ("professores.php");
            require_once ("funcionarios.php");

            $pessoa[0] = new Pessoas();
            $pessoa[1] = new Aluno();
            $pessoa[2] = new Professores();
            $pessoa[3] = new Funcionarios();

            $pessoa[0]->setNome("Jorge");
            $pessoa[1]->setNome("Anderson");
            $pessoa[2]->setNome("Kawan");
            $pessoa[3]->setNome("Allan");

            print_r($pessoa[0]);
            echo "<br>";
            print_r($pessoa[1]);
            echo "<br>";
            print_r($pessoa[2]);
            echo "<br>";
            print_r($pessoa[3]);

        ?>

    </pre>
</body>
</html>