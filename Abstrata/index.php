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

            require_once ("pessoas.php");
            require_once ("visitantes.php");
            require_once ("alunos.php");
            require_once ("bolsista.php");
            require_once ("tecnicos.php");

            $visitante[0] = new Visitantes();
            $visitante[0]->setNome("Axton");
            $visitante[0]->setIdade(35);
            $visitante[0]->setSexo("M");

            $aluno[0] = new Alunos();
            $aluno[0]->setNome("andreson");
            $aluno[0]->setIdade(17);
            $aluno[0]->setSexo("M");
            $aluno[0]->setMatricula(123);
            $aluno[0]->setCurso("DEV SISTENS");
            //$aluno[0]->pagarMensalidade();

            $bolsista[0] = new Bolsista();
            $bolsista[0]->setNome("Jorge");
            $bolsista[0]->setIdade(16);
            $bolsista[0]->setSexo("M");
            $bolsista[0]->setMatricula(623);
            $bolsista[0]->setCurso("WEB DEVELOPER");
            $bolsista[0]->setBolsa("WEB DEVELOPER");
            //$bolsista[0]->pagarMensalidade();
            
            $tecnicos[0] = new Tecnicos();
            $tecnicos[0]->setNome("Robson");
            $tecnicos[0]->setIdade(25);
            $tecnicos[0]->setSexo("M");
            $tecnicos[0]->setRegistroProfissional(001);
            $tecnicos[0]->particar("DEV SISTENS");

            print_r($tecnicos[0]);

        ?>

    </pre>
</body>
</html>