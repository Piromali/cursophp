<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $atual = date("Y");
        $nasc = !empty($_GET["nasc"]) ? $_GET["nasc"] : 0;
        $ano = !empty($_GET["ano"]) ? $_GET["ano"] : $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
             <label for="nasc">Em que ano você nasceu?</label>
             <input type=number name="nasc" id="nasc" max="<?= $atual ?>" value="<?=$nasc?>" required>
             <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $atual ?></strong>)</label>
             <input type=number name="ano" id="ano" min="<?=$nasc ?>" value="<?=$ano ?>" required>
             <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nasc;
            echo "Quem nascem em $nasc vai ter <strong>$idade anos</strong> em $ano!"
        ?>
    </section>
</body>
</html>