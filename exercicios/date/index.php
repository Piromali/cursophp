<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); // GMT-3

        echo "Hoje é dia " . date("d/M/Y"); 
        /* d minusculo é para o numero do dia, e o D maiusculo é para tipo "segunda, terça etc" */

        echo " e a hora atual é " . date("G:i:s"); // A hora que apareceu aqui é referente ao fuso que está no seu SERVIDOR, e não da sua maquina
    ?>
</body>
</html>