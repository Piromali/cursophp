<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>
        <?php 
            //cotação vindo da API do banco central
            $inicio = date("m-d-Y", strtotime("-7 days")); //A data de hoje - 7 dias
            $fim = date("m-d-Y"); //A data de hoje

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotação = $dados["value"][0]["cotacaoCompra"];

            $real = !empty($_GET["dinheiro"]) ? $_GET["dinheiro"] : 0;
            $dolar = $real / $cotação;

            //Formatação de moedas com internacionalização
            //Biblioteca intl (Internallization PHP)
            //^ essa é uma biblioteca que funciona em servidores "reais" talvez no XAMPP não funcione (a não ser que você configure o php.ini)

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            echo "<p>* Cotação (<i>$cotação</i>) obtida diretamente no site do <strong><a href='https://www.bcb.gov.br/'>Banco central do Brasil</a></p>"
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>