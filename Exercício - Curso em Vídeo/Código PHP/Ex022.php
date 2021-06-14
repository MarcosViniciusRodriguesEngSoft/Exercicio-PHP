<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição Do While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $c = 1;
        do {
            echo "$c ";
            $c ++;
        } while ($c <= 10);

        echo "<br>";

        $c = 1;
        do {
            echo "$c ";
            $c += 2;
        } while ($c <= 20);

        echo "<br>";
        
        $c = 10;
        do {
            echo "$c ";
            $c --;
        } while ($c >= 1);
        ?>
    </div>
</body>

</html>