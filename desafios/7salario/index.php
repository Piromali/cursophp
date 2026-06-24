<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_621.00;
        $salario = !empty($_GET["salario"]) ? $_GET["salario"] : $minimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
             <label for="salario">Salário (R$)</label>
             <input type=number name="salario" id="salario" value="<?=$salario?>" step="0.01">
             <p>Considerando o salário mínimo de <strong>R$<?= number_format($minimo, 2, ",", ".")?></strong></p>
             <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $quantidade = intdiv($salario, $minimo);
            //            (int) ($salario / $salariominimo)
            $resto = $salario % $minimo;
            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            print "<p>Quem recebe um salário de ". numfmt_format_currency($padrao, $salario, "BRL") ." ganha <strong>$quantidade salários mínimos</strong> + ". numfmt_format_currency($padrao, $resto, "BRL") .".</p>"
        ?>
    </section>
</body>
</html>