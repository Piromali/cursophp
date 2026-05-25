<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //  0x = hexadecimal 0b = binário 0 = 0ctal
        // $num = 0x1A; //26 em hexadecimal
        // echo "O valor da variável é $num";

        // $v = true;
        // var_dump($v); //ele devolve o tipo da variável alem do valor dentro dela

        // $num = (int) 3e2; // 3x 10(2) coerção
        // echo "O valor é $num"
        // var_dump($num)

        // $num = (float) "950";
        // var_dump($num);

        // $n1 = "1";
        // $n2 = 2;
        // $n3 = 3.0;
        // $n4 = (int) 2.5;
        // $n5 = (float) "5";
        // echo var_dump($n1, ",", $n2, ",", $n3, ",", $n4);

        // $casado = true;
        // var_dump($casado);
        // print "O valor para casado é $casado"; //para uma variável bool, no PHP, o valor true é 1 e o valor false é vazio

        // $vet = [6, 2.3, "Clara", 3, 2, false];
        // echo "O vetor é $vet"; // aparece esse erro: Array to string conversion
        // var_dump($vet); // aqui ele vai mostrar o tipo da váriavel que é array, e o tipo de cada valor dentro de cada instância

        class Pessoa {
            private string $nome; //atributo do tipo string
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>