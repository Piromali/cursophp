<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
            $min = 0;
            $max = 100;
            $nA = random_int($min, $max);

            echo "<p>Gerando um número aleatório entre $min e $max...</p>";
            echo "<p>O valor gerado foi <strong>$nA</strong></p>";

        ?>
        <p><a href="javascript:location.reload()">Gerar outro</a></p>
    </main>
</body>
</html>