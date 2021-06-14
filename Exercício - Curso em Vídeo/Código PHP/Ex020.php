<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $c = 1;
        while ($c <= 10) {
            echo $c . "<br>";
            $c++;
        }
        $c = 1;
        while ($c <= 15) {
            echo $c . "<br>";
            $c += 1;
        }
        $c = 10;
        while ($c >= 1) {
            echo $c . "<br>";
            $c--;
        }
        $c = 10;
        while ($c >= 0) {
            echo $c . "<br>";
            $c -= 2; // $c = $c -2;
        }
        ?>
    </div>
</body>

</html>