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
        <h1>Conversor de moedas</h1>
        <?php 
            $real = !empty($_GET["dinheiro"]) ? $_GET["dinheiro"] : 0;
            $cotacao = 5.18;
            $dolar = $real / $cotacao;

            //Formatação simples de numeros
            // echo "Seus R\$" . number_format($dinheiro, 2, ",", ".") . " equivalem a US\$" . number_format($convert, 2, ",", ".");

            //Formatação de moedas com internacionalização
            //Biblioteca intl (Internallization PHP) - essa é uma biblioteca que funciona em servidores "reais" talvez no XAMPP não funcione (a não ser que você configure o php.ini)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            echo "<p><strong>* Cotação fixa de R$5,18</strong> informada diretamente no código.</p>"
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>