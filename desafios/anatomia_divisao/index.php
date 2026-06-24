<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulário retroalimentado
        $dividendo = !empty($_GET["divd"]) ? $_GET["divd"] : 0;
        $divisor = !empty($_GET["divs"]) ? $_GET["divs"] : 0;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
             <label for="divd">Dividendo</label>
             <input type=number name="divd" id="divd" value="<?=$dividendo?>">
             <label for="divs">Divisor</label>
             <input type=number name="divs" id="divs" value="<?=$divisor?>">
             <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $divisaoReal = $dividendo / $divisor;
            $intdivisao = (int) $divisaoReal;
            $resto = $dividendo % $divisor;
            print "<p>O Dividendo é <strong>$dividendo</strong>, o Divisor é <strong>$divisor</strong>, o Cociente é <strong>$intdivisao</strong> e o Resto é <strong>$resto</strong></p>";
        ?>
    </section>
</body>
</html>