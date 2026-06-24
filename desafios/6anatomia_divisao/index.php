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
        $dividendo = !empty($_GET["d1"]) ? $_GET["d1"] : 0;
        $divisor = !empty($_GET["d2"]) ? $_GET["d2"] : 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
             <label for="divd">Dividendo</label>
             <input type=number name="d1" id="d1" min="0" value="<?=$dividendo?>">
             <label for="divs">Divisor</label>
             <input type=number name="d2" id="d2" min="1" value="<?=$divisor?>">
             <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            //Cálculos
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

            //echo "<ul>";
            //echo "<li>Dividendo: $dividendo</li>";
            //echo "<li>Divisor: $divisor</li>";
            //echo "<li>Quociente: $quociente</li>";
            //echo "<li>Resto: $resto</li>";
            //echo "</ul>";
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>