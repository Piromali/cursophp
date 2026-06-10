<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $n = !empty($_GET["numero"]) ? $_GET["numero"] : 0;
            $ant = $n - 1;
            $suc = $n + 1;

            echo "<p>O número escolhido foi <strong>$n</strong></p>";
            echo "<p>O seu <i>antecessor</i> é $ant</p>";
            echo "<p>O seu <i>sucessor</i> é $suc</p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x1F504; Voltar para a página anterior</button>
    </main>
</body>
</html>