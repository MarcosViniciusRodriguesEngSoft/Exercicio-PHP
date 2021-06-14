<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variável</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $nome = "marcos";
        $idade = 26;

        echo $nome . " tem " . $idade . " anos! <br>";

        $nome = "Gustavo";
        $idade = 36;
        echo "$nome tem $idade anos!";
        ?>
    </div>
</body>

</html>