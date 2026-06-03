<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["numero"];
            $ant = $n - 1;
            $suc = $n + 1;

            echo "<p>O número escolhido foi <strong>$n</strong></p>";
            echo "<p>O seu <i>antecessor</i> é $ant</p>";
            echo "<p>O seu <i>sucessor</i> é $suc</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>