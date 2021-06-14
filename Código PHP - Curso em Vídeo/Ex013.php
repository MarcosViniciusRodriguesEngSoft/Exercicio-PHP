<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML + PHP: Formulário</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $nome  = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
        $ano   = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo  = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
        $idade = date("Y") - $ano;

        echo "$nome é $sexo tem $idade anos.";
        ?>
        <a href="Ex013.html">Voltar</a>
    </div>
</body>

</html>