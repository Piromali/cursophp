<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <?php 
            $dinheiro = floatval($_GET["dinheiro"]);
            var_dump($dinheiro);
            $convert = $dinheiro / 5.22;

            echo "<p>Seus R$ $dinheiro equivalem a <strong>US$ $convert</strong></p>";
            echo "<p><strong>* Cotação fixa de R$5,22</strong> informada diretamente no código.</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>