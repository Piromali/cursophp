<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = !empty($_GET["num"]) ? $_GET["num"] : 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
             <label for="num">Número</label>
             <input type=number name="num" id="num" value="<?=$num?>">
             <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            $rc = $num ** (1/3);
            $rq = sqrt($num);

            print "<p> Analisando o <strong>número $num</strong>, temos:";

            echo "<ul><li>A sua raiz quadrada é <strong>". number_format($rq, 3, ",", ".") ."</strong> </li>";
            echo "<li>A sua raiz cúbica é <strong>". number_format($rc, 3, ",", ".") ."</strong></li></ul>"
        ?>
    </section>
</body>
</html>