<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Unário</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;

        echo "A média entre $nota1 e $nota2 é $m <br>";

        $sit = ($m < 6) ? "REPROVADO" : "APROVADO";

        echo "A situação do aluno é $sit<br>";

        echo "A situação do aluno é " . (($m < 6) ? "REPROVADO" : "APROVADO");
        ?>
    </div>
</body>

</html>